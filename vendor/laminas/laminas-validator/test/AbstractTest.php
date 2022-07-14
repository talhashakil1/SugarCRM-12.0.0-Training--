<?php

/**
 * @see       https://github.com/laminas/laminas-validator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-validator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-validator/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Validator;

use Laminas\Validator\AbstractValidator;
use Laminas\Validator\EmailAddress;
use Laminas\Validator\Exception\InvalidArgumentException;
use Laminas\Validator\Hostname;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

/**
 * @group      Laminas_Validator
 */
class AbstractTest extends TestCase
{
    /** @var AbstractValidator */
    public $validator;

    /**
     * Whether an error occurred
     *
     * @var bool
     */
    protected $errorOccurred = false;

    protected function setUp() : void
    {
        $this->validator = new TestAsset\ConcreteValidator();
    }

    protected function tearDown() : void
    {
        AbstractValidator::setDefaultTranslator(null, 'default');
    }

    public function testTranslatorNullByDefault()
    {
        $this->assertNull($this->validator->getTranslator());
    }

    public function testCanSetTranslator()
    {
        $this->testTranslatorNullByDefault();
        set_error_handler([$this, 'errorHandlerIgnore']);
        $translator = new TestAsset\Translator();
        restore_error_handler();
        $this->validator->setTranslator($translator);
        $this->assertSame($translator, $this->validator->getTranslator());
    }

    public function testCanSetTranslatorToNull()
    {
        $this->testCanSetTranslator();
        set_error_handler([$this, 'errorHandlerIgnore']);
        $this->validator->setTranslator(null);
        restore_error_handler();
        $this->assertNull($this->validator->getTranslator());
    }

    public function testErrorMessagesAreTranslatedWhenTranslatorPresent()
    {
        if (! extension_loaded('intl')) {
            $this->markTestSkipped('ext/intl not enabled');
        }

        $loader = new TestAsset\ArrayTranslator();
        $loader->translations = [
            '%value% was passed' => 'This is the translated message for %value%',
        ];
        $translator = new TestAsset\Translator();
        $translator->getPluginManager()->setService('default', $loader);
        $translator->addTranslationFile('default', null);

        $this->validator->setTranslator($translator);
        $this->assertFalse($this->validator->isValid('bar'));
        $messages = $this->validator->getMessages();
        $this->assertArrayHasKey('fooMessage', $messages);
        $this->assertStringContainsString('bar', $messages['fooMessage'], var_export($messages, 1));
        $this->assertStringContainsString('This is the translated message for ', $messages['fooMessage']);
    }

    public function testObscureValueFlagFalseByDefault()
    {
        $this->assertFalse($this->validator->isValueObscured());
    }

    public function testCanSetValueObscuredFlag()
    {
        $this->testObscureValueFlagFalseByDefault();
        $this->validator->setValueObscured(true);
        $this->assertTrue($this->validator->isValueObscured());
        $this->validator->setValueObscured(false);
        $this->assertFalse($this->validator->isValueObscured());
    }

    public function testValueIsObfuscatedWheObscureValueFlagIsTrue()
    {
        $this->validator->setValueObscured(true);
        $this->assertFalse($this->validator->isValid('foobar'));
        $messages = $this->validator->getMessages();
        $this->assertTrue(isset($messages['fooMessage']));
        $message = $messages['fooMessage'];
        $this->assertStringNotContainsString('foobar', $message);
        $this->assertStringContainsString('******', $message);
    }

    /**
     * @group Laminas-4463
     */
    public function testDoesNotFailOnObjectInput()
    {
        $this->assertFalse($this->validator->isValid(new \stdClass()));
        $messages = $this->validator->getMessages();
        $this->assertArrayHasKey('fooMessage', $messages);
    }

    public function testTranslatorEnabledPerDefault()
    {
        set_error_handler([$this, 'errorHandlerIgnore']);
        $translator = new TestAsset\Translator();
        $this->validator->setTranslator($translator);
        $this->assertTrue($this->validator->isTranslatorEnabled());
    }

    public function testCanDisableTranslator()
    {
        if (! extension_loaded('intl')) {
            $this->markTestSkipped('ext/intl not enabled');
        }

        $loader = new TestAsset\ArrayTranslator();
        $loader->translations = [
            '%value% was passed' => 'This is the translated message for %value%',
        ];
        $translator = new TestAsset\Translator();
        $translator->getPluginManager()->setService('default', $loader);
        $translator->addTranslationFile('default', null);
        $this->validator->setTranslator($translator);

        $this->assertFalse($this->validator->isValid('bar'));
        $messages = $this->validator->getMessages();
        $this->assertArrayHasKey('fooMessage', $messages);
        $this->assertStringContainsString('bar', $messages['fooMessage']);
        $this->assertStringContainsString('This is the translated message for ', $messages['fooMessage']);

        $this->validator->setTranslatorEnabled(false);
        $this->assertFalse($this->validator->isTranslatorEnabled());

        $this->assertFalse($this->validator->isValid('bar'));
        $messages = $this->validator->getMessages();
        $this->assertArrayHasKey('fooMessage', $messages);
        $this->assertStringContainsString('bar', $messages['fooMessage']);
        $this->assertStringContainsString('bar was passed', $messages['fooMessage']);
    }

