<?php
include("./model/connection.php");
include("validation.php");

?>

<html>

<head>
<style>
.border {
    border-style:solid;
    border-color:#00FFFF;
    margin: 25px 50px 50px 50px;
    padding : 0px 0px 0px 0px;

}

.heading {
    background-color : #00FFFF;
    height : 60px;

}

.form {
    padding-top : 10px;
}

.large {
    font-size:20px;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="form.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>



</head>
<body>
<div class="border">
<div class="heading">
<center><h1 class="form">Registration Form</h1></center>
</div><br>
<form name="add_name" id="add_name" method="post" enctype="multipart/form-data">
<center><span class="large">First Name </span> &ensp;<input type="text"  name="firstName" value="<?php if(isset($_POST['submit'])) {echo $_POST['firstName'];} ?>"><span style="color:red;"><?php echo $error['firstError']; ?></span></center><br><br>
<center><span class="large">Last Name </span>&ensp; <input type="text" name="lastName" value="<?php if(isset($_POST['submit'])) {echo $_POST['lastName'];} ?>"><span style="color:red;"><?php echo $error['lastError']; ?></span></center><br><br>
 <center><span class="large">Email </span>&ensp;  <input type="text" name="email" id="email" class="form-control" style="width:200px;" value="<?php if(isset($_POST['submit'])) {echo $_POST['email'];} ?>"><span style="color:red;"><?php echo $error['emailError']; ?></span></center><br><br>
<center><span class="large">Mobile No  </span>&ensp;<input type="text" name="mobile" id="mobile" class="form-control" style="width:200px;" value="<?php if(isset($_POST['submit'])) {echo $_POST['mobile'];} ?>"><span style="color:red;"><?php echo $error['mobileError']; ?></span></center><br><br>
<center><span class="large">Area Of Interest</span> &ensp;<?php include("areaOfInterest.php"); ?><span style="color:red;"><?php echo $error['areaOfInterestError']; ?></span></center><br><br>
<center><span class="large">Date Of Birth </span> &ensp;<input type="date" id="date" name="date" value="<?php if(isset($_POST['date'])) { echo $_POST['date'];} ?>"><span style="color:red;"><?php echo $error['dateError']; ?></span></center><br><br>
<center><span class="large">Details Of Graduation </span> &ensp;<?php include("detailsOfGraduation.php"); ?><span style="color:red;"><?php echo $error['detailsOfGraduationError']; ?></span>&ensp;</center><br><br>
<center><span class="large">Blood Group </span>
<?php include('bloodGroup.php'); ?><?php echo $error['bloodGroupError']; ?></center><br><br>
<center><span class="large">Gender </span> &ensp;

<input type="radio" id="gender" name="gender" value="male" <?php if(isset($_POST['gender']) and $_POST['gender'] == "male") {echo "checked";} ?>>Male &ensp;&ensp;
<input type="radio" id="gender" name="gender" value="female" <?php if(isset($_POST['gender']) and $_POST['gender'] == "female") {echo "checked";} ?>>Female<span style="color:red;"><?php echo $error['genderError']; ?></span></center><br><br>
<center><span class="large">Profile Picture  </span>&ensp;
<input type="file" name="profile"><span style="color:red;"><?php echo $error['profileError']; ?></span></center><br><br>
<center><span class="large">Password  </span>&ensp;<input type="password" name="password" value="<?php if(isset($_POST['submit'])) {echo $_POST['password'];} ?>"><span style="color:red;"><?php echo $error['passwordError']; ?></span></center><br><br>
<center><span class="large">Confirm Password</span> &ensp; <input type="password" name="cpassword" value="<?php if(isset($_POST['submit'])) {echo $_POST['cpassword'];} ?>"><span style="color:red;"><?php echo $error['cpasswordError']; ?></span>&ensp;</center><br><br>
<center><input type="submit" name="submit" id="submit" class="btn btn-info" onsubmit="validateForm();"></center>
</form>
</div>
</body>
</html>

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
