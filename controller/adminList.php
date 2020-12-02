<?php
include ("autoload.php");
include_once (sprintf("%s/model/dropdown.php", $_SERVER['DOCUMENT_ROOT']));
include_once (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));

$url = $_GET['url'];
$url = explode('/', $url);

$adminList = adminList::getInstance();

$_SESSION['fullName'] = $adminList->selectName($_SESSION['id']);

if ($url[1] == "update" and isset($url[2]))
{
    header("Location:../../new/$url[2]");
}

require ("./view/adminList.php");

?>

