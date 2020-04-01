<?php
class index {
  public function login () {
    require("./view/login.php");
  }
  public function sample () {
    require("sample.php");
  }
  public function check () {
    require("check.php");
  }
  public function adminList () {
    require("adminList.php");
  }
  public function bloodGroupTable () {
    require("bloodGroupTable.php");
  }
  public function areaOfInterestTable () {
    require("areaOfInterestTable.php");
  }
  public function detailsOfGraduationTable () {
    require("detailsOfGraduationTable.php");
  }
  public function logOut () {
    require("logOut.php");
  }
  public function new () {
    require("view/new.php");
  }
}

?>
