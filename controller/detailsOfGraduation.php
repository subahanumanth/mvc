<?php
include ("autoload.php");
include ("model/tableAdapter.php");

$list = $table->get("details_of_graduation", "details_of_graduation", "detailsOfGraduation");
session_start();
if (isset($_SESSION['name']))
{
    include (sprintf("%s/view/detailsOfGraduation.php", $_SERVER['DOCUMENT_ROOT']));
}
else
{
    header("Location:login");
}
?>

