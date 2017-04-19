<?php 
$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
if ($db->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $db->query("SELECT * FROM `chatbox` WHERE 1");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo"<h4>".$row['name'].">>".$row['message']."</h4>";
	}
}
?>