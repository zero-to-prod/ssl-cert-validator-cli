<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\selfSignedCert\selfSignedCertArguments;
use Zerotoprod\SslCertValidatorCli\selfSignedCert\selfSignedCertCommand;

class SelfSignedCertCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new selfSignedCertCommand());

        $Command = $Application->find(selfSignedCertCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            selfSignedCertArguments::hostname => SelfSignedCertArguments::hostname
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}