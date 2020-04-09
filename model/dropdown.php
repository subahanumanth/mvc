<?php
class dropdown {
  public function bloodGroup () {
    $i = -1;
    $conn = db::connection ();
    $query = "select *from blood_group where is_deleted=1";
    $row = mysqli_query ($conn, $query);
    if(mysqli_num_rows ($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['bloodGroup'] = $rows['blood_group'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function detailsOfGraduation () {
    $i = -1;
    $conn = db::connection ();
    $query = "select *from details_of_graduation where is_deleted = 1";
    $row = mysqli_query ($conn, $query);
    if(mysqli_num_rows ($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['detailsOfGraduation'] = $rows['details_of_graduation'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function areaOfInterest () {
    $i = -1;
    $conn = db::connection ();
    $query = "select *from admin_area_of_interest where is_deleted=1";
    $row = mysqli_query ($conn, $query);
    if(mysqli_num_rows ($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i]['id'] = $rows['id'];
        $list[$i]['areaOfInterest'] = $rows['area_of_interest'];
      }
    }
    db::close($conn);
    return $list;
  }
}
