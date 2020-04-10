<?php
include ("./model/connection.php");
include ("./model/detailsOfGraduationTable.php");

$url = $_GET['url'];
$url = explode('/', $url);
if ($url[1] == "delete" and isset($url[2]))
{
    $detailsOfGraduation->delete($url[2]);
    header("Location:../../manageDetailsOfGraduation");
}
if ($url[1] == "add" and isset($_POST['submit']))
{
    $bg = $_POST['bg'];
    $detailsOfGraduation->insert($bg);
    header("Location:../manageDetailsOfGraduation");
}
if (isset($url[2]))
{
    $value = $detailsOfGraduation->find($url[2]);
}
if (isset($_POST['submit']) and $url[1] == "update" and isset($url[2]))
{
    $detailsOfGraduation->update($url[2], $_POST['bg']);
    header("Location:../../manageDetailsOfGraduation");
}
$list = $detailsOfGraduation->selectBloodGroup();
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/detailsOfGraduationTable.php");
}
else
{
    header("Location:login");
}
?>
