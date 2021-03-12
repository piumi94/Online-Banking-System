<?php 
session_start();

include '../dbconn.php';


session_destroy();
header('location:index.php');
?>