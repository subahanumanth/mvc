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
    require("./model/connection.php");
    require("check.php");
    include("./view/check.php");
  }
  public function adminList () {
    require("./model/connection.php");
    require("adminList.php");
    include("./view/adminList.php");
  }
}

?>
