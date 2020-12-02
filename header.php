<!DOCTYPE html>

<html>

	<head>
		
		<title></title>
		
		<link rel="stylesheet" href="s1.css" type="text/css">
	
		<style type="text/css">
			li {
				font-family: sans-serif;
				font-size:22px;
			}
		</style>
	
		<script src="jquery.js"></script>
		
		<script>
			$(document).ready(function(){
				$("#Logout").hide();
			};
			$(document).ready(function(){
				$("#user").hover(function(){
					$("#Logout").toggle("slow");
				});
			});
		</script>
	
	</head>

	<body link="white" alink="white" vlink="white">
		<div class="container dark">
			<div class="wrapper">
				<div class="Menu">
					<ul id="navmenu">
						<li><A HREF="index.php">Home</A></li>
						<li><a href="booktkt.php">Book Slot</a></li>
						<li><a href="print.php">Slot/Ticket</a></li>
						<li><a href="login.php">LogIn</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	
</html>