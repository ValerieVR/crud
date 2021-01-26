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

function whatIsHappening() { 
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
}
whatIsHappening();

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();

// This example is about a Book collection
// Update the naming if you'd like to work with another collection
$bookRepository = new BookRepository($databaseManager);
$books = $bookRepository->get();

// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';
