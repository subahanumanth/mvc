<html>
<select name="detailsOfGraduation" class="selectdetails bot">
  <option value = "" selected disabled>Select</option>
  <?php
for ($key = 0;$key < count($list);$key++)
{
?>
    <option class="optiond" value = "<?php echo $list[$key]['id']; ?>" <?php if (isset($_POST['submit']) and $_POST['detailsOfGraduation'] == $list[$key]['id'])
    {
        echo "selected";
    }
    if (isset($url[1]) and !isset($_POST['submit']) and $dog == $list[$key]['id'])
    {
        echo "selected";
    } ?>><?php echo $list[$key]['detailsOfGraduation']; ?></option>
  <?php
}
?>
</select>
</html>

