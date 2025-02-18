<?php

namespace Zerotoprod\SslCertValidatorCli\Src;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
 */
#[AsCommand(
    name: SrcCommand::signature,
    description: 'Project source link'
)]
class SrcCommand extends Command
{

    /**
     * @link https://github.com/zero-to-prod/ssl-cert-validator-cli
     */
    public const signature = 'ssl-cert-validator-cli:src';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('https://github.com/zero-to-prod/ssl-cert-validator-cli');

        return Command::SUCCESS;
    }
}