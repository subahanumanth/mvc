<?php
include("./model/connection.php");
include("./model/detailsOfGraduationTable.php");

$url = $_GET['url'];
$url = explode('/',$url);
if (isset($url[1])) {
    $detailsOfGraduation->delete($url[1]);
}
if ($url[1] == "add" and isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $detailsOfGraduation->insert($bg);
    header("Location:../detailsOfGraduationTable");
}
if (isset($url[2])) {
  $value = $detailsOfGraduation->find($url[2]);
}
if (isset($_POST['submit']) and isset($url[2])) {
  $detailsOfGraduation->update($url[2],$_POST['bg']);
  header("Location:../detailsOfGraduationTable");
}
$list = $detailsOfGraduation->selectDetailsOfGraduation();
include("./view/detailsOfGraduationTable.php");
?>
