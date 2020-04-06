<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="form.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include("./model/connection.php");
include("./model/dropdown.php");
include("./model/new.php");
include("./controller/validation.php");
include("css/login.css");
include("css/demo.css");
?>
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

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<input class="input100" type="text" placeholder="First Name..." name="firstName" value="<?php if(isset($_POST['submit'])) {echo $_POST['firstName'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo $list['fname'];} ?>"><span style="color:red;"><?php echo $error['firstError']; ?></span>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<input class="input100" type="text" placeholder="Last Name..." name="lastName" value="<?php if(isset($_POST['submit'])) {echo $_POST['lastName'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo $list['lname'];} ?>"><span style="color:red;"><?php echo $error['lastError']; ?></span>
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input">
						<input style="width:90%; padding-right:30px; border:1px solid black" placeholder="Email" type="text" name="email" id="email" value="<?php if(isset($_POST['submit'])) {echo $_POST['email'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo implode(",",$list['email']);} ?>"><br>
            <span style="color:red;"><?php echo $error['emailError']; ?></span>
						<span class="focus-input100"></span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" placeholder="Mobile Number..." name="mobile" id="mobile" value="<?php if(isset($_POST['submit'])) {echo $_POST['mobile'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo implode(",",$list['mobile']);} ?>"><br>
            <span style="color:red;"><?php echo $error['mobileError']; ?></span>
						<span class="focus-input100"></span>
					</div>

          <div>
					<span class="label-input100 bot top">Area Of Interest</span>
          <?php include("./controller/areaOfInterest.php"); ?><span style="color:red;"><br><?php echo $error['areaOfInterestError']; ?></span>

					<span class="label-input100 bg bot">Date Of Birth</span>
           <input type="date" class="date" name="date" value="<?php if(isset($_POST['date'])) { echo $_POST['date']; } if(isset($url[1]) and !isset($_POST['submit'])) {echo $dob; } ?>"><span style="color:red;"><?php echo $error['dateError']; ?></span>&ensp;&ensp;&ensp;&ensp;

             <span class="label-input100 bg bot">Details Of Graduation</span>
             <?php include("./controller/detailsOfGraduation.php"); ?><span style="color:red;"><?php echo $error['detailsOfGraduationError']; ?></span>


					<span class="label-input100 bg bot">Blood Group</span>
          <?php include("./controller/bloodGroup.php"); ?><span style="color:red;"><?php echo $error['bloodGroupError']; ?></span>


					<span class="label-input100 bg bot">Gender</span>
					<input type="radio" class="gender a" name="gender" value="male" <?php if(isset($_POST['gender']) and $_POST['gender'] == "male") {echo "checked";} if(isset($url[1]) and !isset($_POST['submit']) and $gender == "male") {echo "checked";} ?>><span class="gender b">Male</span>
					<input type="radio" class="gender a1" name="gender" value="female" <?php if(isset($_POST['gender']) and $_POST['gender'] == "female") {echo "checked";} if(isset($url[1]) and !isset($_POST['submit']) and $gender == "female") {echo "checked";}  ?>><span class="gender b1">Female</span>

					<span class="label-input100 bg bot">Profile Picture</span>
          <input type="file" class="file" name="profile"><span style="color:red; margin-right:100px;"><br>
          <?php echo $error['profileError']; ?></span>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['submit'])) {echo $_POST['password'];} ?>"><span style="color:red;"><?php echo $error['passwordError']; ?></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<input class="input100" type="password" name="cpassword" placeholder="Confirm Password" value="<?php if(isset($_POST['submit'])) {echo $_POST['cpassword'];} ?>"><span style="color:red;"><?php echo $error['cpasswordError']; ?></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit">
								Submit
							</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<script>
function validateForm() {
	alert('gfngvhn');
}
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
