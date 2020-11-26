<?php
session_start();
session_destroy();
include ($_SERVER['DOCUMENT_ROOT'] . "/view/login.php");
?>

