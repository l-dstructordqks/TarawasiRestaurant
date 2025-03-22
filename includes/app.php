<?php
use Dotenv\Dotenv;
use Model\ActiveRecord;
require __DIR__ . '/../vendor/autoload.php';

// Adding Dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'functions.php';
require 'database.php';

// adding __DIR__(is a SUPERGLOBAL in PHP) to take the location of the actual file

ActiveRecord::setDB($db);