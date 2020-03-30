<?php
include("./model/connection.php");
$query = "select *from detail where id!=1";
$list = db::showAll($query);
print_r($list);
?>
