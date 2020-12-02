<?php 
	if (isset($_POST['submit'])){
		$link = mysqli_connect("localhost", "root", "deadmin123", "design_eng");
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$pnr_no=$_POST['pnr_no'];
		$sql = "SELECT * FROM ticket_table where pnr_no= $pnr_no";
		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>pnr_no</th>";
						echo "<th>train_no</th>";
						echo "<th>station_from</th>";
						echo "<th>station_to</th>";
						echo "<th>journey_date</th>";
						echo "<th>name</th>";
						echo "<th>id</th>";
						echo "<th>mobile_no</th>";
						echo "<th>coach_no</th>";
						echo "<th>seat_no</th>";
					echo "</tr>";
					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
							echo "<td>" . $row['pnr_no'] . "</td>";
							echo "<td>" . $row['train_no'] . "</td>";
							echo "<td>" . $row['station_from'] . "</td>";
							echo "<td>" . $row['station_to'] . "</td>";
							echo "<td>" . $row['journey_date'] . "</td>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['id_no'] . "</td>";
							echo "<td>" . $row['mobile_no'] . "</td>";
							echo "<td>" . $row['coach_no'] . "</td>";
							echo "<td>" . $row['seat_no'] . "</td>";
						echo "</tr>";
					}
				echo "</table>";
				mysqli_free_result($result);
			}
			else{
				echo "No records matching your query were found.";
			}
		}
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		mysqli_close($link);
	}
?>
