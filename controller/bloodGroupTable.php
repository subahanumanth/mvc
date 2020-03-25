<?php
include("./model/connection.php");
include("./model/bloodGroupTable.php");
if(isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $bloodGroup->insert($bg);
}
$url = $_GET['url'];
$url = explode('/',$url);
if(isset($url[1])) {
    $bloodGroup->delete($url[1]);
}
$list = $bloodGroup->selectBloodGroup();
include("./view/bloodGroupTable.php");
?>
