<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class Quest extends Command
{
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('Quest')
//            ->addArgument('to', InputArgument::REQUIRED, 'Hello to?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('Введите ваше имя: ');
        $questionAge =  new Question('Введите ваш возраст: ');
        $questionGender = new ChoiceQuestion(
            'Please choose your gender:',
            ['м', 'ж'],
            '0,1'
        );

        $userName = $helper->ask($input, $output, $questionName);
        $userAge = $helper->ask($input, $output, $questionAge);
        $userGender = $helper->ask($input, $output, $questionGender);

        $output->writeln('Здравствуйте, ' . $userName . ' Ваш возраст: ' . $userAge . ' Ваш пол: ' . $userGender);

//        if (!$helper->ask($input, $output, $question)) {
//            return Command::SUCCESS;
//        }
        return Command::SUCCESS;
    }
}
