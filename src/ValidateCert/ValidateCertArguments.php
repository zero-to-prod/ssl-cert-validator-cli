<?php

namespace Zerotoprod\SslCertValidatorCli\ValidateCert;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
 */
class ValidateCertArguments
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