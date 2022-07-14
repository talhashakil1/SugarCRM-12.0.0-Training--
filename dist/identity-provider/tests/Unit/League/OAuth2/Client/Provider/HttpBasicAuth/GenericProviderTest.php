<?php
/*
* Your installation or use of this SugarCRM file is subject to the applicable
* terms available at
* http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
* If you do not agree to all of the applicable terms or do not have the
* authority to bind the entity as an authorized representative, then do not
* install or use this SugarCRM file.
*
* Copyright (C) SugarCRM Inc. All rights reserved.
*/

namespace Sugarcrm\IdentityProvider\Tests\Unit\League\OAuth2\Client\Provider\HttpBasicAuth;

use Psr\Http\Message\ResponseInterface;
use League\OAuth2\Client\Grant\ClientCredentials;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\RequestInterface;
use Sugarcrm\IdentityProvider\League\OAuth2\Client\Provider\HttpBasicAuth\GenericProvider;
use League\OAuth2\Client\Tool\RequestFactory;
use Psr\Log\LoggerInterface;
use GuzzleHttp\ClientInterface;

/**
 * @coversDefaultClass \Sugarcrm\IdentityProvider\League\OAuth2\Client\Provider\HttpBasicAuth\GenericProvider
 */
class GenericProviderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|LoggerInterface
     */
    protected $logger;

    /**
     * @var array
     */
    protected $options;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|RequestFactory
     */
    protected $requestFactory;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|RequestInterface
     */
    protected $request;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ResponseInterface
     */
    protected $response;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ClientInterface
     */
    protected $httpClient;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|AccessToken
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $authorization;

    /**
     * GenericProviderTest constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->logger = $this->createMock(LoggerInterface::class);

        $this->requestFactory = $this->createMock(RequestFactory::class);
        $this->request = $this->createMock(RequestInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
        $this->httpClient = $this->createMock(ClientInterface::class);
        $this->accessToken = $this->createMock(AccessToken::class);

        $this->options = [
            'clientId' => 'test',
            'clientSecret' => 'testSecret',
            'redirectUri' => '',
            'urlAuthorize' => 'https://testUrlAuth',
            'urlAccessToken' => 'https://testUrlAccessToken',
            'urlResourceOwnerDetails' => 'https://testUrlResourceOwnerDetails',
            'urlIntrospectToken' => 'https://testUrlIntrospectToken',
            'urlRevokeToken' => 'https://testUrlRevokeToken',
            'accessTokenFile' => '/tmp/bar.php',
            'accessTokenRefreshUrl' => 'http://some-refresh-url',
            'logger' => $this->logger
        ];

        $this->authorization = 'Basic ' . base64_encode(
            sprintf('%s:%s', $this->options['clientId'], $this->options['clientSecret'])
        );
    }

    /**
     * @covers ::getRequiredOptions
     * @expectedException \InvalidArgumentException
     */
    public function testGetRequiredOptions()
    {
        new GenericProvider([
            'clientId' => 'testLocal',
            'redirectUri' => '',
            'urlAuthorize' => 'http://sts.sugarcrm.local/oauth2/auth',
            'urlAccessToken' => 'http://sts.sugarcrm.local/oauth2/token',
            'urlResourceOwnerDetails' => 'http://sts.sugarcrm.local/.well-known/jwks.json',
        ]);
    }

    /**
     * @covers ::getAccessTokenOptions
     */
    public function testGetAccessTokenOptions()
    {
        $authUrl = 'http://testUrlAuth';

        $grant = $this->getMockBuilder(ClientCredentials::class)
            ->setMethods(['prepareRequestParameters'])
            ->disableOriginalConstructor()
            ->getMock();

        $grant->expects($this->once())
            ->method('prepareRequestParameters')
            ->with($this->isType('array'), $this->isType('array'))
            ->willReturn([
                'client_id' => 'test:1',
                'client_secret' => 'testSecret',
                'redirect_uri'  => '',
                'grant_type' => 'client_credentials',
            ]);

        $response = $this->createMock(RequestInterface::class);

        $provider = $this->getMockBuilder(GenericProvider::class)
            ->enableOriginalConstructor()
            ->setConstructorArgs([[
                'clientId' => 'test:1',
                'clientSecret' => 'testSecret',
                'redirectUri' => '',
                'urlAuthorize' => $authUrl,
                'urlAccessToken' => 'http://testUrlAccessToken',
                'urlResourceOwnerDetails' => 'http://testUrlResourceOwnerDetails',
                'accessTokenFile' => '/tmp/bar.php',
                'accessTokenRefreshUrl' => 'http://some-refresh-url',
                'logger' => $this->createMock(LoggerInterface::class)
            ]])
            ->setMethods([
                'verifyGrant',
                'getAccessTokenUrl',
                'getRequest',
                'getParsedResponse',
                'prepareAccessTokenResponse',
                'createAccessToken',
            ])
            ->getMock();

        $provider->expects($this->once())
            ->method('verifyGrant')
            ->willReturn($grant);

        $provider->expects($this->once())
            ->method('getAccessTokenUrl')
            ->willReturn($authUrl);

        $provider->expects($this->once())
            ->method('getRequest')
            ->with($this->equalTo('POST'), $this->equalTo($authUrl), $this->callback(function ($options) {
                $encodedCredentials = base64_encode(
                    sprintf('%s:%s', urlencode('test:1'), urlencode('testSecret'))
                );
                $this->assertArrayHasKey('headers', $options);
                $this->assertArrayHasKey('Authorization', $options['headers']);
                $this->assertEquals('Basic ' . $encodedCredentials, $options['headers']['Authorization']);
                return true;
            }))
            ->willReturn($response);

        $provider->expects($this->once())->method('getParsedResponse')->willReturn([]);
        $provider->expects($this->once())->method('prepareAccessTokenResponse')->willReturn([]);
        $provider->expects($this->once())->method('createAccessToken');

        $provider->getAccessToken('client_credentials');
    }

    /**
     * @covers ::revokeToken
     */
    public function testRevokeToken(): void
    {
        $token = '--test--token-value--';
        $expectedResult = ['--', 'expected', '--', 'Result', '--'];

        $expectedRequestOptions = [
            'headers' => [
                'Authorization' => $this->authorization,
                'content-type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json',
            ],
            'body' => http_build_query(['token' => $token]),
        ];

        /** @var \PHPUnit_Framework_MockObject_MockObject|GenericProvider $provider */
        $provider = $this->getMockBuilder(GenericProvider::class)
            ->enableOriginalConstructor()
            ->setConstructorArgs([$this->options])
            ->setMethods([
                'getParsedResponse',
            ])
            ->getMock();
        $provider->setRequestFactory($this->requestFactory);

        $this->accessToken->expects($this->once())->method('getToken')->willReturn($token);

        $this->requestFactory->expects($this->once())
            ->method('getRequestWithOptions')
            ->with(
                GenericProvider::METHOD_POST,
                $this->options['urlRevokeToken'],
                $expectedRequestOptions
            )
            ->willReturn($this->request);
        $provider
            ->expects($this->once())
            ->method('getParsedResponse')
            ->with($this->request)
            ->willReturn($expectedResult);

        $result = $provider->revokeToken($this->accessToken);

        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @covers ::introspectToken
     */
    public function testIntrospectToken(): void
    {
        $token = '--test--token-value--';
        $expectedResult = ['--', 'expected', '--', 'Result', '--'];

        $expectedRequestOptions = [
            'headers' => [
                'Authorization' => $this->authorization,
                'content-type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json',
            ],
            'body' => http_build_query(['token' => $token]),
        ];

        /** @var \PHPUnit_Framework_MockObject_MockObject|GenericProvider $provider */
        $provider = $this->getMockBuilder(GenericProvider::class)
            ->enableOriginalConstructor()
            ->setConstructorArgs([$this->options])
            ->setMethods([
                'getParsedResponse',
            ])
            ->getMock();
        $provider->setRequestFactory($this->requestFactory);

        $this->accessToken->expects($this->once())->method('getToken')->willReturn($token);

        $this->requestFactory->expects($this->once())
            ->method('getRequestWithOptions')
            ->with(
                GenericProvider::METHOD_POST,
                $this->options['urlIntrospectToken'],
                $expectedRequestOptions
            )
            ->willReturn($this->request);
        $provider
            ->expects($this->once())
            ->method('getParsedResponse')
            ->with($this->request)
            ->willReturn($expectedResult);

        $result = $provider->introspectToken($this->accessToken);

        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @covers ::refreshAccessToken
     */
    public function testRefreshAccessTokenNoAccessTokenRefreshUrl()
    {
        $options = $this->options;
        $options['accessTokenRefreshUrl'] = null;
        /** @var \PHPUnit_Framework_MockObject_MockObject|GenericProvider $provider */
        $provider = new GenericProvider($options);

        $this->logger->expects($this->once())
            ->method('warning')
            ->with($this->stringContains("trigger access_token refresh"), $this->isType('array'));

        $this->assertFalse($provider->refreshAccessToken());
    }

    /**
     * @covers ::refreshAccessToken
     */
    public function testRefreshAccessTokenSendRequestFailed()
    {
        $provider = new GenericProvider($this->options);

        $provider->setRequestFactory($this->requestFactory);
        $this->requestFactory->expects($this->once())
            ->method('getRequestWithOptions')
            ->with(
                GenericProvider::METHOD_GET,
                $this->options['accessTokenRefreshUrl'],
                ['timeout' => 0.00001]
            )
            ->willReturn($this->request);

        $provider->setHttpClient($this->httpClient);
        $this->httpClient->expects($this->once())
            ->method('send')
            ->with($this->request)
            ->willThrowException(new \Exception('test'));

        $this->logger->expects($this->once())
            ->method('warning')
            ->with($this->stringContains("test"), $this->isType('array'));

        $this->assertFalse($provider->refreshAccessToken());
    }

    /**
     * @covers ::refreshAccessToken
     */
    public function testRefreshAccessToken()
    {
        $provider = new GenericProvider($this->options);

        $provider->setRequestFactory($this->requestFactory);
        $this->requestFactory->expects($this->once())
            ->method('getRequestWithOptions')
            ->with(
                GenericProvider::METHOD_GET,
                $this->options['accessTokenRefreshUrl'],
                ['timeout' => 0.00001]
            )
            ->willReturn($this->request);

        $provider->setHttpClient($this->httpClient);

        $this->httpClient->expects($this->once())
            ->method('send')
            ->with($this->request)
            ->willReturn($this->response);

        $this->logger->expects($this->once())
            ->method('debug')
            ->with("The access_token is refreshed.", $this->isType('array'));

        $this->assertTrue($provider->refreshAccessToken());
    }

    /**
     * @covers ::getClientID
     */
    public function testGetClientIDWithClientIdSet(): void
    {
        $options = $this->options;
        $options['clientId'] = 'some-login-service-srn';
        $provider = new GenericProvider($options);

        $this->assertEquals('some-login-service-srn', $provider->getClientID());
    }

    /**
     * @covers ::getClientID
     */
    public function testGGetClientIDWithClientIdInAccessTokenFile(): void
    {
        $options = $this->options;
        $options['clientId'] = '';
        # to bypass `is_readable()`
        $options['accessTokenFile'] = __FILE__;

        $provider = $this->getMockBuilder(GenericProvider::class)
            ->setConstructorArgs([$options])
            ->setMethods(['getAccessTokenFileData'])
            ->getMock();

        $provider->method('getAccessTokenFileData')->willReturn([
            'client_id' => 'login-service-srn',
        ]);

        $this->assertEquals('login-service-srn', $provider->getClientID());
    }

    /**
     * @covers ::getClientSecret
     */
    public function testGetSecretWithClientSecretSet(): void
    {
        $options = $this->options;
        $options['clientSecret'] = 'some-secret';
        $provider = new GenericProvider($options);

        $this->assertEquals('some-secret', $provider->getClientSecret());
    }

    /**
     * @covers ::getClientSecret
     */
    public function testGetClientSecretWithTokenFile(): void
    {
        $options = $this->options;
        $options['clientSecret'] = '';
        # to bypass `is_readable()`
        $options['accessTokenFile'] = __FILE__;

        $provider = $this->getMockBuilder(GenericProvider::class)
            ->setConstructorArgs([$options])
            ->setMethods(['getAccessTokenFileData'])
            ->getMock();

        $provider->method('getAccessTokenFileData')->willReturn([
            'client_secret' => 'client-secret',
        ]);

        $this->assertEquals('client-secret', $provider->getClientSecret());
    }
}
