<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php require("css/adminList.css"); ?>
</head>
<body>

  <div class="topnav">
    <a class="active" href="../bloodGroupTable">Manage Blood Group</a>
    <a href="../areaOfIntrestTable">Manage Area Of Interest</a>
    <a href="../detailsOfGraduationTable">Manage Details Of Graduation</a>
    <a href=""><span class="welcome">Welcome <?php echo $_SESSION['name']; ?></span></a>
    <a href="../login"><i class="fa fa-sign-out"></i></a>  </div><br>

<h2 align="center">Details</h2>
<table border='1'  style='border-collapse: collapse;  width:100%;' id='customers'>
  <tr><td>First Name</td><td>Last Name</td><td>Date Of Birth</td><td>Details Of Graduation</td><td>Blood Group</td><td>Gender</td><td>Email</td><td>Mobile Number</td><td>Area Of Interest</td><td>Update</td><td>Delete</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
<tr><td><?php echo $list[$i]['firstName'] ?></td><td><?php echo $list[$i]['lastName'] ?></td><td><?php echo date("d-M-Y",strtotime($list[$i]['dateOfBirth']));
 ?></td><td><?php echo $list[$i]['detailsOfGraduation'] ?></td><td><?php echo $list[$i]['bloodGroup'] ?></td><td>
   <?php echo $list[$i]['gender'] ?></td><td><?php echo $email[$i] ?></td>
   <td><?php echo $mobile[$i] ?></td><td><?php echo $areaOfIntrest[$i] ?></td>
   <td><input type="submit" value="Update" id="sample"></td>
   <td><input type="submit" value="Delete" id="sample"></td></tr>
<?php
}
 ?>
</table>
</body>
</html>
