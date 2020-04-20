<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../../../view/js/index.js"></script>
	<script src="../../../view/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../../../view/css/jquery.min.css">
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
            } ?>"><span class="nameerror"><?php echo $error['firstError']; ?></span>
					</div>

					<div class="wrap-input100" data-validate="Name is required">
						<input class="input100" type="text" placeholder="Last Name..." name="lastName" value="<?php if (isset($_POST['submit']))
            {
                 echo $_POST['lastName'];
            }
            if (isset($url[1]) and !isset($_POST['submit']))
            {
                echo $list['lname'];
            } ?>"><span class="nameerror"><?php echo $error['lastError']; ?></span>
					</div>
					<?php $pp = $list['profilePicture']; ?>

					<span class="emailerror"><?php echo $error['emailError']; ?></span>
						<span class="label-input100 headEmail">Email</span>
						<input style="width:90%; position:absolute;" type="text" name="email" id="email" value="<?php if (isset($_POST['submit']))
            {
                echo $_POST['email'];
            }
            if (isset($url[1]) and !isset($_POST['submit']))
            {
                echo implode(",", $list['email']);
            } ?>">&emsp;&emsp;&emsp;&emsp;&emsp;

						<span class="mobileerror"><?php echo $error['mobileError']; ?></span>
						<span class="label-input100 headMobile">Mobile Number</span>
						<input style="width:90%; position:absolute;" type="text" name="mobile" id="mobile" value="<?php if (isset($_POST['submit']))
            {
                echo $_POST['mobile'];
            }
            if (isset($url[1]) and !isset($_POST['submit']))
            {
            echo implode(",", $list['mobile']);
            } ?>">

						<div><br>
						<span class="areaerror"><?php echo $error['areaOfInterestError']; ?></span><br>
					  <span class="label-input100 bot">Area Of Interest</span>
            <?php
					  $page = 'areaOfInterest';
					  include ("./controller/dropdown.php");
					  ?>
					<br>

          <span class="dateerror"><?php echo $error['dateError']; ?></span><br>
					<span class="label-input100 bg bot">Date Of Birth</span>
          <input type="date" class="date" name="date" value="<?php if (isset($_POST['date']))
          {
          echo $_POST['date'];
          }
          if (isset($url[1]) and !isset($_POST['submit']))
          {
              echo $dob;
          } ?>"><br>

          <span class="deterror"><?php echo $error['detailsOfGraduationError']; ?></span><br>
					<span class="label-input100 bg bot">Details Of Graduation</span>
					<?php
	 				    $page = 'detailsOfGraduation';
					    include ("./controller/dropdown.php");
	 				?>

          <span class="nameerror"><?php echo $error['bloodGroupError']; ?></span>
					<span class="label-input100 bg bot">Blood Group</span>
          <?php
					    $page = 'bloodGroup';
           		include ("./controller/dropdown.php");
					?>

					<span class="nameerror"><?php echo $error['genderError']; ?></span><br>
					<span class="label-input100 bg bot">Gender</span>
					<input type="radio" class="gender male bot" name="gender" value="Male" <?php if (isset($_POST['gender']) and $_POST['gender'] == "Male")
          {
              echo "checked";
          }
          if (isset($url[1]) and !isset($_POST['submit']) and $gender == "Male")
          {
              echo "checked";
          } ?>><span class="gender topicMale">Male</span>
					<input type="radio" class="gender female" name="gender" value="Female" <?php if (isset($_POST['gender']) and $_POST['gender'] == "Female")
          {
              echo "checked";
          }
          if (isset($url[1]) and !isset($_POST['submit']) and $gender == "Female")
          {
              echo "checked";
          } ?>><span class="gender topicFemale">Female</span>

				</div>
				<div>
					<span class="prof"><?php echo $error['profileError']; ?></span><br>
					<span class="label-input100 bg bot">Profile Picture</span>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="profile"><?php if (isset($url[1]))
          {
              echo end(explode('/', $pp));
          }
          echo $_SESSION['profile'];
					?></span>
          <input type="file" class="file bot" name="profile">

          <span class="password"><?php echo $error['passwordError']; ?></span>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" value="<?php if (isset($_POST['submit']))
            {
                echo $_POST['password'];
            } ?>">
					</div>

          <span class="confirmPassword"><?php echo $error['cpasswordError']; ?></span>
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
		 <button class="result">Ok</button>
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
$('#email').tokenfield();
$('#mobile').tokenfield();
 });
</script>
