<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\GetCert\GetCertArguments;
use Zerotoprod\SslCertValidatorCli\GetCert\GetCertCommand;

class GetCertCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new GetCertCommand());

        $Command = $Application->find(GetCertCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            GetCertArguments::hostname => GetCertArguments::hostname
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}