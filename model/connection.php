<?php
class db {
  public static $instance;
  public static function getInstance () {
    return db::$instance = new db();
  }
  private function __construct () {

  }
  public function connection () {
    $conn =  mysqli_connect("localhost","root","Hanu@1234","Data");
    return $conn;
  }
  public function close ($conn) {
    return mysqli_close($conn);
  }
}

$db = db::getInstance();

 ?>
