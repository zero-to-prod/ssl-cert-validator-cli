<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\SelfSignedCert\SelfSignedCertArguments;
use Zerotoprod\SslCertValidatorCli\SelfSignedCert\SelfSignedCertCommand;

class SelfSignedCertCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new SelfSignedCertCommand());

        $Command = $Application->find(SelfSignedCertCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            SelfSignedCertArguments::hostname => SelfSignedCertArguments::hostname
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}