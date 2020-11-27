<?php
include ("autoload.php");
include ("model/tableAdapter.php");

$list = $table->get("blood_group", "blood_group", "bloodGroup");
session_start();
if (isset($_SESSION['name']))
{
    include (sprintf("%s/view/bloodGroup.php", $_SERVER['DOCUMENT_ROOT']));
}
else
{
    header("Location:login");
}

?>

