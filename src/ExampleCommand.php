<?php

namespace Zerotoprod\:package_namespace;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'example',
    description: 'description'
)]
class :package_namespace extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument('arg1', InputArgument::REQUIRED, 'description.');
        $this->addOption('option1', mode: InputOption::VALUE_OPTIONAL, description: 'description');
    }
}