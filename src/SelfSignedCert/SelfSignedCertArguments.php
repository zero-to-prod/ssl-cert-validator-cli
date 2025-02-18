<?php

namespace Zerotoprod\SslCertValidatorCli\SelfSignedCert;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
 */
class SelfSignedCertArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
     */
    public const hostname = 'hostname';
    /**
     * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
     */
    public string $hostname;
}