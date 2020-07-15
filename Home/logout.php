<?php
session_start();
include('config.php');
// Getting logout time in db
session_unset();
$_SESSION['signin']='logout';
header("Location: http://localhost/e-commerce/Home/Home.php");
?>
