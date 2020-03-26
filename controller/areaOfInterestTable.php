<?php
include("./model/connection.php");
include("./model/areaOfInterestTable.php");

$url = $_GET['url'];
$url = explode('/',$url);
if (isset($url[1])) {
    $areaOfInterest->delete($url[1]);
}
if ($url[1] == "add" and isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $areaOfInterest->insert($bg);
    header("Location:../areaOfInterestTable");
}
if (isset($url[2])) {
  $value = $areaOfInterest->find($url[2]);
}
if (isset($_POST['submit']) and isset($url[2])) {
  $areaOfInterest->update($url[2],$_POST['bg']);
  header("Location:../areaOfInterestTable");
}
$list = $areaOfInterest->selectAreaOfInterest();
include("./view/areaOfInterestTable.php");
?>
