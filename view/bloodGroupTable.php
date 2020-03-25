<html>
<?php
include("css/bloodGroupTable.css");
 ?>
<h1 style="text-align:center;">Blood Group Table</h1>
<table border='1'  style='border-collapse: collapse; margin-left:540px; width:20%;' id='customers'>
  <tr><td>Blood Group</td> <td>Delete</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
  <tr><td id="data"><?php echo $list[$i]['bloodGroup']; ?></td>
<td><a href="../bloodGroupTable/<?php echo $list[$i]['id']; ?>" id="del">Delete</a>
</td>
  </tr>
  <?php
}
?>
</table>
  <form method="post">
<input type="submit" name="add" value="Add Blood Group" id="sample">
</form>
</html>
<?php
if(isset($_POST['add'])) {
    ?>
    <html>
    <form method="post">
      <input type="text" placeholder="Blood Group" id="blood" name="bg" /><br>
      <input type="submit" name="submit" value="Submit" id="sample">
    </form>
    </html>
<?php
}
?>
