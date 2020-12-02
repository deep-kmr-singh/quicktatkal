<!DOCTYPE html>

<html>

	<HEAD>

		<TITLE>Slot Booking</TITLE>
		
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
				margin-top: 55px;
				padding: 50px;
			}
			.button{
				background-color: light-blue;
			}	
		</style>
		
		<SCRIPT src="validation.js"></SCRIPT>
	
	</HEAD>

	<BODY  background="img/wallpaper1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
		
		<?php include("header.php") ?>

		<div id="register_form" align="center" height="200" width="200">
			
			<form action="#" method="post" onsubmit="return validate()" autocomplete="off"> 
				<h1>Fill This Form To Book a Slot</h1>
				
				<table border="2px solid black;">
					
					<tr>
						<td><label><b>Train No.</b></label></td>
						<td><input maxlength="5" size="30" name="train_no" type="text" id="train_no" placeholder="Enter the train no..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Class</b></label></td>
						<td>	
							<input size="30" id="first" name="journey_class" type="radio" value="sleeper" onclick="choice()" required> Sleeper
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input size="30" id="second" name="journey_class" type="radio" value="ac" onclick="choice()" required> AC
						</td>
					</tr>
		
					<tr>
						<td><label><b>Station From</b></label></td>
						<td><input size="30" name="station_from" id="station_from" type="text" placeholder="Select the starting station..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Station To</b></label></td>
						<td><input size="30" name="station_to" id="station_to" type="text" placeholder="Select the destination station..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Date of Journey</b></label></td> 
						<td><input size="30" name="journey_date" type="date" id="journey_date" placeholder="Enter the date of journey..." required></td>
					</tr>
		
					<tr>
						<td><label><b>Name</b></label></td>
						<td><input size="30" name="name" type="text" id="name" placeholder="Enter your name..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Age</b></label></td>
						<td><input maxlength="3" size="30" name="age" type="text" id="age" placeholder="Enter age..." required></td>
					</tr>
					
					<tr>
						<td><label><b>Gender</b></label></td>
						<td>	
							<input size="30" id="first" name="gender" type="radio" value="male" onclick="choice()" required> Male
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input size="30" id="second" name="gender" type="radio" value="female" onclick="choice()" required> Female
						</td>
					</tr>
					
					<tr>
						<td><label><b>ID No.</b></label></td>
						<td><input maxlength="10" size="30" name="id_no" type="text" id="id_no" placeholder="Enter your ID No.." required></td>
					</tr>
					
					<tr>
						<td><label><b>Mobile No.</b></label></td>
						<td><input maxlength="10" size="30" name="mobile_no" type="text" id="mobile_no" placeholder="Enter your Mobile No.." required></td>
					</tr>
					
					<tr>
						<td><label><b>Email ID</b></label></td>
						<td><input size="30" name="email" type="email" id="email" placeholder="Enter Email ID" required></td>
					</tr>
					
					<tr>
						<td><label><b>Birth Prefference</b></label></td>
						<td>
							<select name="birth_prefference" id="birth_prefference">
								<option  disabled="disabled" selected required>Select your Birth Prefference</option>
								<option value="lower">Lower</option>
								<option value="middle">Middle</option>
								<option value="upper">Upper</option>
								<option value="side lower">Side Lower</option>
								<option value="side upper">Side Upper</option>
							</select>
						</td>
					</tr>
				
				</table>
				<br><br>
				<button class="button" name="submit" type="submit"><b>Book Slot</b></button><br>
				<SCRIPT src="booktkt.js"></SCRIPT>
				
			</form>
			
			<?php include("php1.php") ?>
	
		</div>
	
	</BODY>

</html>