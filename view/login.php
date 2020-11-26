<?php
session_start();
if (isset($_SESSION['password']))
{
    header("Location:list");
}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Colorlib Templates">
		<meta name="author" content="Colorlib">
		<meta name="keywords" content="Colorlib Templates">
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="../view/css/styles.css">
		<link rel="stylesheet" type="text/css" href="../view/css/main.css">
		<script src="../view/js/index.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> </head>

	<body>
		<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
			<div class="wrapper wrapper--w780">
				<div class="card card-3">
					<div class="card-heading"></div>
					<div class="card-body">
						<h2 class="title">Login Info</h2>
						<div id="error"> </div>
						<form method="POST" action="../list">
							<div class="input-group">
								<input class="input--style-3" type="text" placeholder="Name" name="name"> </div>
							<div class="input-group">
								<input class="input--style-3" type="password" placeholder="Password" name="password"> </div>
							<div class="p-t-10">
								<input type="submit" class="btn btn--pill btn--green" name="submit" value="Submit"> </div>
							<br>
							<br> </form> <a href="../new" id="new">Create New User?</a> </div>
				</div>
			</div>
		</div>
	</body>

	</html>
	<?php
if(isset($_SESSION['register'])) { ?>
		<script>
		toastr.success("Registered Successfully");
		</script>
		<?php
$_SESSION['register'] = null;
}
?>
			<?php 
$url = explode("/", $_GET['url']);

if(isset($url[1])){ ?>
				<script>
				error();
				</script>
				<?php
}
?>
