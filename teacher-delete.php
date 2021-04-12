<?php require "./crud/teacher.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };
$user = new Teacher();
$user->deleteTeacher( $_GET["id"]);
header('Location:view-edit-teachers.php');