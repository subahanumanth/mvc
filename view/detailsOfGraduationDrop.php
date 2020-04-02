<html>
<select name="detailsOfGraduation">
  <option value = "" selected disabled>Details Of Graduation</option>
  <?php
  for ($key = 0; $key < count($list); $key++) {
    ?>
    <option value = "<?php echo $list[$key]['id']; ?>" <?php if(isset($_POST['submit']) and $_POST['detailsOfGraduation'] == $list[$key]['id']) { echo "selected"; } if(isset($url[1]) and $dog == $list[$key]['id']) {echo "selected";} ?>><?php echo $list[$key]['detailsOfGraduation']; ?></option>
    <?php
  }
  ?>
</select>
</html>
