<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\ValidateCert\ValidateCertArguments;
use Zerotoprod\SslCertValidatorCli\ValidateCert\ValidateCertCommand;

class ValidateCertTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ValidateCertCommand());

        $Command = $Application->find(ValidateCertCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            ValidateCertArguments::hostname => 'https://google.com'
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}