<?php

	include 'db.php';

	/* code for data insert
	=========================================================================== */
	if(isset($_POST['save'])){
		$fn = $MySQLiconn->real_escape_string($_POST['fn']);
		$ln = $MySQLiconn->real_escape_string($_POST['ln']);
		$SQL = $MySQLiconn->query("INSERT INTO userdata(fn,ln) VALUES('$fn','$ln')");
		if(!$SQL){
			echo $MySQLiconn->error;
		}
	} // End of code for data insert

	/* code for data delete
	=========================================================================== */
	if(isset($_GET['del'])){
		$SQL = $MySQLiconn->query("DELETE FROM userdata WHERE id=" . $_GET['del']);
		header("Location: index.php");
	} // end of code for data delete

	/* code for data update
	=========================================================================== */
	if(isset($_GET['edit'])){
		$SQL = $MySQLiconn->query("SELECT * FROM userdata WHERE id=" . $_GET['edit']);
		$getROW = $SQL->fetch_array(); // Extracs data into an array
	}
	if(isset($_POST['update'])){
		$SQL = $MySQLiconn->query("UPDATE userdata SET fn='" . $_POST['fn'] . "', ln='" . $_POST['ln'] . "' WHERE id=" . $_GET['edit']);
		header("Location: index.php");
	} // end of code for data update
?>