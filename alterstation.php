<!DOCTYPE html>

<html>

	<HEAD>

		<TITLE>Add/Delete Station</TITLE>
		
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
						<td><label><b>Station</b></label></td>
						<td><input size="30" name="station_list" type="text" id="station_list" placeholder="Enter the station..." required></td>
					</tr>
					
				</table>
				<br><br>
				<button class="button" name="submit1" type="submit"><b>ADD STATION</b></button><br><br>
				<button class="button" name="submit2" type="submit"><b>DELETE STATION</b></button><br><br>
				<button class="button" onclick="window.location.href = 'http://localhost/rms/update.php';">GO BACK</button><br><br>
				
				<SCRIPT src="booktkt.js"></SCRIPT>
				
			</form>
			
			<?php 
				if(isset($_REQUEST['submit1'])){
					
					include("connection.php");
					
					$station_list = $_POST['station_list'];

					$sql = "INSERT INTO `station_list` (`station_list`) VALUES ('$station_list');";
				
					mysqli_query($conn,$sql);
					
				}
			?>
			
			<?php
				if(isset($_REQUEST['submit2'])){
					
					include("connection.php");
					
					$station_list = $_POST['station_list'];

					$sql = "DELETE FROM station_list where station_list='$station_list'";
				
					mysqli_query($conn,$sql);
					
				}
			?>
	
	</BODY>

</html>