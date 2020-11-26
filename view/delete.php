<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/controller/autoload.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/table.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/model/tableAdapter.php");

$adminList = adminList::getInstance();
if (isset($_POST['query']))
{
    if ($_POST['page'] == "/list")
    {
        $id = $_POST['query'];
        $status = $adminList->delete($id);
        if ($status == "true")
        {
            echo $status;
        }
        else
        {
            echo $status;
        }
    }
    if ($_POST['page'] == "/manageBloodGroup")
    {
        $id = $_POST['query'];
        if ($table->check($id, "blood_group"))
        {
            echo "Fail";
        }
        else
        {
            $table->delete($id, "blood_group");
            echo "success";
        }
    }
    if ($_POST['page'] == "/manageDetailsOfGraduation")
    {
        $id = $_POST['query'];
        if ($table->check($id, "details_of_graduation"))
        {
            echo "Fail";
        }
        else
        {
            $table->delete($id, "details_of_graduation");
            echo "success";
        }
    }
    if ($_POST['page'] == "/manageAreaOfInterest")
    {
        $id = $_POST['query'];
        if ($table->checkArea($id))
        {
            echo "Fail";
        }
        else
        {
            $table->delete($id, "admin_area_of_interest");
            echo "success";
        }
    }
}
?>

