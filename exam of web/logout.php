<?php 
session_start(); 
$_SESSION['id'] = '';
unset($_SESSION['id']); 
session_destroy();
header('location:login.html');
?>