<?php
include("./model/connection.php");
include("./model/bloodGroupTable.php");

$url = $_GET['url'];
$url = explode('/',$url);
if (isset($url[1]) and !isset($url[2])) {
  $bloodGroup->delete($url[1]);
}
if ($url[1] == "add" and isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $bloodGroup->insert($bg);
    header("Location:../bloodGroupTable");
}
if (isset($url[2])) {
  $value = $bloodGroup->find($url[2]);
}
if (isset($_POST['submit']) and isset($url[2])) {
  $bloodGroup->update($url[2],$_POST['bg']);
  header("Location:../bloodGroupTable");
}
$list = $bloodGroup->selectBloodGroup();
session_start();
if(isset($_SESSION['name'])) {
    include("./view/bloodGroupTable.php");
} else {
  header("Location:login");
}
?>
