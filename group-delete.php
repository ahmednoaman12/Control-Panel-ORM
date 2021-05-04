<?php require "./crud/group.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}

$user = new Group();
$user->deleteGroup( $_GET["id"]);
header('Location:view-edit-groups.php');