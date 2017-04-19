<?php
session_start();
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
if($db->connect_error)
exit("DB connection problem");
$query="INSERT INTO `registration`(`name`,`username`,`email`,`password`) VALUES ('$name','$uname','$email','$pwd')";
if($db->query($query)){
$log="INSERT INTO `active`(`name`) VALUES ('$name')";
if($db->query($log)){
$_SESSION['name']=$name;
$db->close();
header("location:chatsection.php");
}}
?>