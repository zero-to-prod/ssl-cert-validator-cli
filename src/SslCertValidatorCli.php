<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Application;
use Zerotoprod\SslCertValidatorCli\GetCert\GetCertCommand;
use Zerotoprod\SslCertValidatorCli\SelfSignedCert\SelfSignedCertCommand;
use Zerotoprod\SslCertValidatorCli\Src\SrcCommand;
use Zerotoprod\SslCertValidatorCli\ValidateCert\ValidateCertCommand;
use Zerotoprod\SslCertValidatorCli\ValidateHost\ValidateHostCommand;

class SslCertValidatorCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new GetCertCommand());
        $Application->add(new SelfSignedCertCommand());
        $Application->add(new SrcCommand());
        $Application->add(new ValidateCertCommand());
        $Application->add(new ValidateHostCommand());
    }
}