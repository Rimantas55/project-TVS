<?php
//session from the index.php file
session_start();

echo $_SESSION['message'] . "<br>";

?>

<?php

//prijungem mysqli connection is kito file t.y db.php
require_once("db.php"); 

if(isset($_POST["submit"])) {

	$username = $_POST["username"];
	$password = $_POST['password'];

//kazkokia security dalis kuri leidzia kad i db butu irasyta info su apostrofa --> ' 
	$username = mysqli_real_escape_string($connection,$username);
	$password = mysqli_real_escape_string($connection,$password);

}

//incrypting passwords
$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);

//inserting info from html form to Mysql database 
$query = "INSERT INTO users(username, password) ";
$query .= "VALUES ('$username', '$password')";

//Checking if info insertings working good
$result = mysqli_query($connection, $query);

if(!$result) {

	die('Query FAILED' . mysqli_error($connection));
}


// * zvaigzdute reiskia ALL
// query for reading information from database and output can be done with while loop
$query = "SELECT * FROM users";


//Checking if info insertings working good
$result = mysqli_query($connection, $query);

if(!$result) {

	die('Query FAILED' . mysqli_error($connection));
}

//method how to check what kind info we have in database / output info from database
while($row = mysqli_fetch_assoc($result)) {
	echo "<pre>";
	print_r($row);
	echo "<pre>";

}

?>


