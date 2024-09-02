<?php
session_start();
$rights = 3;
include ("autoload.php");
include (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));
$bloodGroup = new bloodGroup();
$check = check::getInstance();
if (isset($_POST['cont']))
{
    $id = $check->postContent($_SESSION['id'], $_POST['cont']);
    exit;
}

if (isset($_POST['id']))
{
    $check->deleteContent($_POST['id']);
    exit;
}
$url = $_GET['url'];
$url = explode('/', $url);
if(isset($url[1])) 
{
    header("Location:".str_replace(".","",dirname($_GET['url'],5))."/error");
}
include ("auth.php");
?>

