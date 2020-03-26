<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include("css/areaOfInterestTable.css");
 ?>
<h1 style="text-align:center;">Area Of Interest Table</h1>
<table border='1'  style='border-collapse: collapse; margin-left:540px; width:20%;' id='customers'>
  <tr><td>Area Of Interest</td> <td>Delete</td><td>Update</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
  <tr><td id="data"><?php echo $list[$i]['areaOfInterest']; ?></td>
<td><a href="../../areaOfInterestTable/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-trash edit"></i></a>
<td><a href="../../areaOfInterestTable/0/<?php echo $list[$i]['id']; ?>" id="del"><i class="fa fa-edit edit"></i></a>
</td>
  </tr>
  <?php
}
?>
</table><br>
<a href="../../areaOfInterestTable/add" id="a">Add Area Of Interest</a>
</html>

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
