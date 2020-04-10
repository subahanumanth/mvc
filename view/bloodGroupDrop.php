<html>
<select name="bloodGroup" class="selectd bot">
  <option value = "" selected disabled>Select</option>
  <?php
for ($key = 0;$key < count($list);$key++)
{
?>
    <option class="c" value = "<?php echo $list[$key]['id']; ?>" <?php if (isset($_POST['submit']) and $_POST['bloodGroup'] == $list[$key]['id'])
    {
        echo "selected";
    }
    if (isset($url[1]) and !isset($_POST['submit']) and $bg == $list[$key]['id'])
    {
        echo "selected";
    } ?>><?php echo $list[$key]['bloodGroup']; ?></option>
    <?php
}
?>
</select>
</html>
