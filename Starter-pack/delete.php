<?php
require_once 'setup.php';

if (!empty($_POST['confirm'])) {
    $id = $_GET['id'];
    $bookRepository->delete($id);
}

if (!empty($_POST['cancel'])) {
    header('Location: index.php');
}

require_once 'deleteview.php';