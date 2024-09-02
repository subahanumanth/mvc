<?php
include ("autoload.php");
include_once (sprintf("%s/model/dropdown.php", $_SERVER['DOCUMENT_ROOT']));
include_once (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));

$url = $_GET['url'];
$url = explode('/', $url);

$adminList = adminList::getInstance();

$_SESSION['fullName'] = $adminList->selectName($_SESSION['id']);

if(isset($url[1])) 
{
    header("Location:".str_replace(".","",dirname($_GET['url'],5))."/error");
}
require ("./view/adminList.php");
echo str_replace(".","",dirname($_GET['url'],5));
?>

