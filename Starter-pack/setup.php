<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/BookRepository.php';

// What is happening?
echo '<h2>$_GET</h2>';
echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo '<h2>$_POST</h2>';
echo "<pre>";
var_dump($_POST);
echo "</pre><br>";

//instances of the classes
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();
$bookRepository = new BookRepository($databaseManager);