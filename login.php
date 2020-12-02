<?php include("php2.php") ?>

<!DOCTYPE html>

<html>

	<head>

		<title>Admin Login</title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<script type="text/javascript">
		function validate()	{
			var username=document.getElementById("username");
			var password=document.getElementById("password");
			if(username=testadmin && password=testadmin) 
			{
				header("location: admin.php");
				username.focus();
				return false;
			}
			return true;
		}
	</script>

	<style type="text/css">
	
		#loginarea{
			background-color: white;
			width: 30%;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue;
			margin-top: 100px;
			background-color: rgba(0,0,0,0.2);
			box-shadow: inset -2px -2px rgba(0,0,0,0.5);
			padding: 40px;
			font-family:sans-serif;
			font-size: 20px;
			color: white;
		}
		
		html{ 
			background: url(img/bg4.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		#submit{
			border-radius: 5px;
			background-color: rgba(0,0,0,0);
			padding: 7px 7px 7px 7px;
			box-shadow: inset -1px -1px rgba(0,0,0,0.5);
			font-family:"Comic Sans MS", cursive, sans-serif;
			font-size: 17px;
			margin:auto;
			margin-top: 20px;
			display:block;
			color: white;
		}
		
		#logintext{
			text-align: center;
		}
		
		.data{
			color: white;
		}
	
	</style>
	
	<body>
		
		<?php include("header.php") ?>
	
		<div id="loginarea">
		
			<form id="login" action="" onsubmit="return validate()" method="post" name="login">
				<div id="logintext">Login to Indian Railways!</div><br/><br/>
				
				Username: <input align="center" type = "text" name="username" id="username"><br><br><br>
				Password: <input align="center" type = "password" name="password" id="password"><br><br><br>
				
				<button TYPE="Submit" name="submit" id="submit" >Login</button>
				
			</form>
		
		</div>

	</body>

</html>