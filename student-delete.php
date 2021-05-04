<?php require "./crud/user.php";
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
if(!isset( $_GET["id"])){
    echo "Sorry you can't browse this page directly";
    die;
};
$user = new User();
$user->deleteUser( $_GET["id"]);
header('Location:view-edit-students.php');