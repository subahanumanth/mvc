<?php
include ("./model/connection.php");
include ("./model/areaOfInterestTable.php");

$url = $_GET['url'];
$url = explode('/', $url);
if ($url[1] == "delete" and isset($url[2]))
{
    $areaOfInterest->delete($url[2]);
    header("Location:../../manageareaOfInterest");
}
if ($url[1] == "add" and isset($_POST['submit']))
{
    $bg = $_POST['bg'];
    $areaOfInterest->insert($bg);
    header("Location:../manageareaOfInterest");
}
if (isset($url[2]))
{
    $value = $areaOfInterest->find($url[2]);
}
if (isset($_POST['submit']) and isset($url[2]) and $url[1] == "update")
{
    $areaOfInterest->update($url[2], $_POST['bg']);
    header("Location:../../manageareaOfInterest");
}
$list = $areaOfInterest->selectBloodGroup();
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/areaOfInterestTable.php");
}
else
{
    header("Location:login");
} ?>
