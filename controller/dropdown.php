<?php

if ($page == "areaOfInterest")
{
    $list = $areaOfInterest->dropdown();
    include ("./view/selectAreaOfInterest.php");
}

elseif ($page == "bloodGroup")
{
    $list = $bloodGroup->dropdown();
    include ("./view/selectBloodGroup.php");
}

elseif ($page == "detailsOfGraduation")
{
    $list = $detailsOfGraduation->dropdown ();
    include("./view/selectDetailsOfGraduation.php");
}
