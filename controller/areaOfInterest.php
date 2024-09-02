<?php
include ("autoload.php");
include ("model/tableAdapter.php");

$list = $table->get("admin_area_of_interest", "area_of_interest", "areaOfInterest");
session_start();
if (isset($_SESSION['name']))
{
    include (sprintf("%s/view/areaOfInterest.php", $_SERVER['DOCUMENT_ROOT']));
}
else
{
    header("Location:login");
} ?>

