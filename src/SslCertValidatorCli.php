<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Application;

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