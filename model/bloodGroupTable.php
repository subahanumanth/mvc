<?php
class bloodGroup {
  public function insert($bg) {
    $conn = db::connection();
    $insert = "insert into blood_group (blood_group) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectBloodGroup() {
    $conn = db::connection();
    $i=-1;
    $query = "select *from blood_group";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['bloodGroup'] = $rows['blood_group'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function delete($id) {
    $conn = db::connection();
    $query= "delete blood_group from blood_group where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
}
$bloodGroup = new bloodGroup();
 ?>
