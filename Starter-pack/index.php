<?php

require_once 'setup.php';

$books = $bookRepository->get();
$bookRepository->create();
$row = $bookRepository->find();
// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';
