<!DOCTYPE html>
<html>

<head>
	<title>Admin Page</title>
	<script src="view/js/index.js"></script>
	<link rel="stylesheet" href="view/css/admin.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> </head>

<body>
	<div class="bg">
		<div id="confirm">
			<div class="message"></div>
			<hr class="hr">
			<br>
			<button class="result yes">Yes</button>
			<button value="1" class="no">No</button>
		</div>
		<div class="topnav">
			<div class="dropdown" style="position:absolute;">
				<button class="btn btn-primary dropdown-toggle" id="purple" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> </button>
				<ul class="dropdown-menu">
					<li><a class="active" href="manageBloodGroup">Manage Blood Group</a></li>
					<li><a href="manageAreaOfInterest">Manage Area Of Interest</a></li>
					<li><a href="manageDetailsOfGraduation">Manage Details Of Graduation</a></li>
				</ul>
			</div> <span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span> <a href="logOut"><i class="fa fa-sign-out"></i></a> </div>
		<div class="container-table100">
			<h2 align="center">Profile Information</h2>
			<br><span class="filter"><b>Sort By Blood Group</b>
                       <?php
                       $page = 'bloodGroup';                     
                       include ("./controller/dropdown.php");
                       ?></span>
			<div id="table"></div>
		</div>
		<br>
		<br>
		<br>
	       <?php
               session_start();
               if(isset($_SESSION['update'])) { ?>
			<script>
			toastr.success("Updated Successfully");
			</script>
			<?php
                       $_SESSION['update'] = null;
               }
               ?>
	</div>
	</div>
</body>
<script>
fetch_data();
$(".bot").change(function () {
    id = $(".bot").val();
    fetch_data (id);
});

function fetch_data(id = 0) {
 	$.ajax({
		url: "select",
		type: "post",
		data: {
		        id:id,
			page: "<?php echo $_SERVER['REQUEST_URI'] ?>"
		},
		success: function(data) {
			$('#table').html(data);
			$("#customers").DataTable();
		}
	});
}


function display(id) {
	if(id != "") {
		$.ajax({
			url: "delete",
			type: "post",
			data: {
				query: id,
				page: "<?php echo $_SERVER['REQUEST_URI'] ?>"
			},
			success: function(data) {
				fetch_data();
				if(data == true) {
     					toastr.success("Deleted Succesfully");                          
				} else {
					toastr.error(data);
				}				   
			}
		});
	}
}
</script>

</html>
