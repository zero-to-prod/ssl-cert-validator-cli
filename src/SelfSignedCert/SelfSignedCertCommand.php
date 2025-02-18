<?php

namespace Zerotoprod\SslCertValidatorCli\SelfSignedCert;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;
use Zerotoprod\SslCertValidator\SslCertificate;

/**
 * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
 */
#[AsCommand(
    name: SelfSignedCertCommand::signature,
    description: 'Determines if cer is self-signed for a given hostname.  Returns hostname if true, null otherwise.'
)]
class SelfSignedCertCommand extends Command
{
    /**
     * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
     */
    public const signature = 'ssl-cert-validator-cli:self-signed-cert';

    /**
     * @throws Throwable
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = SelfSignedCertArguments::from($input->getArguments());

        $output->writeln(
            SslCertificate::isSelfSigned($Args->hostname)
                ? $Args->hostname
                : ''
        );

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this->addArgument(SelfSignedCertArguments::hostname, InputArgument::REQUIRED, 'Hostname');
    }
}