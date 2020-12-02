<?php 
	if (isset($_POST['submit'])){
		$link = mysqli_connect("localhost", "root", "deadmin123", "design_eng");
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$slot_no=$_POST['slot_no'];
		$sql = "SELECT * FROM bookslot_table where slot_no= $slot_no";
		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<table>";
					echo "<tr>";
						echo "<th>slot_no</th>";
						echo "<th>sequence</th>";
						echo "<th>train_no</th>";
						echo "<th>journey_class</th>";
						echo "<th>station_from</th>";
						echo "<th>station_to</th>";
						echo "<th>journey_date</th>";
						echo "<th>name</th>";
						echo "<th>age</th>";
						echo "<th>gender</th>";
						echo "<th>id</th>";
						echo "<th>mobile_no</th>";
						echo "<th>email</th>";
						echo "<th>birth_prefference</th>";
					echo "</tr>";
					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
							echo "<td>" . $row['slot_no'] . "</td>";
							echo "<td>" . $row['sequence'] . "</td>";
							echo "<td>" . $row['train_no'] . "</td>";
							echo "<td>" . $row['journey_class'] . "</td>";
							echo "<td>" . $row['station_from'] . "</td>";
							echo "<td>" . $row['station_to'] . "</td>";
							echo "<td>" . $row['journey_date'] . "</td>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['age'] . "</td>";
							echo "<td>" . $row['gender'] . "</td>";
							echo "<td>" . $row['id_no'] . "</td>";
							echo "<td>" . $row['mobile_no'] . "</td>";
							echo "<td>" . $row['email'] . "</td>";
							echo "<td>" . $row['birth_prefference'] . "</td>";
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
