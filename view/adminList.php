<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="view/js/index.js"></script>
  <link rel="stylesheet" href="view/css/adminList.css">
  <link rel="stylesheet" href="view/css/util.css">
<?php include ("css/main.css"); ?>

</head>
<body>
  <div id="confirm">
     <div class="message"></div><hr class="hr"><br>
     <button class="yes">Yes</button>
     <button class="no">No</button>
  </div>
<div class="topnav">
  <a class="active" href="../manageBloodGroup">Manage Blood Group</a>
  <a href="../manageAreaOfInterest">Manage Area Of Interest</a>
  <a href="../manageDetailsOfGraduation">Manage Details Of Graduation</a>
  <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
  <a href="../logOut"><i class="fa fa-sign-out"></i></a>  </div>
<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h2 align="center">Details</h2><br>
        <table id="customers">
          <thead>
            <tr class="table100-head">
              <th class="column1">First Name</th>
              <th class="column2">Last Name</th>
              <th class="column3">DOB</th>
              <th class="column4">Details Of Graduation</th>
              <th class="column5">Blood Group</th>
              <th class="column6">Gender</th>
              <th class="column7">Email</th>
              <th class="column8">Mobile Number</th>
              <th class="column9">Area Of Interest</th>
              <th class="column10">Profile Picture</th>
              <th class="column11">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
for ($i = 0;$i < count($list);$i++)
{
?>
             <tr>
             <td class="column1"><?php echo $list[$i]['firstName'] ?></td>
             <td class="column2"><?php echo $list[$i]['lastName'] ?></td>
             <td class="column3"><?php echo date("d-M-Y", strtotime($list[$i]['dateOfBirth'])); ?></td>
             <td class="column4"><?php echo $list[$i]['detailsOfGraduation'] ?></td>
             <td class="column5"><?php echo $list[$i]['bloodGroup'] ?></td>
             <td class="column6"><?php echo $list[$i]['gender'] ?></td>
             <td class="column7"><?php echo $list[$i]['email'] ?></td>
             <td class="column8"><?php echo $list[$i]['mobile'] ?></td>
             <td class="column9"><?php echo $list[$i]['areaOfInterest'] ?></td>
             <td class="column10"><img style="height:40px" src="<?php echo $list[$i]['profilePicture'] ?>"></td>
             <td>
               <button class="brn" id="del" onclick="functionConfirm('Are You Sure?', function yes() {
                 location.replace('../../../../list/delete/'+<?php echo $list[$i]['id']; ?>);
               });"><i class="fa fa-trash"></i></button>
               <a href="../../../list/update/<?php echo $list[$i]['id']; ?>" class="column11"><i class="fa fa-edit edit"></i></a>
             </td>
           </tr>
           <?php
}
?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
