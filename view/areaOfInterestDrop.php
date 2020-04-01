<html>
<select name="areaOfInterest[]" multiple>
  <option value = "" select disabled>Area Of Interest</option>
  <?php
  for ($key = 0; $key < count($list); $key++) {
    ?>
    <option class="s" value = "<?php echo $list[$key]['id']; ?>" <?php if(in_array($list[$key]['id'],$_POST['areaOfInterest'])) {echo "selected";} ?>><?php echo $list[$key]['areaOfInterest']; ?></option>
    <?php
  }
  ?>
</select>
</html>
