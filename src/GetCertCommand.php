<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\SslCertValidator\SslCertificate;

#[AsCommand(
    name: 'ssl-cert-validator-cli:get-cert',
    description: 'Get SSL certificate for a given hostname.'
)]
class GetCertCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            json_encode(SslCertificate::from($input->getArgument('hostname')), JSON_PRETTY_PRINT)
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument('hostname', InputArgument::REQUIRED, 'Hostname');
    }
}