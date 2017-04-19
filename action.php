<html>

<?php 
session_start();
if (isset($_POST['name'])) {
	$j=$_POST['name'];
	$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
	$query="INSERT INTO `chatbox` (`message`,`name`)VALUES('$j','".$_SESSION['name']."')";
$result=$db->query($query);
if(!$result)
	exit($_SESSION['name']);}
	?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
</head>
<body>
	<div id="show"></div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#show').load('data.php')
			}, 500);
		}
		);
	</script>
</body>
</html>