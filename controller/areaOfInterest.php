<?php
include ("autoload.php");
include ("./model/tableAdapter.php");

$list = $table->get("admin_area_of_interest", "area_of_interest", "areaOfInterest");
session_start();
if (isset($_SESSION['name']))
{
    include ($_SERVER['DOCUMENT_ROOT'] . "/view/areaOfInterest.php");
}
else
{
    header("Location:login");
} ?>

