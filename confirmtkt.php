<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Confirm Ticket</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	
		<style type="text/css">
			
			#slot_no{
				font-size: 20px;
				background-color: white;
				width: 500px;
				height: 300px;
				margin: auto;
				border-radius: 25px;
				border: 2px solid blue; 
				margin: auto;
				position: absolute;
				left: 0; 
				right: 0;
				padding-top: 40px;
				padding-bottom:20px;
				margin-top: 130px;
			}
		
			html{ 
				background: url(img/bg7.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		
			#pnrtext{
				padding-top: 20px;
			}
	
		</style>
	
	</head>

	<body>
		
		<center>
			
			<div id="slot_no">Ticket Conformation<br/><br/>
			
				<form method="post" name="pnrstatus" >
					<div id="pnrtext">
						<input type="text" name="slot_no" size="30" maxlength="4" placeholder="Enter Slot No. here">
					</div>
					<br/><br/>
					<input type="submit" name="submit1" value="Show" class="button" id="submit"><br/><br/>
					<input type="submit" name="submit2" value="Confirm" class="button" id="submit"><br/><br/>
				</form>
				<button class="button" onclick="window.location.href = 'http://localhost/rms/admin.php';">Go Back</button><br><br>
			</div>
		</center>
		
		<?php include("php3.php"); ?>
		
	</body>

</html>