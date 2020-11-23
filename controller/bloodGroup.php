<?php
include ("autoload.php");
include ("./model/table.php");
include ("./model/tableAdapter.php");

$list = $table->get("blood_group", "blood_group", "bloodGroup");
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/bloodGroup.php");
}
else
{
    header("Location:login");
}

?>
