<?php 
	include("connection.php");
	$slot_no=$_POST['slot_no'];
	
	if (isset($_POST['submit1'])){
		$mysql="SELECT id_no, pnr_no FROM `bookslot_table` where slot_no=$slot_no";
		$results=mysqli_query($conn,$mysql);
		$row=mysqli_fetch_array($results);
		echo '<script type="text/javascript">';
		echo 'alert("Check ID No. '.$row['id_no'].' and give PNR No. '.$row['pnr_no'].'")';
		echo '</script>';
	}
			
	if (isset($_POST['submit2'])){	
		$mysql="INSERT INTO `ticket_table`
		SELECT * FROM `bookslot_table` WHERE slot_no= $slot_no";
		mysqli_query($conn,$mysql);
	}
?>
