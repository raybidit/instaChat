<?php
session_start();
$username=$_POST['name'];
$password=$_POST['password'];
echo $username.$password;
$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
if($db->connect_error)
exit("connection problem");
$query="SELECT * FROM `registration` WHERE name='$username' and password='$password'";
$result=$db->query($query);
if($result)
	echo("here");
$j=$result->num_rows;
if($j!=0){
for($i=0;$i<$j;$i++){
$row=$result->fetch_assoc();
$_SESSION['name']=$row['name'];
}
$q="INSERT INTO `active`(`name`) VALUES ('$username')";
$p=$db->query($q);
if(!$p)
	exit("problem");
$db->close();
header("location:chatsection.php");
}
else
	header("location:registration.php");

?>