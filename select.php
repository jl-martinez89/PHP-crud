<?php
	include_once 'db.php';
	$table = "userdata";
	$query = "SELECT * FROM " . $table;
	if($result = $MySQLiconn->query($query)){
		if($result->num_rows > 0){
			echo "<table>";
			echo "<tr><th>FirstName</th><th>LastName</th></tr>";
			while ($row = $result->fetch_array()){
				echo "<tr>";
				echo "<td>" . $row[1] . "</td>";
				echo "<td>" . $row[2] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
?>