
<?php
$id =  $_GET['id'];
echo $id;
$query = "select *from detail";
$list = db::showAllDetail($query);
$query = "select *from email";
$listEmail = db::showAllEmail($query);
print_r($listEmail);
?>
