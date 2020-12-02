<HTML>
	
	<HEAD>
		
		<TITLE>Tatkal Reservation System</TITLE>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style type="text/css">
			
			@import url(style.css);
			
			#logo{ 
				border-radius: 25px;
				border: 1px solid blue; 
				width: 100px;
				height: 100px; 
			}
			
			*{
				color: white;
			}
			
			html{ 
				background: url(img/bg7.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			
			#main{
				width:700px;
				height: 200px;
				margin: 0 auto;
				margin-top: 150px;
				color:white;
				border-radius: 25px;
				padding: 50px;
				background-color: rgba(0,0,0,0.3);
			}
		
		</style>
	
	</HEAD>

	<BODY>
		
		<?php 
			session_start();
			include("header.php"); ?>

		
		
		<div id="main">
			<h1 align="center">Welcome to Indian Railways!</h1><br/><br/><br/>
			<h2 align="center">Have a safe journey with us</h2>
			<br/><br/><br/>
			<h3 align="center"><a href="pnrstatus.php">Please check conformation chances before booking</a></h3>';
		</div>
	
	</BODY>

</HTML>