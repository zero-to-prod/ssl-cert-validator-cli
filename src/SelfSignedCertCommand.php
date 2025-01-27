<?php

namespace Zerotoprod\SslCertValidatorCli;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;
use Zerotoprod\SslCertValidator\SslCertificate;

#[AsCommand(
    name: 'ssl-cert-validator-cli:self-signed-cert',
    description: 'Determines if an SSL certificate is valid for a given hostname.'
)]
class SelfSignedCertCommand extends Command
{

    /**
     * @throws Throwable
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(
            SslCertificate::isSelfSigned($input->getArgument('hostname'))
                ? 'true'
                : 'false'
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument('hostname', InputArgument::REQUIRED, 'Hostname');
    }
}