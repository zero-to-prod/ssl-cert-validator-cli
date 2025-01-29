<?php

namespace Zerotoprod\SslCertValidatorCli\GetCert;

use Zerotoprod\DataModel\DataModel;

class GetCertArguments
{
    use DataModel;

    public const hostname = 'hostname';
    public string $hostname;
}