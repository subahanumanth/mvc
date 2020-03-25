<?php
class db {
  public static function connection () {
    return mysqli_connect("localhost","root","Hanu@1234","Data");
  }
  public static function close ($conn) {
    return mysqli_close($conn);
  }
}
 ?>
