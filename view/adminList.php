          <?php

if(!isset($_POST['query'])) { 

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <script src="../../../view/js/jquery.min.js"></script>
  <script src="../../../view/js/index.js"></script>
  <link rel="stylesheet" href="../../../../view/css/admin.css">	
  <link rel="stylesheet" href="../../../../view/css/pagination.css">
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<body>

  <div id="confirm">
     <div class="message"></div><hr class="hr"><br>
     <button class="result">Yes</button>
     <button class="no">No</button>
  </div>
<div class="topnav">
  <a class="active" href="../../../../manageBloodGroup">Manage Blood Group</a>
  <a href="../../../../manageAreaOfInterest">Manage Area Of Interest</a>
  <a href="../../../../manageDetailsOfGraduation">Manage Details Of Graduation</a>
  <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
  <a href="../../../../logOut"><i class="fa fa-sign-out"></i></a>  </div>

<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h2 align="center">Details</h2><br>
 search here : <input type="text" name="search" id="search">
          <div id="res"></div><br>

        <table id="customers">
          <thead>
            <tr class="table100-head">
              <th class="column1">ID</th>
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

}?>
             <?php

             for ($i = $from;$i < $to;$i++)
             { 
             if(isset($list[$i]['id']) or isset($search)) {
                          print_r($finalList);
             ?>
             <tr>
             <td class="column1"><?php echo $list[$i]['id'] ?></td>
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
               <button class="list" id="del" onclick="functionConfirm('Are You Sure?', function yes() {
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

</div><br><br><br>
          <?php

if(!isset($_POST['query'])) { 

?>
    <div class="container">
    <?php if($url[1]-1 != 0) { ?>
    <a href="../../../../../list/<?php echo ($url[1]-1).'/'.$records.'/'.$url[3]; ?>" class="pagination"><</a>
    <?php } ?>
    <?php
         if (isset($url[1]) and isset($url[2])) {
             $pages = ceil(count($list) / $records);
         } else {
             $pages = ceil(count($list) / 5);
         }
         for ($i = 1;$i <= $pages;$i++) {
    ?>
    <a href="../../../../../list/<?php echo $i.'/'.$records.'/'.$url[3] ; ?>" class="<?php if($url[1] == $i) {echo 'dark';} else {echo 'pagination';} ?>"><?php echo $i; ?></a>
    <?php
    }
    ?>
    <?php if($url[1]+1 != $pages+1) { ?>
    <a href="../../../../../list/<?php echo ($url[1]+1).'/'.$records.'/'.$url[3]; ?>" class="pagination">></a>
    <?php } ?>
    <br><br>
    <br>
  <i class="fa fa-filter"></i>
     
  <select class="sort">
  <option>sort by</option>
  <option value="sortByName" <?php if(isset($url[3]) and $url[3] == "sortByName") {echo "selected"; } ?>>Name</option>
  <option value="sortByGender" <?php if(isset($url[3]) and $url[3] == "sortByGender") {echo "selected"; } ?>>Gender</option>
  </select>

  <script>
  $('.sort').on('change', function() {
    var value = this.value;
    var str = window.location.pathname;
    result = str.split("/");
    location.replace("../../../../list/1/"+ result[3]+"/"+value);
  });
  </script>
  
  <select class="page">
  <option>pages</option>
  <option value="5" <?php if(isset($url[2]) and $url[2] == 5) {echo "selected"; } ?>>5</option>
  <option value="10"<?php if(isset($url[2]) and $url[2] == 10) {echo "selected"; } ?>>10</option>
  <option value="15" <?php if(isset($url[2]) and $url[2] == 15) {echo "selected"; } ?>>15</option>
  <option value="20" <?php if(isset($url[2]) and $url[2] == 20) {echo "selected"; } ?>>20</option>
  </select>
  <script>
  $('.page').on('change', function() {
    var value = this.value;
    location.replace("../../../../list/1/"+value);
  });
  </script>

<script>
$(document).ready(function() {
    $("#search").keyup(function() {
        var txt = $(this).val();
        if(txt != "") {
            $.ajax({
                method:"post",
                data:{query:txt},
                processData:true,
                success:function(data){
                    $("#res").html(data);
                }
            });
        }
    });
});
</script>

  </div>
</body>
</html>

<?php }
?>
