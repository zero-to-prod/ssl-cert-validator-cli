<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\:package_namespace\ExampleCommand;

class ExampleTest extends TestCase
{
    #[Test] public function command(): void
    {
        $application = new Application();
        $application->add(new ExampleCommand());

        $command = $application->find('example');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'arg1' => '',
            '--option1' => '',
        ]);

        $commandTester->assertCommandIsSuccessful();
    }
}