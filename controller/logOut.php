<?php
session_start();
session_destroy();
echo "Your session has expired";
include("./view/login.php");
?>
