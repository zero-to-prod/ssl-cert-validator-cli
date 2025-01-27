<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'ssl-cert-validator-cli:src',
    description: 'Project source link'
)]
class SrcCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('https://github.com/zero-to-prod/ssl-cert-validator-cli');

        return Command::SUCCESS;
    }
}