<html>
<link rel="stylesheet" href="view/css/main.css">
<link rel="stylesheet" href="view/css/check.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<title>User Page</title>
<div class="topnav"> <span class="welcome">Welcome <?php echo sprintf("%s %s", $_SESSION['name'], $list['last_name']); ?></span> <a href="../logOut"><i class="fa fa-sign-out"></i></a> </div>
<br>
<div class="post">
<img src="<?php echo $list['profile_picture']; ?>" class="photo" style="width:40px; height:40px; border-radius:50px;">
<input type="text" class="content" placeholder="What's on your mind....">
<button class="click">Post</button><span id="picture"><img src="<?php echo $list['profile_picture']; ?>" style="width:100px; height:90px; margin-left:400px; border-radius:50px;"></span>
</div><br><hr class="line"><br>
<?php
if(count($post) > 0) {
for($key = 0;$key < count($post);$key++) { 
?>
<div class="posts">
<img src="<?php echo $list['profile_picture']; ?>" class="photo" style="width:40px; height:40px; border-radius:50px;">
<span id="picture"><img src="<?php echo $list['profile_picture']; ?>" style="width:100px; height:90px; margin-left:400px; border-radius:50px;"></span><span class="value"><?php echo $post[$key]['post']; ?></span>
<button class="date" onclick="deletePost(<?php echo $post[$key]['id']; ?>);"><i class="fa fa-trash"></i></button>
</div>
    <hr class="line"><br>
<?php 
}
}else { ?>
    <div class="no">No posts Yet</div><br>
    <hr class="line">
<?php    
}
?>
<br>

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
                    </tr>
                  </thead>
                  <tr><td><?php echo $list['first_name']; ?><t/d>
                  <td><?php echo $list['last_name']; ?></td>
                  <td><?php echo date("d-M-Y", strtotime($list['date_of_birth'])); ?></td>    
                  <td><?php echo $listDetailsOfGraduation; ?></td>      
                  <td><?php echo $listBloodGroup; ?></td>                                            
                  <td><?php echo $list['gender'] ?></td>      
                  <td><?php echo $listEmail ?></td>                                                      
                  <td><?php echo $listMobile ?></td>                                                      
                  <td><?php echo $listAreaOfInterest ?></td>                                                                        
</table><br>
<a href="../new/<?php echo $_SESSION['id']; ?>" id="sample"><span class="up">Update</span></a>
                  

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
<script>

function deletePost (id) {
    console.log(id);
        $.ajax({
            type:"post",
            data:{id:id},
            success:function (data) {
                location.reload(true);
            }
        });    
}


$(".click").click(function () {
    var content = $(".content").val();
    if(content != "") {
        $.ajax({
            type:"post",
            data:{content:content},
            success:function (data) {
                data = data.trim();
                if(data == "success") {
                    location.reload(true);
                    $(".content").val("");
                }
            }
        });
    }
});
</script>
</html>
