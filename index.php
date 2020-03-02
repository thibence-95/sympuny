<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'buttons.html';
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('myLogChannel');
$log->pushHandler(new StreamHandler('logger.log', Logger::DEBUG));


// add records to the log
$log->warning('Foo');
$log->error('Bar');