<?php require "./crud/course.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };
$user = new Course();
$user->deleteCourse( $_GET["id"]);
header('Location:view-edit-courses.php');