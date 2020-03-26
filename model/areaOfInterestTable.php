<?php
class areaOfInterest {
  public function insert($bg) {
    $conn = db::connection();
    $insert = "insert into area_of_intrest (area_of_intrest) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectAreaOfInterest() {
    $conn = db::connection();
    $i=-1;
    $query = "select *from area_of_intrest";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['areaOfInterest'] = $rows['area_of_intrest'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function delete($id) {
    $conn = db::connection();
    $query= "update area_of_intrest set is_deleted = 0 where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
  public function find($id) {
    $conn = db::connection();
    $query= "select area_of_intrest from area_of_intrest where id=$id";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          $list = $rows['area_of_intrest'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function update($id, $value) {
    $conn = db::connection();
    $query= "update area_of_intrest set area_of_intrest = '$value' where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
}
$areaOfInterest = new areaOfInterest();
 ?>
