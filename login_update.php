<?php 
//prijungem mysqli connection is kito file t.y db.php
require_once("db.php");
?>

<?php
// sitas leidzia praskanuoti kas yra duomenu bazeje ir istraukti info -> $result = mysqli_query($connection, $query);
require_once("core/functions.php");
?>
<?php
if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

//query komanda kuri UPDATINS info db
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);

	if(!$result) {

		die("QUERY FAILED" . mysqli_error($connection));
	}

}

?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- style CSS -->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<title>TVS</title>
</head>
<body>
	<a href="index.php" target="_blank">Back to index.php</a>
	<br>
	<a href="process.php" target="_blank">Linkas i process.php</a>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<form action="login_update.php" method="post">
					<div class="form-group mx-sm-3 mb-2">
						<label for="username">Username</label>
						<input type="text" placeholder="Enter your name" name="username" autofocus="" class="form-control" >
						<label for="password">Password</label>
						<input type="password" placeholder="Enter your password" name="password" class="form-control">
						<label for="password">Select</label>
						<select name="id" id="" class="form-control">

							<?php

							showAlldata ();

							?>

							
							<input class="btn btn-primary" type="submit"  name="submit" value="UPDATE">
						</div>
					</form>
				</div>

			</div>
		</div>








		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="jquery/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>

