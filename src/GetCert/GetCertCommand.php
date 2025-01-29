<?php

namespace Zerotoprod\SslCertValidatorCli\GetCert;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\SslCertValidator\SslCertificate;

#[AsCommand(
    name: GetCertCommand::signature,
    description: 'Get SSL certificate for a given hostname.'
)]
class GetCertCommand extends Command
{
    public const signature = 'ssl-cert-validator-cli:get-cert';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = GetCertArguments::from($input->getArguments());

        $output->writeln(
            json_encode(SslCertificate::from($Args->hostname), JSON_PRETTY_PRINT)
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(GetCertArguments::hostname, InputArgument::REQUIRED, 'Hostname');
    }
}