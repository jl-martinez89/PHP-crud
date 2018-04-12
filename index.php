<?php
	include_once 'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>C.R.U.D. PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<div id="header">
		<label>C.R.U.D.</label>
	</div>
	<br>

	<!-- Entry Model -->

	<div id="form">
		<form method="post">
			<table width="100%" border="1" cellpadding="15">
				<tr>
					<td>
						<input type="text" name="fn" placeholder="First Name" value="<?php if(isset($_GET['edit'])) echo $getROW['fn']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="ln" placeholder="Last Name" value="<?php if(isset($_GET['edit'])) echo $getROW['ln']; ?>">
					</td>
				</tr>
				<tr>
					<td><?php if(isset($_GET['edit'])){ ?>
						<button type="submit" name="update">update</button>
						<? } else { ?>
						<button type="submit" name="save">save</button> <?php } ?>	</td>
				</tr>
			</table>
		</form>
		<br>
		<br>

		<!-- Display Model -->

		<table width="100%" border="1" cellpadding="15" align="center">
			<?php
				$result = $MySQLiconn->query("SELECT * FROM userdata");
				while($row = $result->fetch_array()){
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['fn']; ?></td>
						<td><?php echo $row['ln']; ?></td>
						<td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Would you like to edit this entry?'); ">Edit</a></td>
						<td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?'); ">Delete</a></td>
					</tr>
					<?php
				}
			?>
		</table>
	</div>
	</center>
</body>
</html>