<?php
$books = $bookRepository->get();
$bookRepository->create();


// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';
