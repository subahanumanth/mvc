<html>
<?php session_start(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="view/js/index.js"></script>
<link rel="stylesheet" href="../../../view/css/table.css">
<link rel="stylesheet" href="../../../view/css/main.css">
<title>Details Of Graduation Table</title>

 <div id="confirm">
    <div class="message"></div><hr class="hr"><br>
    <button class="result">Yes</button>
    <button class="no">No</button>
 </div>
 <div class="topnav">
   <a href="../../list"><i class="fa fa-home"></i></a>
   <a class="active" href="../../manageBloodGroup">Manage Blood Group</a>
   <a href="../../manageAreaOfInterest">Manage Area Of Interest</a>
   <a href="../../manageDetailsOfGraduation">Manage Details Of Graduation</a>
   <a href=""><span class="welcome">Welcome <?php echo $_SESSION['fullName']; ?></span></a>
   <a href="../logOut"><i class="fa fa-sign-out"></i></a>  </div>
<div class="limiter">

  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100">
        <h1 style="text-align:center;">Details Of Graduation Table</h1><br><br>

        <table>
          <thead>
            <tr class="table100-head">
              <th class="column1">Details Of Graduation</th>
              <th class="column2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
for ($i = 0;$i < count($list);$i++)
{
?>
             <tr>
             <td class="column1" id="rem"><?php echo $list[$i]['detailsOfGraduation']; ?></td>
             <td><button id="del" onclick="functionConfirm('Are You Sure?', function yes() {
               location.replace('../../manageDetailsOfGraduation/delete/'+<?php echo $list[$i]['id']; ?>);
             });"><i class="fa fa-trash"></i></button>
                 <a href="../../manageDetailsOfGraduation/update/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-edit edit"></i></a>
            </td>
             </tr>
           <?php
}
?>
          </tbody>
        </table><br>
        <a href="../../../../manageDetailsOfGraduation/add" id="sample"><input type="submit" name="submit" value="Add" id="samp"></a><br>
        <?php
if ($url[1] == "add" or $url[1] == "update")
{
?>
          <html>
          <form method="post">
              <input type="text" id="blood" name="bg" value="<?php if (isset($url[2]))
    {
        echo $value;
    } ?>"/><br>
              <input type="submit" name="submit" value="Submit" id="samp">
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
