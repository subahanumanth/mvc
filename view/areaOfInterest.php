<html>
<script src="../../../view/js/jquery.min.js"></script>
<script src="view/js/index.js"></script>
<link rel="stylesheet" href="../../../view/css/table.css">
<link rel="stylesheet" href="../../../view/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type = "text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
#toast-container {
  margin-top:40px;   
}
</style>
<title>Area Of Interest Table</title>

 <div id="confirm">
    <div class="message"></div><hr class="hr"><br>
    <button class="result">Yes</button>
    <button class="no">No</button>
 </div>
 <div class="topnav">
   <a href="../../../list"><i class="fa fa-home"></i></a>
   <a class="active" href="../../manageBloodGroup">Manage Blood Group</a>
   <a href="../../manageAreaOfInterest">Manage Area Of Interest</a>
   <a href="../../manageDetailsOfGraduation">Manage Details Of Graduation</a>
   <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
   <a href="../logOut"><i class="fa fa-sign-out"></i></a>  </div>

<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h1 style="text-align:center;">Area Of Interest Table</h1><br><br>

        <table>
          <thead>
            <tr class="table100-head">
              <th class="column1">Area Of Interest</th>
              <th class="column2">Action</th>
            </tr>
          </thead>
          <tbody>
             <?php
             for ($i = 0;$i < count($list);$i++)
             {
             ?>
             <tr class="<?php echo $list[$i]['id'] ?>">
             <td class="column1" id="rem"><?php echo $list[$i]['areaOfInterest']; ?></td>
             <td><button id="del" onclick="functionConfirm('Are You Sure?', function yes() {
             var a = <?php echo $list[$i]['id'] ?>; display(a);
             });"><i class="fa fa-trash"></i></button>
             <button id="del" class="update" onclick="update (<?php echo $list[$i]['id']; ?>,'<?php echo $list[$i]['areaOfInterest']; ?>')"><i class="fa fa-edit edit"></i></button>
            </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table><br>
          <button id="samp" class="add">Add</button></a><br><br>
          <div style="display:none" id="form">
          <input type="text" id="blood" name="bg" placeholder="Enter Area Of Interest Here" /><br>
          <button id="samp" class="submit">Submit</button>
          </div>
      </div>
    </div>
  </div>
<div id="res"></div>
</div>
<script>
function display(id) { 
    if(id != "") {
        $.ajax({ 
            url:"./view/delete.php",
            type:"post",
            data:{query:id, page:"<?php echo $_SERVER['REQUEST_URI'] ?>"},
            success:function(data) {
                $("#res").html(data);
            }
        });
     }
}

function update (id, bg) {
    console.log(id);
    $("#blood").val(bg);
    $("#form").show();
    $(".submit").click(function () {    
        var value = $("#blood").val();        
        console.log(value);
        $.ajax({
            url:"./view/update.php",
            type:"post",
            data:{id:id, bg:value, page:"<?php echo $_SERVER['REQUEST_URI'] ?>"},     
            success:function(data) {
                location.reload(true);
            }  
        });
    });
}

$(document).ready(function () { 
    $(".add").click (function () {
        $("#form").show();
        $(".submit").click(function () {
            var value = $("#blood").val();
            $.ajax({
                url:"./view/update.php",
                type:"post",
                data:{query:value, page:"<?php echo $_SERVER['REQUEST_URI'] ?>"},     
                success:function(data) {
                    location.reload(true);
                }  
            });
        });
    });     
 
});
</script>
</html>
