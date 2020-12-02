<HTML>

	<HEAD>

		<TITLE>Admin</TITLE>
		
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
				margin-top: 100px;
			}
			.button{
				background-color: light-blue;
			}
		</style>
		
		<SCRIPT src="validation.js"></SCRIPT>
	
	</HEAD>

	<BODY  background="img/bg1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">

		<div id="register_form" align="center" height="180" width="200">
			<form method="post" action="">
				<input class="button" name="reset" type="submit" value="Reset Session" /><br><br><br>
				<input class="button" name="logout" type="submit" value="Log Out" /><br><br><br>
			</form>				
			<button class="button" onclick="window.location.href = 'http://localhost/rms/confirmtkt.php';">Book ticket</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/update.php';">Update System</button><br><br><br>	
		</div>
		
		<?php
			if(isset($_POST['reset']))
			{
				include("connection.php");
				
				$sql="TRUNCATE TABLE `bookslot_table`";
				mysqli_query($conn,$sql);
				exit();
			}
		?>
		
		<?php
			if(isset($_POST['logout']))
			{
				include("connection.php");
				
				header("location: login.php");
				exit();
			}
		?>

	</BODY>

</HTML>