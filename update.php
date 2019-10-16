<?php
include_once 'User.php';
include_once 'DBConnect.php';
include_once 'StudentManager.php';
$studentManager = new StudentManager();
$index = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$studentManager->update($index, $name, $phone, $address);
header("Location:index.php");