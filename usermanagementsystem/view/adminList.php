<html><h1><b>Welcome Admin</b></h1></html>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

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

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="/bloodGroup/bloodGroupTable.php">Manage Blood Group</a>
  <a href="/areaOfIntrest/areaOfIntrestTable.php">Manage Area Of Intrest</a>
  <a href="/detailsOfGraduation/detailsOfGraduationTable.php">Manage Details Of Graduation</a>
  <a href="login.php" id="logout">Log Out</a>
</div><br>

<table border='1'  style='border-collapse: collapse;  width:100%;' id='customers'>
  <?php
  for($i=1;$i<=count($list);$i++) {
    if($listEmail[$i]['id'] == $list[$i]['id']) {
    ?>
<tr><td><?php echo $list[$i]['firstName'] ?></td><td><?php echo $list[$i]['lastName'] ?></td><td><?php echo $list[$i]['dateOfBirth'] ?></td><td><?php echo $list[$i]['detailsOfGraduation'] ?></td><td><?php echo $list[$i]['bloodGroup'] ?></td><td><?php echo $list[$i]['gender'] ?></td><td><?php echo $listEmail[$i]['email'] ?></td></tr>
<?php
    }
}
 ?>
</table>
</body>
</html>
