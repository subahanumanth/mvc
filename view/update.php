<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/controller/autoload.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/table.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/tableAdapter.php");

if ($_POST['page'] == "/manageBloodGroup")
{
    if (isset($_POST['query']))
    {
        $bg = $_POST['query'];
        if ($table->save($bg, "blood_group", "blood_group"))
        {
            echo "success";
        }
    }
    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "blood_group", "blood_group");
    }
}

if ($_POST['page'] == "/manageDetailsOfGraduation")
{
    if (isset($_POST['query']))
    {
        $bg = $_POST['query'];
        if ($table->save($bg, "details_of_graduation", "details_of_graduation"))
        {
            echo "success";
        }
    }
    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "details_of_graduation", "details_of_graduation");
    }
}

if ($_POST['page'] == "/manageAreaOfInterest")
{
    if (isset($_POST['query']))
    {
        $bg = $_POST['query'];
        if ($table->save($bg, "admin_area_of_interest", "area_of_interest"))
        {
            echo "success";
        }
    }
    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "admin_area_of_interest", "area_of_interest");
    }
}


