<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../../../view/js/index.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../../view/css/login.css">
		<link rel="stylesheet" href="../../../view/css/demo.css">

</head>
<body style="background-color: #999999;">


	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<form class="login100-form validate-form" name="add_name" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-59">
						Registration info
					</span>

					<div class="wrap-input100" data-validate="Name is required">
						<input class="input100" type="text" placeholder="First Name..." name="firstName" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['firstName'];
}
if (isset($url[1]) and !isset($_POST['submit']))
{
    echo $list['fname'];
} ?>"><span class="nameerr"><?php echo $error['firstError']; ?></span>
						</div>

					<div class="wrap-input100" data-validate="Name is required">
						<input class="input100" type="text" placeholder="Last Name..." name="lastName" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['lastName'];
}
if (isset($url[1]) and !isset($_POST['submit']))
{
    echo $list['lname'];
} ?>"><span class="nameerr"><?php echo $error['lastError']; ?></span>
					</div>
					<?php $pp = $list['profilePicture']; ?>

					<span class="emailerr"><?php echo $error['emailError']; ?></span>
						<span class="label-input100 em">Email</span>
						<input style="width:90%; position:absolute;" type="text" name="email" id="email" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['email'];
}
if (isset($url[1]) and !isset($_POST['submit']))
{
    echo implode(",", $list['email']);
} ?>">
						<span class="moberr"><?php echo $error['mobileError']; ?></span>
						<span class="label-input100 mob">Mobile Number</span>
						<input style="width:90%; position:absolute;" type="text" name="mobile" id="mobile" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['mobile'];
}
if (isset($url[1]) and !isset($_POST['submit']))
{
    echo implode(",", $list['mobile']);
} ?>">

						<div>
						<span class="areaerr"><?php echo $error['areaOfInterestError']; ?></span><br>
					<span class="label-input100 bot">Area Of Interest</span>
					<?php
					 $page = 'areaOfInterest';
					 include ("./controller/dropdown.php");
					?>
					<br>

          <span class="dateerr"><?php echo $error['dateError']; ?></span><br>
					<span class="label-input100 bg bot">Date Of Birth</span>
          <input type="date" class="date" name="date" value="<?php if (isset($_POST['date']))
{
    echo $_POST['date'];
}
if (isset($url[1]) and !isset($_POST['submit']))
{
    echo $dob;
} ?>"><br>

             <span class="deterr"><?php echo $error['detailsOfGraduationError']; ?></span><br>
						 <span class="label-input100 bg bot">Details Of Graduation</span>
						 <?php
	 					     $page = 'detailsOfGraduation';
	 					     include ("./controller/dropdown.php");
	 					 ?>

          <span class="nameerr"><?php echo $error['bloodGroupError']; ?></span>
					<span class="label-input100 bg bot">Blood Group</span>
          <?php
					    $page = 'bloodGroup';
					    include ("./controller/dropdown.php");
					?>

					<span class="nameerr"><?php echo $error['genderError']; ?></span><br>
					<span class="label-input100 bg bot">Gender</span>
					<input type="radio" class="gender a bot" name="gender" value="Male" <?php if (isset($_POST['gender']) and $_POST['gender'] == "Male")
{
    echo "checked";
}
if (isset($url[1]) and !isset($_POST['submit']) and $gender == "Male")
{
    echo "checked";
} ?>><span class="gender b">Male</span>
					<input type="radio" class="gender a1" name="gender" value="Female" <?php if (isset($_POST['gender']) and $_POST['gender'] == "Female")
{
    echo "checked";
}
if (isset($url[1]) and !isset($_POST['submit']) and $gender == "Female")
{
    echo "checked";
} ?>><span class="gender b1">Female</span>

				</div>
				<div>
					<span class="prof"><?php echo $error['profileError']; ?></span><br>
					<span class="label-input100 bg bot">Profile Picture</span>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="profile"><?php if (isset($url[1]))
{
    echo end(explode('/', $pp));
}
echo $_SESSION['profile']; ?></span>

          <input type="file" class="file bot" name="profile">


          <span class="pass"><?php echo $error['passwordError']; ?></span>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['password'];
} ?>">
					</div>

          <span class="cpass"><?php echo $error['cpasswordError']; ?></span>
					<div class="wrap-input100">
						<input class="input100" type="password" name="cpassword" placeholder="Confirm Password" value="<?php if (isset($_POST['submit']))
{
    echo $_POST['cpassword'];
} ?>">
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit">Submit</button>
						</div>
					</div><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<?php if (isset($url[1]))
							{ ?>
								<button class='login100-form-btn' name='cancel'>Cancel</button>
								<?php
							}
							?>
						</div>
					</div>
				</form>
		</div>
	</div>
	<div id="confirm">
		 <div class="message"></div><br><br>
		 <button class="yes">Ok</button>
	</div>
</body>
</html>

<?php
if ($error['val'] == 3)
{
?>
 <script>
  functionConfirm('Successfully Registered', function yes() {
    location.replace('../../login');
  });
 </script>
 <?php
}
?>

<?php
if ($error['val'] == 2)
{
?>
 <script>
  functionConfirm('Successfully Updated', function yes() {
    location.replace('../../list');
  });
 </script>
 <?php
}
?>

<script>

$(document).ready(function(){

 $('#email').tokenfield({
  autocomplete:{
   source: ['hanu@gmail.com','siva@gmail.com','suba@gmail.com','inbha@gmail.com','ajith@gmail.com'],
  },
  showAutocompleteOnFocus: true
 });

$('#mobile').tokenfield({
  autocomplete:{
   source: ['9442131842','8472431842','9311131812','8231221842','8726351826'],
  },
  showAutocompleteOnFocus: true
 });

 });


 </script>
