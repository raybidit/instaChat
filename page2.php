


<html>
<body>
<?php
session_start();
$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
if($db->connect_error)
header("");

$check="SELECT * FROM `chatbox` WHERE 1";
$result=$db->query($check);
if($result){
$j=$result->num_rows;
for($i=0;$i<$j;$i++){
$row=$result->fetch_assoc();
echo"<h3>".$row['name'].'>>'.$row['message']."</h3>";
}
}
?>

send a message:<form form action="chatsection.php" method="POST">
<input type="text" name="message" size="30"  height="100">
<input type="submit" value="send">
<?php
$db=new mysqli("mysql.hostinger.in","u271129481_root","","u271129481_chat");
if($db->connect_error)
header("");
$active="SELECT * FROM `active` WHERE 1";
$people=$db->query($active);

if($result){
$k=$people->num_rows;
echo'<h3>active people(s)</h3>';
for($l=0;$l<$k;$l++){
	$r=$people->fetch_assoc();
	echo'<h5>'.$r['name'].'</h5>';
}}?></form>
<form form action="logout.php" method ="POST">
<input type="submit" value="Log out"></form>
<hr>
</body>
</html>


