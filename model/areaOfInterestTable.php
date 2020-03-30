<?php
class areaOfInterest {
  public static $instance;
  public static function getInstance () {
    return areaOfInterest::$instance = new areaOfInterest();
  }
  private function __construct () {

  }
  public function insert($bg) {
    $conn = db::connection();
    $insert = "insert into area_of_interest_drop (area_of_interest) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectBloodGroup() {
    $conn = db::connection();
    $i=-1;
    $query = "select * from area_of_interest_drop";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['areaOfInterest'] = $rows['area_of_interest'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function delete($id) {
    $conn = db::connection();
    $query= "update area_of_interest_drop set is_deleted = 0 where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
  public function find($id) {
    $conn = db::connection();
    $query= "select * from area_of_interest_drop where id=$id";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          $list = $rows['area_of_interest'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function update($id, $value) {
    $conn = db::connection();
    $extract = "select * from area_of_interest_drop where id=$id";
    $row = mysqli_query($conn, $extract);
    if (mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc($row)) {
        $bg = $rows['area_of_interest'];
      }
    }
    $query= "update area_of_interest_drop set area_of_interest = '$value' where id=$id";
    mysqli_query($conn, $query);
    $update = "update area_of_interest set area_of_interest = '$value' where area_of_interest = '$bg'";
    mysqli_query($conn, $update);
    db::close($conn);
  }
}
$areaOfInterest = areaOfInterest::getInstance();
 ?>
