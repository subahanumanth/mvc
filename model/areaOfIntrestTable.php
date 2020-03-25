<?php
class areaOfIntrest {
  public function insert($bg) {
    $conn = db::connection();
    $insert = "insert into area_of_intrest (area_of_intrest) values('$bg')";
    mysqli_query($conn, $insert);
    db::close($conn);
  }
  public function selectAreaOfIntrest() {
    $conn = db::connection();
    $i=-1;
    $query = "select *from area_of_intrest";
    $row = mysqli_query($conn, $query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['areaOfIntrest'] = $rows['area_of_intrest'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function delete($id) {
    $conn = db::connection();
    $query= "delete area_of_intrest from area_of_intrest where id=$id";
    mysqli_query($conn, $query);
    db::close($conn);
  }
}
$areaOfIntrest = new areaOfIntrest();
 ?>
