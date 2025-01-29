<?php

namespace Zerotoprod\SslCertValidatorCli\ValidateCert;

use Zerotoprod\DataModel\DataModel;

class ValidateCertArguments
{
    use DataModel;

    public const hostname = 'hostname';
    public string $hostname;
}