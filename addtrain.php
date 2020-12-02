<!DOCTYPE html>

<html>

	<HEAD>

		<TITLE>Add Train</TITLE>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<LINK REL="STYLESHEET" HREF="STYLE.CSS">
		
		<style type="text/css">
			#register_form{
				background-color: white;
				width: 40%;
				margin: auto;
				border-radius: 25px;
				border: 2px solid blue; 
				margin-top: 50px;
				padding: 50px;
			}
			.button{
				background-color: light-blue;
			}	
		</style>
		
		<SCRIPT src="validation.js"></SCRIPT>
	
	</HEAD>

	<BODY  background="img/bg3.jpg" link="white" alink="white" vlink="white" width="1024" height="768">

		<div id="register_form" align="center" height="200" width="200">
			
			<form action="#" method="post"> 
				
				<table border="2px solid black;">
					
					<tr>
						<td><label><b>Train No.</b></label></td>
						<td><input maxlength="5" size="30" name="train_no" type="text" id="train_no" placeholder="Enter the train no..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Train Name.</b></label></td>
						<td><input size="30" name="train_name" type="text" id="train_name" placeholder="Enter the train name..." required></td>
					</tr>
					
				</table>
				<br><br>
				<button class="button" name="submit" type="submit"><b>ADD TRAIN</b></button><br>
				<button class="button" onclick="window.location.href = 'http://localhost/rms/update.php';">GO BACK</button><br><br>
				
			</form>
			
			

			<?php
				if(isset($_REQUEST['submit'])){
					
					include("connection.php");	
					
					$train_no = $_POST['train_no'];
					$train_name = $_POST['train_name'];

					$sql = "INSERT INTO train_list (train_no,train_name) VALUES ('$train_no','$train_name')";
				
					mysqli_query($conn,$sql);
					exit();
					
				}
			?>
			
		</div>

	</BODY>

</html>