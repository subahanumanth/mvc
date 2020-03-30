<?php
class db {
  public static $instance;
  public static function getInstance () {
    return db::$instance = new db();
  }
  private function __construct () {

  }
  public function connection () {
    $conn =  mysqli_connect("localhost","hanu","1234","profile");
    return $conn;
  }
  public function close ($conn) {
    return mysqli_close($conn);
  }
}

$db = db::getInstance();

 ?>
