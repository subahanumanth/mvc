<html>
<?php
include("css/detailsOfGraduationTable.css");
 ?>
<h1 style="text-align:center;">Details Of Graduation Table</h1>
<table border='1'  style='border-collapse: collapse; margin-left:540px; width:20%;' id='customers'>
  <tr><td>Details Of Graduation</td> <td>Delete</td></tr>
  <?php
  for($i=0;$i<count($list);$i++) {
    ?>
  <tr><td id="data"><?php echo $list[$i]['detailsOfGraduation']; ?></td>
<td><a href="../detailsOfGraduationTable/<?php echo $list[$i]['id']; ?>" id="del">Delete</a>
</td>
  </tr>
  <?php
}
?>
</table>
  <form method="post">
<input type="submit" name="add" value="Add Details Of Graduation" id="sample">
</form>
</html>
<?php
if(isset($_POST['add'])) {
    ?>
    <html>
    <form method="post">
      <input type="text" placeholder="Details Of Graduation" id="blood" name="bg" /><br>
      <input type="submit" name="submit" value="Submit" id="sample">
    </form>
    </html>
<?php
}
?>
