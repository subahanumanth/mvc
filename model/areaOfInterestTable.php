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
    $insert = "insert into admin_area_of_interest (area_of_interest) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectBloodGroup() {
    $conn = db::connection();
    $i=-1;
    $query = "select * from admin_area_of_interest where is_deleted = 1";
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
    $query= "update admin_area_of_interest set is_deleted = 0 where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
  public function find($id) {
    $conn = db::connection();
    $query= "select * from admin_area_of_interest where id=$id";
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
    $query= "update admin_area_of_interest set area_of_interest = '$value' where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
}
$areaOfInterest = areaOfInterest::getInstance();
 ?>
