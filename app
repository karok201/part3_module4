<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('some application');

$app->add(new \App\SayHello());

$app->add(new \App\TimesString());

$app->add(new \App\Quest());

$app->run();