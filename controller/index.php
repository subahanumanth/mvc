<?php
class index
{
    public function login()
    {
        require ("./view/login.php");
    }
    public function sample()
    {
        require ("./sample.php");
    }
    public function list()
    {
        require ("check.php");
    }
    public function adminList()
    {
        require ("adminList.php");
    }
    public function manageBloodGroup()
    {
        require ("bloodGroup.php");
    }
    public function manageareaOfInterest()
    {
        require ("areaOfInterest.php");
    }
    public function manageDetailsOfGraduation()
    {
        require ("detailsOfGraduation.php");
    }
    public function logOut()
    {
        require ("logOut.php");
    }
    public function new ()
    {
        require ("new.php");
    }
}

?>
