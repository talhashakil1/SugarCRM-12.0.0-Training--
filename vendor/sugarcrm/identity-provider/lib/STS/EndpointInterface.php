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

namespace Sugarcrm\IdentityProvider\STS;

/**
 * Interface that defines methods for retrieving oauth2 server endpoints.
 */
interface EndpointInterface
{
    /**
     * oAuth2 token retrieval endpoint
     */
    public const TOKEN_ENDPOINT = 'token';

    /**
     * oAuth2 auth endpoint
     */
    public const AUTH_ENDPOINT = 'auth';

    /**
     * oAuth2 auth endpoint
     */
    public const OAUTH2_ENDPOINT = 'oauth2';

    /**
     * oAuth2 introspect endpoint
     */
    public const INTROSPECT_ENDPOINT = 'introspect';

    /**
     * oAuth2 token revocation endpoint
     */
    public const REVOCATION_ENDPOINT = 'revoke';

    /**
     * oAuth2 consent data endpoint
     */
    public const CONSENT_ENDPOINT = 'auth/requests/consent';

    /**
     * Hydra Login Requests endpoint
     */
    public const LOGIN_REQUESTS_ENDPOINT = 'requests/login';

    /**
     *  oAuth2 user info endpoint
     */
    public const USER_INFO_ENDPOINT = 'userinfo';

    /**
     * Accept endpoint
     */
    public const ACCEPT_ENDPOINT = 'accept';

    /**
     * Reject endpoint
     */
    public const REJECT_ENDPOINT = 'reject';

    /**
     * A RSA public/private key pair for signing and validating OpenID Connect ID Tokens
     */
    public const OPENID_KEYS = 'hydra.openid.id-token';

    /**
     * A RSA public/private key pair for signing and validating the consent challenge
     */
    public const CONSENT_CHALLENGE_KEYS = 'hydra.consent.challenge';

    /**
     * A RSA public/private key pair for signing and validating the consent response
     */
    public const CONSENT_RESPONSE_KEYS = 'hydra.consent.response';

    /**
     * A RSA public/private key pair and a certificate for signing HTTP over TLS
     */
    public const HTTPS_TLS_KEYS = 'https-tls';

    /**
     * A public key
     */
    public const PUBLIC_KEY = 'public';

    /**
     * A private key
     */
    public const PRIVATE_KEY = 'private';

    /**
     * Build path to STS oAuth2 server endpoints for token and auth.
     *
     * @param $endpoint oAuth2 method such as auth, token.
     * @return string
     */
    public function getOAuth2Endpoint($endpoint);

    /**
     * Build path to STS oAuth2 server endpoints for public and private key retrieval.
     *
     * @param $endpoint @see https://ory.gitbooks.io/hydra/content/jwk.html
     * @param $keyType Key type for retrieval public or private.
     * @return string
     */
    public function getKeysEndpoint($endpoint, $keyType);

    /**
     * Returns path for oauth2 server well known configuration.
     * @return string
     */
    public function getWellKnownConfigurationEndpoint();
}
