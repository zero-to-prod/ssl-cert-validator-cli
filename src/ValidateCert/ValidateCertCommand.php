<?php

namespace Zerotoprod\SslCertValidatorCli\ValidateCert;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\SslCertValidator\SslCertificate;

#[AsCommand(
    name: ValidateCertCommand::signature,
    description: 'Determines if cert is valid. Returns hostname if true, null otherwise.'
)]
class ValidateCertCommand extends Command
{
    public const signature = 'ssl-cert-validator-cli:validate-cert';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = ValidateCertArguments::from($input->getArguments());

        $output->writeln(
            SslCertificate::from($Args->hostname)->isValid()
                ? $Args->hostname
                : ''
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument('hostname', InputArgument::REQUIRED, 'Hostname');
    }
}