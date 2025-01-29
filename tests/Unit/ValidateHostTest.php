<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\ValidateHost\ValidateHostArguments;
use Zerotoprod\SslCertValidatorCli\ValidateHost\ValidateHostCommand;

class ValidateHostTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ValidateHostCommand());

        $Command = $Application->find(ValidateHostCommand::signature);
        $CommandTester = new CommandTester($Command);
        $CommandTester->execute([
            ValidateHostArguments::hostname => 'https://google.com'
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}