<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="view/js/index.js"></script>
<link rel="stylesheet" href="../../../view/css/areaOfInterestTable.css">
<link rel="stylesheet" href="../../../view/css/util.css">
<title>Area Of Interest Table</title>

 <div id="confirm">
    <div class="message"></div><hr class="hr"><br>
    <button class="yes">Yes</button>
    <button class="no">No</button>
 </div>
 <div class="topnav">
   <a href="../../list"><i class="fa fa-home"></i></a>
   <a class="active" href="../../manageBloodGroup">Manage Blood Group</a>
   <a href="../../manageareaOfInterest">Manage Area Of Interest</a>
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
             <tr>
             <td class="column1" id="rem"><?php echo $list[$i]['areaOfInterest']; ?></td>
             <td><button id="del" onclick="functionConfirm('Are You Sure?', function yes() {
               location.replace('../../manageareaOfInterest/delete/'+<?php echo $list[$i]['id']; ?>);
             });"><i class="fa fa-trash"></i></button>
                 <a href="../../manageareaOfInterest/update/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-edit edit"></i></a>
            </td>
             </tr>
           <?php
}
?>
          </tbody>
        </table><br>
        <a href="../../../../manageareaOfInterest/add" id="sample"><input type="submit" name="submit" value="Add" id="samp"></a><br>
        <?php
if ($url[1] == "add" or $url[1] == "update")
{
?>
          <form method="post">
              <input type="text" id="blood" name="bg" value="<?php if (isset($url[2]) and $url[1] == "update")
    {
        echo $value;
    } ?>"/><br>
              <input type="submit" name="submit" value="Submit" id="samp">
            </form>
        <?php
}
?>
      </div>
    </div>
  </div>
</div>

</html>
