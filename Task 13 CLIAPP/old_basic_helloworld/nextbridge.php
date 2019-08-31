#! /user/bin/env php

<?php

use Acme\SayHelloCommand;
use Symfony\Component\Console\Application;


require 'vendor/autoload.php';


$app = new Application('NextBride DEMO','1.0');

$app->add(new SayHelloCommand);

$app->run();