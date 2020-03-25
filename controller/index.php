<?php
class index {
  public function login () {
    require("./view/css/main.css");
    require("./view/css/util.css");
    require("./view/login.php");
  }
  public function sample () {
    require("./view/sample.css");
    require("./view/sample.php");
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
  public function areaOfIntrestTable () {
    require("areaOfIntrestTable.php");
  }
  public function detailsOfGraduationTable () {
    require("detailsOfGraduationTable.php");
  }
}

?>
