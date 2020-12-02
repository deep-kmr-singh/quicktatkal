<?php 
	if(isset($_REQUEST['submit'])){
					
		include("connection.php");
					
		$train_no = $_POST['train_no'];
		$journey_class = $_POST['journey_class'];
		$station_from = $_POST['station_from'];
		$station_to = $_POST['station_to'];
		$journey_date = $_POST['journey_date'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$id_no = $_POST['id_no'];
		$mobile_no = $_POST['mobile_no'];
		$email = $_POST['email'];
		$birth_prefference = $_POST['birth_prefference'];
					
		/* this gentrates a unique id of defined length in 3rd row.
		$slot_no = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';*/
		$slot_no = '0123456789';
		$slot_no = str_shuffle($slot_no);
		$slot_no = substr($slot_no, 0, 4);
			
		$pnr_no = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$pnr_no = str_shuffle($pnr_no);
		$pnr_no = substr($pnr_no, 0, 8);
				
		$coach_no = 'ABS123';
		$coach_no = str_shuffle($coach_no);
		$coach_no = substr($coach_no, 0, 2);
					
		$seat_no = '0123456789';
		$seat_no = str_shuffle($seat_no);
		$seat_no = substr($seat_no, 0, 2);
				
		$sql = "INSERT INTO bookslot_table (pnr_no,slot_no,train_no,journey_date,station_from,station_to,journey_class,name,age,gender,id_no,mobile_no,email,birth_prefference,coach_no,seat_no) VALUES ('$pnr_no','$slot_no','$train_no','$journey_date','$station_from','$station_to','$journey_class','$name','$age','$gender','$id_no','$mobile_no','$email','$birth_prefference','$coach_no','$seat_no')";
					
		mysqli_query($conn,$sql);
		
		$mysql="SELECT slot_no FROM `bookslot_table` where id_no=$id_no";
		$results=mysqli_query($conn,$mysql);

		$row=mysqli_fetch_array($results);

		echo '<script type="text/javascript">';
		echo 'alert("Your slot number is '.$row['slot_no'].'")';
		echo '</script>';
					
	}
?>