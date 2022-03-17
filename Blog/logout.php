<?php
include('path.php');

session_start();

// logout user
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);

session_destroy();

header('location: ' . Base_URL . 'index.php');
