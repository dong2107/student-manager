<?php
include_once 'User.php';
include_once 'StudentManager.php';
include_once 'DBConnect.php';
$studentManager = new StudentManager();
$index = $_GET['id'];
$studentManager->delete($index);
header("Location:index.php");