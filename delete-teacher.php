<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
require './crud/user.php';
$user = new User();
$id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);
$users = $user->deleteUser($id);
header("Location:view-edit-teachers.php");
?>