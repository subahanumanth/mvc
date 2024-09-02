<?php
session_start();
session_destroy();
include (sprintf("%s/view/login.php", $_SERVER['DOCUMENT_ROOT']));
?>

