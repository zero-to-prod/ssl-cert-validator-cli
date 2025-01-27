<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\SslCertValidator\SslCertificate;

#[AsCommand(
    name: 'ssl-cert-validator-cli:validate-cert',
    description: 'Determines if cert is valid. Returns `valid` or `invalid`.'
)]
class ValidateCertCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            SslCertificate::from($input->getArgument('hostname'))
                ->isValid() ? 'valid' : 'invalid'
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument('hostname', InputArgument::REQUIRED, 'Hostname');
    }
}