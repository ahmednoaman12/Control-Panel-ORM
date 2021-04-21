<?php require "./crud/group.php";
// if(!isset( $_GET["id"])){
//     echo "Sorry you can't browse this page directly";
//     die;
// };
$user = new Group();
$user->deleteGroup( $_GET["id"]);
header('Location:view-edit-groups.php');