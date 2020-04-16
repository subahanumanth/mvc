<?php
if ($page == "areaOfInterest")
{
    $list = $dropdown->areaOfInterest();
    include ("./view/areaOfInterestDrop.php");
}

if ($page == "bloodGroup")
{
    $list = $dropdown->bloodGroup();
    include ("./view/bloodGroupDrop.php");
}

if ($page == "detailsOfGraduation")
{
    $list = $dropdown->detailsOfGraduation ();
    include("./view/detailsOfGraduationDrop.php");
}
