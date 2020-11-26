<?php
include ("autoload.php");
include ("./model/tableAdapter.php");

$list = $table->get("details_of_graduation", "details_of_graduation", "detailsOfGraduation");
session_start();
if (isset($_SESSION['name']))
{
    include ($_SERVER['DOCUMENT_ROOT'] . "/view/detailsOfGraduation.php");
}
else
{
    header("Location:login");
}
?>

