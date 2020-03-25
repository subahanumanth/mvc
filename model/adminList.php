<?php
class adminList {
  public function showAllDetail ($id) {
      $conn = db::connection();
      $row = mysqli_query($conn,"select *from detail where id != $id");
      $i=-1;
      if(mysqli_num_rows($row) > 0) {
        while($rows = mysqli_fetch_assoc($row)) {
          $i++;
          $list[$i]['id'] = $rows['id'];
          $list[$i]['firstName']= $rows['first_name'];
          $list[$i]['lastName'] = $rows['last_name'];
          $list[$i]['dateOfBirth'] = $rows['date_of_birth'];
          $list[$i]['detailsOfGraduation'] = $rows['details_of_graduation'];
          $list[$i]['bloodGroup'] = $rows['blood_group'];
          $list[$i]['gender'] = $rows['gender'];
          $list[$i]['profilePicture'] = $rows['profile_picture'];
          $list[$i]['rights'] = $rows['rights'];
        }
      }
      db::close($conn);
      return $list;
    }
    public function distinct($id) {
      $list = [];
      $conn = db::connection();
      $row = mysqli_query($conn," select distinct(user_id) from email where user_id != $id");
      if(mysqli_num_rows($row) > 0) {
        while($rows = mysqli_fetch_assoc($row)) {
          array_push($list, $rows['user_id']);
        }
      }
      db::close($conn);
      return $list;
    }
    public function showAllEmail($values) {
      $list = [];
      $conn = db::connection();
      for($i=0;$i<count($values);$i++) {
          $row = mysqli_query($conn," select email_id from email where user_id=$values[$i]");
          if(mysqli_num_rows($row) > 0) {
              while($rows = mysqli_fetch_assoc($row)) {
                  $list[$values[$i]][] = $rows['email_id'];
              }
           }
      }
      db::close($conn);
      return $list;
    }
    public function showAllMobile($values) {
      $list = [];
      $conn = db::connection();
      for($i=0;$i<count($values);$i++) {
          $row = mysqli_query($conn," select mobile_no from mobile where user_id=$values[$i]");
          if(mysqli_num_rows($row) > 0) {
              while($rows = mysqli_fetch_assoc($row)) {
                  $list[$values[$i]][] = $rows['mobile_no'];
              }
           }
      }
      db::close($conn);
      return $list;
    }
    public function showAllAreaOfIntrest($values) {
      $list = [];
      $conn = db::connection();
      for($i=0;$i<count($values);$i++) {
          $row = mysqli_query($conn,"select area_of_intrest from  area_of_intrest1 where user_id=$values[$i]");
          if(mysqli_num_rows($row) > 0) {
              while($rows = mysqli_fetch_assoc($row)) {
                  $list[$values[$i]][] = $rows['area_of_intrest'];
              }
           }
      }
      db::close($conn);
      return $list;
    }
    public function showName($id) {
      $conn = db::connection();
      $row = mysqli_query($conn, "select first_name,last_name from detail where id=$id");
      if(mysqli_num_rows($row) > 0) {
          while($rows = mysqli_fetch_assoc($row)) {
              $listName[] = $rows['first_name'];
              $listName[] = $rows['last_name'];
          }
       }
       db::close($conn);
       return implode(' ',$listName);
     }
}

$adminList = new adminList();
?>
