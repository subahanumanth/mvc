<?php
include("./model/connection.php");
include("./model/areaOfIntrestTable.php");
if(isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $areaOfIntrest->insert($bg);
}
$url = $_GET['url'];
$url = explode('/',$url);
if(isset($url[1])) {
    $areaOfIntrest->delete($url[1]);
}
$list = $areaOfIntrest->selectAreaOfIntrest();
include("./view/areaOfIntrestTable.php");
?>
