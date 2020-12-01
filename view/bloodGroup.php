<html>
<script src="view/js/jquery.min.js"></script>
<script src="view/js/index.js"></script>
<link rel="stylesheet" href="view/css/table.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<style>
</style>
<title>Blood Group Table</title>
<div id="confirm">
	<div class="message"></div>
	<hr class="hr">
	<br>
	<button class="result">Yes</button>
	<button class="no">No</button>
</div>
<div class="topnav"> <a href="list"><i class="fa fa-home"></i></a> <a class="active" href="manageBloodGroup">Manage Blood Group</a> <a href="manageAreaOfInterest">Manage Area Of Interest</a> <a href="manageDetailsOfGraduation">Manage Details Of Graduation</a> <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a> <a href="logOut"><i class="fa fa-sign-out"></i></a> </div>
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100">
				<h1 style="text-align:center;">Blood Group Table</h1>
				<br>
				<br>
				<div id="table"></div>
				<button id="samp" class="add">Add</button>
				<br>
				<br>
				<div style="display:none" id="form">
					<input type="text" id="blood" name="bg" value="" placeholder="Enter Blood Group Here" />
					<br>
					<button id="samp" class="submit">Submit</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
fetch_data();

function fetch_data() {
	$.ajax({
		url: "select",
		type: "post",
		data: {
			page: "<?php echo $_SERVER['REQUEST_URI'] ?>"
		},
		success: function(data) {
			$('#table').html(data);
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
				status = data.trim();
				if(status == "success") {
					toastr.warning("deleted Successfully");
				} else {
					toastr.error("Error !!...One of the user has this value");
				}
			}
		});
	}
}

function update(id, bg) {
	$("#blood").val(bg);
	$("#form").show();
	$(".submit").val(id);
}
$(".submit").click(function() {
	if($(".submit").val() != "") {
		var id = $(".submit").val();
		var value = $("#blood").val();
		$.ajax({
			url: "update",
			type: "post",
			data: {
				id: id,
				bg: value,
				page: "<?php echo $_SERVER['REQUEST_URI'] ?>"
			},
			success: function(data) {
				$("#form").hide();
				fetch_data();
				toastr.success("Updated Successfully");
			}
		});
	}
});
$(".add").click(function() {
	$("#form").show();
	$("#blood").val("");
	$(".submit").val("");
});
$(".submit").click(function() {
	if($(".submit").val() == "") {
		value = $("#blood").val();
		$.ajax({
			url: "update",
			type: "post",
			data: {
				query: value,
				page: "<?php echo $_SERVER['REQUEST_URI'] ?>"
			},
			success: function(data) {
				$("#form").hide();
				fetch_data();
				toastr.success("Added Successfully");
			}
		});
	}
});
</script>

</html>
