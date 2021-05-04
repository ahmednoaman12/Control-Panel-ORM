<?php require "./crud/course.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
$user = new Course();
$user->deleteCourse( $_GET["id"]);
header('Location:view-edit-courses.php');