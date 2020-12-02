<?php
	session_start();
		if (isset($_POST['submit']))
		{
			include("connection.php");
			if(!$conn){  
				echo "<script type='text/javascript'>alert('Database failed');</script>";
				die('Could not connect: '.mysqli_connect_error());  
			}
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password';";
			$sql_result = mysqli_query ($conn, $sql) 
				or die ('request "Could not execute SQL query" '.$sql);
			$user = mysqli_fetch_assoc($sql_result);
			if(!empty($user)){
				$_SESSION['user_info'] = $user['username'];
				$message='Logged in successfully';
				header("location: admin.php");
			}
			else{
				$message = 'Invalid Username or Password.';
			}
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
?>