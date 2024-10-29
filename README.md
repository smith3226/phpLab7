This lab involves implementing application logging in a PHP project using Composer and Monolog.


#Project Setup
Create Project Folder:
Make a new folder for project and navigate into it.
Initialize Composer:
Run composer init in the terminal to create a composer.json file.
Install Monolog:
Execute composer require monolog/monolog to add Monolog.
PSR-4 Autoloading Configuration
Edit composer.json:
Add an autoload section for PSR-4:
json
"autoload": {
  "psr-4": {
    "App\\": "src/"
  }
}


Create test_logger.php in the root directory and include the autoload file:
php
require_once __DIR__ . '/vendor/autoload.php';

Run the Script:
Execute php test_logger.php and check the log files in the logs directory.
