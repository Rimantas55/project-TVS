<?php
if(isset($_POST["submit"])){

	//$names = ["rimas", "jonas", "tomas"];
	$username = $_POST["username"];
	$password = $_POST['password'];

	/*if (in_array($username, $names)) {
		echo "Welcome" . " ". $_POST["username"] . " " . $_POST["password"];
	} else {
		echo "you can not log in";
	}*/	
}

//prijungem mysqli connection is kito file t.y db.php
include "db.php";

//inserting info from html form to Mysql database 
$query = "INSERT INTO users(username, password) ";
$query .= "VALUES ('$username', '$password')";

// * zvaigzdute reiskia ALL
// query for reading information from database and output can be with while loop
$query = "SELECT * FROM users";

//Checking if info insertings working good
$result = mysqli_query($connection, $query);

if(!$result) {

	die('Query FAILED' . mysqli_error($connection));

}

//method how to check what kind info have database / output info from database
while($row = mysqli_fetch_assoc($result)) {
	echo "<pre>";
	print_r($row);
	echo "<pre>";

}




?>