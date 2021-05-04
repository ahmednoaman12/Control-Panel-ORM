<?php

require "./user.php";
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    exit("sorry you cant browse this page directly");
}     
$email = $_REQUEST['e-mail'];
$password = $_REQUEST['password'];
$user = new User();
$loginResult = $user->loginAdmin($email , $password);
session_start();

if($loginResult){
    $_SESSION['user'] = $loginResult;
    echo "Wellcome " . $_SESSION['user']["name"] ." you will be redirected shortly";
    header('location:http://localhost/Control-Panel-ORM/index.php');
}   else    {
    $_SESSION['login'] = "failed";
    echo "Wrong email or password";
    header('location:http://localhost/Control-Panel-ORM/index.php');
}