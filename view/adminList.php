
<!DOCTYPE html>
<html>

<head>
  <title>Admin Page</title>

      <script src="../../view/js/jquery.dataTables.min.js"></script>
  <script src="../../../view/js/jquery.min.js"></script>
  <script src="../../../view/js/index.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../../view/css/admin.css">	
  <link rel="stylesheet" href="../../../../view/css/pagination.css">
  <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
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
    #toast-container {
        margin-top:40px;
    }
 
  </style>  
</head>
<body>
<div class="bg">
  <div id="confirm">
     <div class="message"></div><hr class="hr"><br>
     <button class="result yes" >Yes</button>
     <button value="1" class="no">No</button>
  </div>
<div class="topnav">

<div class="dropdown" style="position:absolute;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i>
    </button>
    <ul class="dropdown-menu">
      <li><a class="active" href="../../../../manageBloodGroup">Manage Blood Group</a></li>
      <li><a href="../../../../manageAreaOfInterest">Manage Area Of Interest</a></li>
      <li><a href="../../../../manageDetailsOfGraduation">Manage Details Of Graduation</a></li>
    </ul>
  </div>


  <span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span>
  <a href="../../../../logOut"><i class="fa fa-sign-out"></i></a>  

</div>
<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h2 align="center">Details</h2><br>
        <div id="table"></div>
      </div>
    </div>
  </div>  
<div id="res"></div>
<div id="r"></div>
</div><br><br><br>
<?php
session_start();
if(isset($_SESSION['update'])) { ?>
    <script>toastr.success("Updated Successfully");</script>
<?php
$_SESSION['update'] = null;
}
?>
<script>

  fetch_data();
function fetch_data () {
    $.ajax({
        url:"./view/select.php",
        type:"post",
        data:{page:"<?php echo $_SERVER['REQUEST_URI'] ?>"},
        success:function(data){  
            $('#table').html(data); 
            $("#customers").DataTable();
        }  
    });
}

function display(id) {
    if(id != "") {
        $.ajax({ 
            url:"./view/delete.php",
            type:"post",
            data:{query:id, page:"<?php echo $_SERVER['REQUEST_URI'] ?>"},
            success:function(data) {
                fetch_data();
                if(data == "true") {
                    toastr.success("deleted Successfully");
                } else {
                    toastr.error(data);
                }
            }
        });
     }
}

</script>

</div>
</div>
</body>

</html>


