<?php
$rights = 3;
include("./model/connection.php");
include("./model/check.php");
include("auth.php");

if ($rights == 1) {
    header("Location:adminList/$id");
} elseif ($rights == 0) {
    $list = $check->select($id);
    $listEmail = $check->selectEmail($id);
    $listMobile = $check->selectMobile($id);
    $listAreaOfIntrest = $check->selectAreaOfIntrest($id);
    include("./view/check.php");
} else {
    header("Location:login/1");
  }
?>
