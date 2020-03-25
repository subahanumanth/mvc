<html>
<?php
include("css/areaOfIntrestTable.css");
?>
<h1 style="text-align:center;">Area Of Intrest Table</h1>
<table border='1'  style='border-collapse: collapse; margin-left:540px; width:20%;' id='customers'>
  <tr><td>Area Of Intrest</td> <td>Delete</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
  <tr><td id="data"><?php echo $list[$i]['areaOfIntrest']; ?></td>
<td><a href="../areaOfIntrestTable/<?php echo $list[$i]['id']; ?>" id="del">Delete</a>
</td>
  </tr>
  <?php
}
?>
</table>
  <form method="post">
<input type="submit" name="add" value="Add Area Of Intrest" id="sample">
</form>
</html>
<?php
if(isset($_POST['add'])) {
    ?>
    <html>
    <form method="post">
      <input type="text" placeholder="Area Of Intrest" id="blood" name="bg" /><br>
      <input type="submit" name="submit" value="Submit" id="sample">
    </form>
    </html>
<?php
}
?>
