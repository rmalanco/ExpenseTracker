<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Config/Constants.php';

use ExpenseTracker\Config\App;

App::run();