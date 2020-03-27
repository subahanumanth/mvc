<?php
class detailsOfGraduation {
  public static $instance;
  public static function getInstance () {
    return detailsOfGraduation::$instance = new detailsOfGraduation();
  }
  private function __construct () {

  }
  public function insert($bg) {
    $conn = db::connection();
    $insert = "insert into details_of_graduation (details_of_graduation) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectDetailsOfGraduation() {
    $conn = db::connection();
    $i=-1;
    $query = "select *from details_of_graduation";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['detailsOfGraduation'] = $rows['details_of_graduation'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function delete($id) {
    $conn = db::connection();
    $query= "update details_of_graduation set is_deleted = 0 where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
  public function find($id) {
    $conn = db::connection();
    $query= "select details_of_graduation from details_of_graduation where id=$id";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          $list = $rows['details_of_graduation'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function update($id, $value) {
    $conn = db::connection();
    $query= "update details_of_graduation set details_of_graduation = '$value' where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
}
$detailsOfGraduation = detailsOfGraduation::getInstance();
 ?>
