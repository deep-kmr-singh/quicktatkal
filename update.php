<HTML>

	<HEAD>

		<TITLE>Update</TITLE>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<LINK REL="STYLESHEET" HREF="STYLE.CSS">
		
		<style type="text/css">
			#register_form{
				background-color: white;
				width: 40%;
				margin: auto;
				padding-top: 50px;
				padding-bottom: 10px;
				border-radius: 25px;
				border: 2px solid blue; 
				margin-top: 75px;
			}
			.button{
				background-color: light-blue;
			}
		</style>
		
		<SCRIPT src="validation.js"></SCRIPT>
	
	</HEAD>

	<BODY  background="img/bg1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">

		<div id="register_form" align="center" height="180" width="200">
			<button class="button" onclick="window.location.href = 'http://localhost/rms/addtrain.php';">Add trains</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/deletetrain.php#';">Delete trains</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/updatetrain.php';">Update train</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/alterstation.php#';">Add station</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/alterstation.php#';">Delete station</button><br><br><br>
			<form method="post" action="">
				<input class="button" name="logout" type="submit" value="Log Out" /><br><br><br>
			</form>	
		</div>
		
		<?php
			
			include("connection.php"); 
			
			if(isset($_POST['logout']))
			{
				header("location: login.php");
				exit();
			}
		?>

	</BODY>

</HTML>