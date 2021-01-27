<?php
require_once 'setup.php';

if (!empty($_POST['update'])) { 
    $id = $_GET['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $bookRepository->update($id,$title,$author);
}

require_once 'editview.php';