<?php
session_start();
$j=$_SESSION['name'];
echo $j;
$dl="DELETE FROM `active` WHERE name='$j'";
$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
if($db->query($dl)){
session_unset();
session_destroy();
$db->close();
header("location:index.php");}
?>