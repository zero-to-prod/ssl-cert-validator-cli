<?php

namespace Zerotoprod\SslCertValidatorCli\ValidateHost;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;
use Zerotoprod\SslCertValidator\SslCertificate;
use Zerotoprod\SslCertValidatorCli\ValidateCert\ValidateCertArguments;

#[AsCommand(
    name: ValidateHostCommand::signature,
    description: 'Determines if a hostname is valid. Returns hostname if true, null otherwise.'
)]
class ValidateHostCommand extends Command
{
    public const signature = 'ssl-cert-validator-cli:validate-host';

    /**
     * @throws Throwable
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = ValidateCertArguments::from($input->getArguments());

        $output->writeln(
            SslCertificate::hostIsValid($Args->hostname)
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