<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\SslCertValidatorCli\SrcCommand;

class SrcCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $application = new Application();
        $application->add(new SrcCommand());

        $command = $application->find('ssl-cert-validator-cli:src');
        $commandTester = new CommandTester($command);
        $commandTester->execute([]);

        $commandTester->assertCommandIsSuccessful();
    }
}