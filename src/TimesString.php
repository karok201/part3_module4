<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TimesString extends Command
{
    protected function configure()
    {
        $this
            ->setName('times_string')
            ->setDescription('You can show string that times as you want')
            ->addArgument('string', InputArgument::REQUIRED, 'Input string')
            ->addOption('times', '-t', InputArgument::OPTIONAL, 'What times?', 1)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($input->getArgument('string'));
        }
        return Command::SUCCESS;
    }
}