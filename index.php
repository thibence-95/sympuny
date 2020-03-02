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

switch ($_GET['type']) {
    case "DEBUG":
        $log->pushHandler(new StreamHandler('Logs/info.log', Logger::DEBUG));
        break;
    case "INFO":
        $log->pushHandler(new StreamHandler('Logs/info.log', Logger::INFO));
        break;
    case "NOTICE":
        $log->pushHandler(new StreamHandler('Logs/info.log', Logger::NOTICE));
        break;
    case "WARNING":
        $log->pushHandler(new StreamHandler('Logs/warning.log', Logger::WARNING));
        break;
    case "ERROR":
        $log->pushHandler(new StreamHandler('Logs/warning.log', Logger::ERROR));
        break;
    case "CRITICAL":
        $log->pushHandler(new StreamHandler('Logs/warning.log', Logger::CRITICAL));
        break;
    case "ALERT":
        $log->pushHandler(new StreamHandler('Logs/warning.log', Logger::ALERT));
        break;
    case "EMERGENCY":
        $log->pushHandler(new StreamHandler('Logs/emergency.log', Logger::EMERGENCY));
        break;
}




// add records to the log
$log->warning('Foo');
$log->error('Bar');