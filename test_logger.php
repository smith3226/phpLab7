<?php
require 'vendor/autoload.php';
use App\AppLogger;

$logger = new AppLogger();
$logger->logInfo('Informational log entry');
$logger->logError('Error log entry');

?>