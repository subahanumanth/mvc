<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
:root{
  --back-color:#ccbd2c;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#D3D3D3;
}

.topnav {
  overflow: hidden;
  background-color: #ccbd2c;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#customers tr:hover {background-color: var(--back-color);}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

#logout {
  margin-left:490px;
}
.nav {
  background-color:var(--back-color) ;
  height :60px;
}
.welcome {
  padding-left: 470px;
  font-size:20px;
}
</style>
</head>
<body>

  <div class="topnav">
    <a class="active" href="/bloodGroup/bloodGroupTable.php">Manage Blood Group</a>
    <a href="/areaOfIntrest/areaOfIntrestTable.php">Manage Area Of Intrest</a>
    <a href="/detailsOfGraduation/detailsOfGraduationTable.php">Manage Details Of Graduation</a>
    <a href=""><span class="welcome">Welcome Admin</span></a>
<a href="login"><i class="fa fa-sign-out"></i></a>  </div><br>

<table border='1'  style='border-collapse: collapse;  width:100%;' id='customers'>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
<tr><td><?php echo $list[$i]['firstName'] ?></td><td><?php echo $list[$i]['lastName'] ?></td><td><?php echo $list[$i]['dateOfBirth'] ?></td><td><?php echo $list[$i]['detailsOfGraduation'] ?></td><td><?php echo $list[$i]['bloodGroup'] ?></td><td><?php echo $list[$i]['gender'] ?></td><td><?php echo $email[$i] ?></td><td><?php echo $mobile[$i] ?></td><td><?php echo $areaOfIntrest[$i] ?></td></tr>
<?php
}
 ?>
</table>
</body>
</html>
