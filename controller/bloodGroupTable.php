<?php
include ("./model/connection.php");
require ("./model/bloodGroupTable.php");
include ("./model/bloodGroupAdapter.php");
$url = $_GET['url'];
$url = explode('/', $url);
if ($url[1] == "delete" and isset($url[2]))
{
    $bloodGroup->delete($url[2]);
    header("Location:../../manageBloodGroup");
}
if ($url[1] == "add" and isset($_POST['submit']))
{
    $bg = $_POST['bg'];
    $bloodGroup->insert($bg);
    header("Location:../manageBloodGroup");
}
if (isset($url[2]))
{
    $value = $bloodGroup->find($url[2]);
}
if (isset($_POST['submit']) and $url[1] == "update" and isset($url[2]))
{
    $bloodGroup->update($url[2], $_POST['bg']);
    header("Location:../../manageBloodGroup");
}
$list = $bloodGroup->select();
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/bloodGroupTable.php");
}
else
{
    header("Location:login");
}
?>
