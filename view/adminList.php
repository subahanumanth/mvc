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
    <a href="../areaOfInterestTable">Manage Area Of Interest</a>
    <a href="../detailsOfGraduationTable">Manage Details Of Graduation</a>
    <a href=""><span class="welcome">Welcome <?php echo $_SESSION['name']; ?></span></a>
    <a href="../login"><i class="fa fa-sign-out"></i></a>  </div><br>

<h2 align="center">Details</h2>
<table border='1'  style='border-collapse: collapse;  width:100%;' id='customers'>
  <tr>
  <td class="m">First Name</td>
  <td class="m">Last Name</td>
  <td class="m">Date Of Birth</td>
  <td class="m">Details Of Graduation</td>
  <td class="m">Blood Group</td>
  <td class="m">Gender</td>
  <td class="m">Email</td>
  <td class="m">Mobile Number</td>
  <td class="m">Area Of Interest</td>
  <td class="m">Action</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
   <tr>
   <td class="m"><?php echo $list[$i]['firstName'] ?></td>
   <td class="m"><?php echo $list[$i]['lastName'] ?></td>
   <td class="m"><?php echo date("d-M-Y",strtotime($list[$i]['dateOfBirth']));?></td>
   <td class="m"><?php echo $list[$i]['detailsOfGraduation'] ?></td>
   <td class="m"><?php echo $list[$i]['bloodGroup'] ?></td>
   <td class="m"><?php echo $list[$i]['gender'] ?></td>
   <td class="m"><?php echo $list[$i]['email'] ?></td>
   <td class="m"><?php echo $list[$i]['mobile'] ?></td>
   <td class="m"><?php echo $list[$i]['areaOfInterest'] ?></td>
   <td>&nbsp;<i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash"></i></td>
</tr>
<?php
}
 ?>
</table>
</body>
</html>
