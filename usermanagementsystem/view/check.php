<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php require("css/check.css"); ?>
<div class="nav">
<h1 class="welcome">Welcome <?php echo $list['first_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><a href="login"><i class="fa fa-sign-out"></i></a></span>
</h1>
</div>

<div class="center">
<span class="name"><b>Name &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['first_name']." ".$list['last_name']; ?></b></span><br><br>
<span class="dob"><b>Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['date_of_birth']; ?></b></span><br><br>
<span class="dog"><b>Details Of Graduation &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['details_of_graduation'] ?></b></span><br><br>
<span class="bg"><b>Blood Group &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['blood_group'] ?></b></span><br><br>
<span class="gender"><b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $list['gender'] ?></b></span><br><br>
<span class="email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listEmail ?></b></span><br><br>
<span class="mobile"><b>Mobile Number &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listMobile ?></b></span><br><br>
<span class="aoi"><b>Area Of Intrest &nbsp;&nbsp;&nbsp;&nbsp;&emsp; <?php echo $listAreaOfIntrest ?></b></span><br><br>
<span class="submit"><a href="new">Update</a></span>
</div>
</html>
