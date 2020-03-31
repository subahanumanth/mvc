<html>
<select name="bloodGroup">
  <option value = "">select</option>
  <?php
  for ($key = 0; $key < count($list); $key++) {
    ?>
    <option value = "<?php echo $list[$key]['id']; ?>" <?php if(isset($_POST['submit']) and $_POST['bloodGroup'] == $list[$key]['id']) { echo "selected"; } ?>><?php echo $list[$key]['bloodGroup']; ?></option>
    <?php
  }
  ?>
</select>
</html>
