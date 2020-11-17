
<!DOCTYPE html>
<html>

<head>
  <title>Admin Page</title>

      <script src="../../view/js/jquery.dataTables.min.js"></script>
  <script src="../../../view/js/jquery.min.js"></script>
  <script src="../../../view/js/index.js"></script>

  <link rel="stylesheet" href="../../view/css/admin.css">	
  <link rel="stylesheet" href="../../../../view/css/pagination.css">
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type = "text/javascript" src = "https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

  <style>
  #customers_filter {
      margin:0px 0px 10px 1050px;
  }
  .dataTables_info {
      margin:20px 0px 20px 0px;
      text-align:center;
  }
  .paging_simple_numbers {
      text-align:center;
  }

  .paginate_button {
      padding:6px 6px 6px 6px;
      margin:10px 10px 10px 10px;
      border-radius:0px;
      border :1px solid black;
      color:white;
      background-color:#301934;
  }
    .current {
      padding:6px 6px 6px 6px;
      margin:10px 10px 10px 10px;
      border-radius:0px;
      border :1px solid black;
      color:black;
      background-color:red;
  }

 
  </style>  
</head>
<body>

  <div id="confirm">
     <div class="message"></div><hr class="hr"><br>
     <button class="result" >Yes</button>
     <button value="1" class="no">No</button>
  </div>
<div class="topnav">
<div>
  <a class="active" href="../../../../manageBloodGroup">Manage Blood Group</a>
  <a href="../../../../manageAreaOfInterest">Manage Area Of Interest</a>
  <a href="../../../../manageDetailsOfGraduation">Manage Details Of Graduation</a>
  <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
  <a href="../../../../logOut"><i class="fa fa-sign-out"></i></a>  </div>
</div>
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
             if(isset($list[$i]['id'])) {
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
               <button class="list" id="del" value="<?php echo $list[$i]['id'] ?>" onclick="functionConfirm('Are You Sure?', function yes() {
                 location.replace('../../../../list/delete/'+<?php echo $list[$i]['id']; ?>);
               });"><i class="fa fa-trash"></i></button>
               <a href="../../../list/update/<?php echo $list[$i]['id']; ?>" class="column11"><i class="fa fa-edit edit"></i></a>
             </td>
           </tr>
           <?php

           }
           }

           ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  
<div id="res"></div>
</div><br><br><br>


    <script>

  $(document).ready(function() {
      $("#customers").DataTable();
  });
</script>

</div>
</body>

</html>


