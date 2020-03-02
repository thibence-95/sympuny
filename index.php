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
        $log->pushHandler(new StreamHandler('Logs/debug.log', Logger::DEBUG));
        break;
    case "INFO":
        $log->pushHandler(new StreamHandler('Logs/info.log', Logger::INFO));
        break;
    case 2:
        echo "i equals 2";
        break;
}




// add records to the log
$log->warning('Foo');
$log->error('Bar');