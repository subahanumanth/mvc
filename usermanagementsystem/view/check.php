<html>
<style>
#logout {
  margin-left : 1200px;
}

#submit {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  margin-left: 423px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  margin-left: 423px;
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
</style>

<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
<div class="topnav">

  <a href="login.php" id="logout">log out</a>

</div><br>
<table border='1'  style='border-collapse: collapse;  width:100%;' id='customers'>
<tr><td><?php echo $list['first_name'] ?></td><td><?php echo $list['last_name'] ?></td><td><?php echo $list['date_of_birth'] ?></td><td><?php echo $list['details_of_graduation'] ?></td><td><?php echo $list['blood_group'] ?></td><td><?php echo $list['gender'] ?></td><td><?php echo $listEmail ?></td><td><?php echo $listMobile ?></td><td><?php echo $listAreaOfIntrest ?></td>
</table>
</html>
