<?php
session_start();
$rights = 3;
include ("autoload.php");
include (sprintf("%s/model/dropdown.php", $_SERVER['DOCUMENT_ROOT']));
include (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));
$bloodGroup = new bloodGroup();
$check = check::getInstance();
include ("auth.php");
?>

