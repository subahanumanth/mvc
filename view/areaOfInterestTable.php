<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Area Of Intrest Table</title>
<?php
include("css/areaOfInterestTable.css");
require("css/util.css");
 ?>
 <div class="topnav">
   <a class="active" href="../bloodGroupTable">Manage Blood Group</a>
   <a href="../areaOfInterestTable">Manage Area Of Interest</a>
   <a href="../detailsOfGraduationTable">Manage Details Of Graduation</a>
   <a href="../../check"><i class="fa fa-home"></i></a>
   <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
   <a href="../logOut"><i class="fa fa-sign-out"></i></a>  </div>
<div class="limiter">

  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h1 style="text-align:center;">Area Of Intrest Table</h1><br><br>

        <table>
          <thead>
            <tr class="table100-head">
              <th class="column1">Area Of Intrest</th>
              <th class="column2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for($i=0;$i<count($list);$i++) {
              ?>
             <tr>
             <td class="column1" id="rem"><?php echo $list[$i]['areaOfInterest']; ?></td>
             <td><a href="../../areaOfInterestTable/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-trash edit"></i></a>
                 <a href="../../areaOfInterestTable/0/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-edit edit"></i></a>
            </td>
             </tr>
           <?php
         }
           ?>
          </tbody>
        </table><br>
        <a href="../../areaOfInterestTable/add" id="a"><input type="submit" name="submit" value="Add" id="sample"></a>
        <?php
        if($url[1] == "add" or isset($url[2])) {
          ?>
          <html>
          <form method="post">
              <input type="text" id="blood" name="bg" value="<?php if(isset($url[2])) {echo $value;} ?>"/><br>
              <input type="submit" name="submit" value="Submit" id="sample">
            </form>
        </html>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
</html>
