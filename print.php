<HTML>

	<HEAD>

		<TITLE>Print</TITLE>
		
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
	
	<?php include("header.php") ?>

	<BODY  background="img/bg1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">

		<div id="register_form" align="center" height="180" width="200">				
			<button class="button" onclick="window.location.href = 'http://localhost/rms/printtkt.php';">Print ticket</button><br><br><br>
			<button class="button" onclick="window.location.href = 'http://localhost/rms/showtkt.php';">Print Slot</button><br><br><br>	
		</div>
		
	</BODY>

</HTML>