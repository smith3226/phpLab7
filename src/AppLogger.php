<?php
 
namespace App;
 
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
 
class AppLogger
{
    private $logger;
 
    public function __construct()
    {
        $this->logger = new Logger('appLogger');
        $logFilePath = __DIR__ . '/../logs/app.log';
        $errorFilePath = __DIR__ . '/../logs/error.log';
 
        $logStreamHandler = new StreamHandler($logFilePath, Logger::INFO);
        $errorStreamHandler = new StreamHandler($errorFilePath, Logger::ERROR);
 
        $this->logger->pushHandler($logStreamHandler);
        $this->logger->pushHandler($errorStreamHandler);
 
    }
 
    public function LogInfo($message)
    {
        $this->logger->info($message);
    }
 
    public function LogError($message)
    {
        $this->logger->error($message);
    }
}
 
?>