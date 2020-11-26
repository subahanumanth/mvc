<?php
session_start();
$rights = 3;
include ("autoload.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/dropdown.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/commandPattern.php");
$bloodGroup = new bloodGroup();
$check = check::getInstance();
include ("auth.php");
?>

