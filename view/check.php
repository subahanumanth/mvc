<html>
<link rel="stylesheet" href="../../view/css/main.css">
<link rel="stylesheet" href="../../view/css/check.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <style>
  #toast-container {
    margin-top:50px;
}

  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
<title>User Page</title>
  <div class="topnav">
    <a href=""><span class="welcome">Welcome <?php echo sprintf("%s %s", $_SESSION['name'], $list['last_name']); ?></span></a>
     <a href="../logOut"><i class="fa fa-sign-out"></i></a>
</div><br>
<div class="area"><span class="detail"><b>Details</b></span><img src="<?php echo $list['profile_picture']; ?>" style="width:100px; height:90px; margin-left:430px; border-radius:50px;"><br><br>
<span class="name"><b>Name &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo sprintf("%s %s",$list['first_name'], $list['last_name']); ?></b></span><br><br>
<span class="dob"><b>Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo date("d-M-Y", strtotime($list['date_of_birth'])); ?></b></span><br><br>
<span class="dog"><b>Details Of Graduation &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listDetailsOfGraduation; ?></b></span><br><br>
<span class="bg"><b>Blood Group &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listBloodGroup; ?></b></span><br><br>
<span class="gender"><b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['gender'] ?></b></span><br><br>
<span class="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listEmail ?></b></span><br><br>
<span class="mobile"><b>Mobile Number &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listMobile ?></b></span><br><br>
<span class="aoi"><b>Area Of Interest &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listAreaOfInterest ?></b></span><br><br><br>
<a href="../new/<?php echo $_SESSION['id']; ?>" id="sample"><span class="up">Update</span></a>
</div>
<?php
session_start();
if(isset($_SESSION['update'])) { ?>
    <script>toastr.success("Updated Successfully");</script>
<?php
$_SESSION['update'] = null;
}
?>
</html>
