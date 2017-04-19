<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Send Data Without Reload</title>
</head>
<body>

<?php
session_start();
?>








	<div id="container">
		<input type="text" id="name" placeholder="Type here and press Enter">
		<?php
		$db=new mysqli("mysql.hostinger.in","u271129481_root","1234567","u271129481_chat");
		$query="SELECT * FROM `active` WHERE 1";
		$result=$db->query($query);
		$j=$result->num_rows;
		echo '<h5>active users</h5>';
		for($i=0;$i<$j;$i++){
			$row=$result->fetch_assoc();
			echo $row['name'].".";
			}?>
		<a href="logout.php">Log Out</a>
	</div>

	<div id="result"></div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#name').focus();
			$('#name').keypress(function(event) {
				var key = (event.keyCode ? event.keyCode : event.which);
				if (key == 13) {
					var info = $('#name').val();
					$.ajax({
						method: "POST",
						url: "action.php",
						data: {name: info},
						success: function(status) {
							$('#result').append(status);
							$('#name').val('');
						}
					});
				};
			});
		});
	</script>
</body>
</html>