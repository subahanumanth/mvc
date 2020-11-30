<?php
session_start();
$rights = 3;
include ("autoload.php");
include (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));
$bloodGroup = new bloodGroup();
$check = check::getInstance();
if(isset($_POST['content'])) {
    $check->postContent ($_SESSION['id'], $_POST['content']);
    exit;
}

if(isset($_POST['id'])) {
    $check->deleteContent ($_POST['id']);
    exit;
}

include ("auth.php");
?>

