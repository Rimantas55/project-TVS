
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
	<?php echo "Sveikas Jonai";?>
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
	<div class="contain">
		<div class="col-lg-2">
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
	</div>
	
	






	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="jquery/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

