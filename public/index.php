<?php

require_once '../vendor/autoload.php';
require_once '../config/config.php';


$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__.'../.env');

$dbUser = getenv('DB_USER');
$dbUser = $_ENV['DB_USER'];
$dbUser = $_SERVER['DB_USER'];
 

use Core\App;

$app = new App();
$app->run();
