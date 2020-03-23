<?php
class db {
  public static function connection () {
    return mysqli_connect("localhost","root","Hanu@1234","Data");
  }
  public static function close ($conn) {
    return mysqli_close($conn);
  }
  public static function fetchDetail ($query) {
    $list = [];
    $row = mysqli_query(self::connection(),$query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $list['id'] = $rows['id'];
        $list['first_name'] = $rows['first_name'];
        $list['last_name'] = $rows['last_name'];
        $list['date_of_birth'] = $rows['date_of_birth'];
        $list['details_of_graduation'] = $rows['details_of_graduation'];
        $list['blood_group'] = $rows['blood_group'];
        $list['gender'] = $rows['gender'];
        $list['profile_picture'] = $rows['profile_picture'];
        $list['rights'] = $rows['rights'];
      }
    }
    self::close(self::connection());
    return $list;
  }
  public function showAllDetail ($query) {
    $row = mysqli_query(self::connection(),$query);
    $i=0;
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
    self::close(self::connection());
    return $list;
  }
  public static function fetchEmail ($query) {
    $list = [];
    $row = mysqli_query(self::connection(),$query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          array_push($list, $rows['email_id']);
      }
    }
    $list= implode(",",$list);
    self::close(self::connection());
    return $list;
  }
  public function showAllEmail ($query) {
    $row = mysqli_query(self::connection(),$query);
    $i=0;
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $i++;
        $listEmail[$i]['id'] = $rows['user_id'];
        $listEmail[$i]['email'] = $rows['email_id'];
      }
    }
    self::close(self::connection());
    return $listEmail;
  }

  public static function fetchMobile ($query) {
    $list = [];
    $row = mysqli_query(self::connection(),$query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          array_push($list, $rows['mobile_no']);
      }
    }
    $list= implode(",",$list);
    self::close(self::connection());
    return $list;
  }
  public static function fetchAreaOfIntrest ($query) {
    $list = [];
    $row = mysqli_query(self::connection(),$query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
          array_push($list, $rows['area_of_intrest']);
      }
    }
    $list= implode(",",$list);
    self::close(self::connection());
    return $list;
  }
}
 ?>