    public function testGetMessageTemplates()
    {
        $messages = $this->validator->getMessageTemplates();
        $this->assertEquals([
            'fooMessage' => '%value% was passed',
            'barMessage' => '%value% was wrong',
        ], $messages);

        $this->assertEquals([
            TestAsset\ConcreteValidator::FOO_MESSAGE => '%value% was passed',
            TestAsset\ConcreteValidator::BAR_MESSAGE => '%value% was wrong',
        ], $messages);
    }

    public function testInvokeProxiesToIsValid()
    {
        $validator = new TestAsset\ConcreteValidator;
        $this->assertFalse($validator('foo'));
        $this->assertContains('foo was passed', $validator->getMessages());
    }

    public function testTranslatorMethods()
    {
        $translatorMock = $this->createMock(TestAsset\Translator::class);
        $this->validator->setTranslator($translatorMock, 'foo');

        $this->assertEquals($translatorMock, $this->validator->getTranslator());
        $this->assertEquals('foo', $this->validator->getTranslatorTextDomain());
        $this->assertTrue($this->validator->hasTranslator());
        $this->assertTrue($this->validator->isTranslatorEnabled());

        $this->validator->setTranslatorEnabled(false);
        $this->assertFalse($this->validator->isTranslatorEnabled());
    }

    public function testDefaultTranslatorMethods()
    {
        $this->assertFalse(AbstractValidator::hasDefaultTranslator());
        $this->assertNull(AbstractValidator::getDefaultTranslator());
        $this->assertEquals('default', AbstractValidator::getDefaultTranslatorTextDomain());

        $this->assertFalse($this->validator->hasTranslator());

        $translatorMock = $this->createMock(TestAsset\Translator::class);
        AbstractValidator::setDefaultTranslator($translatorMock, 'foo');

        $this->assertEquals($translatorMock, AbstractValidator::getDefaultTranslator());
        $this->assertEquals($translatorMock, $this->validator->getTranslator());
        $this->assertEquals('foo', AbstractValidator::getDefaultTranslatorTextDomain());
        $this->assertEquals('foo', $this->validator->getTranslatorTextDomain());
        $this->assertTrue(AbstractValidator::hasDefaultTranslator());
    }

    public function testMessageCreationWithNestedArrayValueDoesNotRaiseNotice()
    {
        $r = new ReflectionMethod($this->validator, 'createMessage');
        $r->setAccessible(true);

        $message = $r->invoke($this->validator, 'fooMessage', ['foo' => ['bar' => 'baz']]);
        $this->assertStringContainsString('foo', $message);
        $this->assertStringContainsString('bar', $message);
        $this->assertStringContainsString('baz', $message);
    }

    public function testNonIdenticalMessagesAllReturned()
    {
        $this->assertFalse($this->validator->isValid('invalid'));

        $messages = $this->validator->getMessages();

        $this->assertCount(2, $messages);
        $this->assertEquals([
            TestAsset\ConcreteValidator::FOO_MESSAGE => 'invalid was passed',
            TestAsset\ConcreteValidator::BAR_MESSAGE => 'invalid was wrong',
        ], $messages);
    }

    public function testIdenticalMessagesNotReturned()
    {
        $this->validator->setMessage('Default error message');

        $this->assertFalse($this->validator->isValid('invalid'));

        $messages = $this->validator->getMessages();

        $this->assertCount(1, $messages);
        $this->assertEquals('Default error message', reset($messages));
    }

    public function testIdenticalAndNonIdenticalMessagesReturned()
    {
        $validator = new EmailAddress();

        $this->assertFalse($validator->isValid('invalid@email.coma'));
        $this->assertCount(3, $validator->getMessages());
        $this->assertArrayHasKey(EmailAddress::INVALID_HOSTNAME, $validator->getMessages());
        $this->assertArrayHasKey(Hostname::UNKNOWN_TLD, $validator->getMessages());
        $this->assertArrayHasKey(Hostname::LOCAL_NAME_NOT_ALLOWED, $validator->getMessages());

        $validator->setMessages([
            EmailAddress::INVALID_HOSTNAME => 'This is the same error message',
            Hostname::UNKNOWN_TLD => 'This is the same error message',
        ]);

        $this->assertFalse($validator->isValid('invalid@email.coma'));
        $this->assertCount(2, $validator->getMessages());
        $this->assertArrayHasKey(EmailAddress::INVALID_HOSTNAME, $validator->getMessages());
        $this->assertArrayHasKey(Hostname::LOCAL_NAME_NOT_ALLOWED, $validator->getMessages());
    }

    /**
     * Ignores a raised PHP error when in effect, but throws a flag to indicate an error occurred
     *
     * @param  integer $errno
     * @param  string  $errstr
     * @param  string  $errfile
     * @param  integer $errline
     * @param  array   $errcontext
     * @return void
     */
    public function errorHandlerIgnore($errno, $errstr, $errfile, $errline, array $errcontext)
    {
        $this->errorOccurred = true;
    }

    public function testRetrievingUnknownOptionRaisesException()
    {
        $option = 'foo';
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf("Invalid option '%s'", $option));

        $this->validator->getOption($option);
    }

    public function invalidOptionsArguments()
    {
        return [
            'null' => [null],
            'true' => [true],
            'false' => [false],
            'zero' => [0],
            'int' => [1],
            'zero-float' => [0.0],
            'float' => [1.1],
            'string' => ['string'],
            'object' => [(object) []],
        ];
    }

    /**
     * @dataProvider invalidOptionsArguments
     */
    public function testSettingOptionsWithNonTraversableRaisesException($options)
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('setOptions expects an array or Traversable');
        $this->validator->setOptions($options);
    }
}
