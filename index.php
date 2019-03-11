<?php

//setting cookies
$name = "SomeCookieName";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);
?>

<?php

//seeting sessions / sessions settings goes via 2 and more files
session_start();

$_SESSION['message'] = "This session was been planted in index.php";


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
	<?php
	if(isset($_COOKIE["SomeCookieName"])) {

		$cookieName = $_COOKIE["SomeCookieName"];

		echo $cookieName;

	} else {

		$cookieName = "";
	}
	?>
	<a href="login_update.php" target="_blank">Linkas i login_update.php</a>
	<br>
	<a href="process.php" target="_blank">Linkas i process.php</a>
	<div class="alert alert-success" role="alert">
		<?php echo "Sveikas Jonai";?>
	</div>

	<div class="alert alert-warning" role="alert">
		This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
	</div>

	<div class="alert alert-dark alert-dismissible fade show" role="alert">
		<strong>Holy guacamole!</strong> You should check in on some of those fields below.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				<form action="process.php" method="post">
					<div class="form-group mx-sm-3 mb-2">
						<label for="username">Username</label>
						<input type="text" placeholder="Enter your name" name="username" autofocus="" class="form-control" >
						<label for="password">Password</label>
						<input type="password" placeholder="Enter your password" name="password" class="form-control">
						<input class="btn btn-primary" type="submit"  name="submit">
					</div>
				</form>
			</div>
			<div class="col-4">
				<h3>Update db</h3>
				<!-- <form action="process.php" method="post">
					<div class="form-group mx-sm-3 mb-2">
						<label for="username">Username</label>
						<input type="text" placeholder="Enter your name" name="username" autofocus="" class="form-control" >
						<label for="password">Password</label>
						<input type="password" placeholder="Enter your password" name="password" class="form-control">
						<input class="btn btn-primary" type="submit"  name="submit">
					</div>
				</form> -->
			</div>
			<div class="col-4">
				
				
				
			</div>
		</div>
	</div>
	<?php
	class Car {

		var $wheels = 4;
		
		function moveWheels() {

			//echo "Move wheels";
			$this->wheels = 10;
		}
	}

$ford = new Car();
echo $ford->wheels . "<br>"; //output 4
$ford->wheels = 8; //change parameter outside the class to 8
echo $ford->wheels; //ouput 8
$ford->moveWheels(); //why there is no output 10?

class Plane extends Car {

	var $wheels = 15;//overwrites parents parameters, and parants parameter can not overwrite childs?
}

$jet = new Plane();
echo $jet->wheels;

	?>

<pre>class Name {};
var name = value;
function name() {}
this->name; 
class Name2 extends Name {}
__construct
parameters and metchods can be public, protected, private, static</pre>






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="jquery/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

