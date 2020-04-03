
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<meta charset="utf-8">
    <script type="text/javascript" src="form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include("css/sky-form.css");
include("css/demo.css");
?>
	</head>
	<body class="bg-cyan">
		<div class="body body-s">

			<form class="sky-form" name="add_name" method="post" enctype="multipart/form-data">
				<header>Registration form</header>

				<fieldset>
          <div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="First Name" name="firstName" value="<?php if(isset($_POST['submit'])) {echo $_POST['firstName'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo $list['fname'];} ?>"><span style="color:red;"><?php echo $error['firstError']; ?></span>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" placeholder="Last Name" name="lastName" value="<?php if(isset($_POST['submit'])) {echo $_POST['lastName'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo $list['lname'];} ?>"><span style="color:red;"><?php echo $error['lastError']; ?></span>
							</label>
						</section>
					</div>

          <span class="e">Email</span>
					<section class="email">
              <input type="text"  name="email" id="email" value="<?php if(isset($_POST['submit'])) {echo $_POST['email'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo implode(",",$list['email']);} ?>"><br>
              <span style="color:red;"><?php echo $error['emailError']; ?></span>
					</section><br>

          <span class="e">Mobile number</span>
					<section class="email">
              <input type="text" name="mobile" id="mobile" value="<?php if(isset($_POST['submit'])) {echo $_POST['mobile'];} if(isset($url[1]) and !isset($_POST['submit'])) {echo implode(",",$list['mobile']);} ?>"><br>
              <span style="color:red;"><?php echo $error['mobileError']; ?></span>
					</section><br>

          <section>
              <?php include("./controller/areaOfInterest.php"); ?><span style="color:red;"><br><?php echo $error['areaOfInterestError']; ?></span>
          </section>

          <section>
						<label class="input">
							<i class="icon-append icon-calendar"></i>
							<input type="date" placeholder="Date Of Birth" name="date" value="<?php if(isset($_POST['date'])) { echo $_POST['date']; } if(isset($url[1]) and !isset($_POST['submit'])) {echo $dob; } ?>"><span style="color:red;"><?php echo $error['dateError']; ?></span>
						</label>
					</section>

          <section>
            <label class="select">
          <?php include("./controller/detailsOfGraduation.php"); ?><span style="color:red;"><?php echo $error['detailsOfGraduationError']; ?></span>
        </label>
          </section>

          <section>
            <label class="select">
              <?php include("./controller/bloodGroup.php"); ?><span style="color:red;"><?php echo $error['bloodGroupError']; ?></span>
            </label>
          </section>

          <section>
              <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) and $_POST['gender'] == "male") {echo "checked";} if(isset($url[1]) and !isset($_POST['submit']) and $gender == "male") {echo "checked";} ?>>&nbsp;&nbsp;<span class="m">Male</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) and $_POST['gender'] == "female") {echo "checked";} if(isset($url[1]) and !isset($_POST['submit']) and $gender == "female") {echo "checked";}  ?>>&nbsp;&nbsp;<span class="m">Female</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style="color:red;"><?php echo $error['genderError']; ?></span>
          </section>

          <section>
              <span class="m">Profile Picture</span><input type="file" name="profile"><span style="color:red; margin-right:100px;"><br>
              <?php echo $error['profileError']; ?></span>
          </section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['submit'])) {echo $_POST['password'];} ?>"><span style="color:red;"><?php echo $error['passwordError']; ?></span>
						</label>
					</section>

					<section>
						<label class="input">
							<i class="icon-append icon-lock"></i>
							<input type="password" name="cpassword" placeholder="Confirm password" value="<?php if(isset($_POST['submit'])) {echo $_POST['cpassword'];} ?>"><span style="color:red;"><?php echo $error['cpasswordError']; ?></span>
						</label>
					</section>

				</fieldset>

				<footer>
					<input type="submit" name="submit" id="submit" class="button">
				</footer>
			</form>

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
