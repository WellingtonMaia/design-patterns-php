<?php

require 'vendor/autoload.php';

use DesignPatterns\Singleton\Database;

$newQuery = Database::getInstance();
echo $newQuery->query("SELECT * FROM table;");

$newQuery2 = Database::getInstance();
echo $newQuery2->query("SELECT * FROM table WHERE id = {1}");