<?php

namespace Zerotoprod\SslCertValidatorCli\ValidateHost;

use Zerotoprod\DataModel\DataModel;

class ValidateHostArguments
{
    use DataModel;

    public const hostname = 'hostname';
    public string $hostname;
}