<?php require_once("db.php");?>
<?php

function showAlldata () {
	global $connection;
// * zvaigzdute reiskia ALL
// query for reading information from database and output can be done with while loop
	$query = "SELECT * FROM users";

//Checking if info insertings working good
	$result = mysqli_query($connection, $query);

	if(!$result) {

		die('Query FAILED' . mysqli_error($connection));
	}

	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];


		echo "<option value='$id'>$id</option>";

	}

}
?>