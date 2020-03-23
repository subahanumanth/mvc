<?php
class index {
  public function login () {
    require("login.php");
    require("./view/login.php");
  }
  public function check () {
    require("./model/connection.php");
    require("check.php");
    include("./view/check.php");
  }
  public function sample () {
    require("sample.php");
  }
  public function adminList () {
    require("./model/connection.php");
    require("adminList.php");
    include("./view/adminList.php");
  }
}

?>
