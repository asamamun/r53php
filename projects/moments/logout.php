<?php 

session_start();
unset($_SESSION['login']);
unset($_SESSION['user']);
session_destroy();
header('Location:login.php'); 

?>