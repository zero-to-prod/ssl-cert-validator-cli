<?php

namespace Zerotoprod\SslCertValidatorCli\SelfSignedCert;

use Zerotoprod\DataModel\DataModel;

class SelfSignedCertArguments
{
    use DataModel;

    public const hostname = 'hostname';
    public string $hostname;
}