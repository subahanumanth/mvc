<?php

class newUser {
  public static $instance;
  public static function getInstance () {
    return newUser::$instance = new newUser();
  }
  private function __construct () {

  }
  public function insertDetail ($detail) {
     $conn = db::connection ();
     $fname = $detail['firstName'];
     $lname = $detail['lastName'];
     $dob = $detail['date'];
     $dog = $detail['detailsOfGraduation'];
     $bg = $detail['bloodGroup'];
     $gender = $detail['gender'];
     $profile = $detail['profilePicture'];
     $password = password_hash($detail['password'],PASSWORD_DEFAULT);
     $query = "insert into detail (first_name,last_name,date_of_birth,details_of_graduation,blood_group,gender,profile_picture,password,rights)
      values('$fname','$lname','$dob',$dog,$bg,'$gender','$profile','$password',0);";
     if(mysqli_query($conn ,$query)) {
       header("Location:./login");
     }
     db::close($conn);
  }
  public function fetchid () {
    $conn = db::connection ();
    $query = "select id from detail order by id desc limit 1";
    $row = mysqli_query($conn ,$query);
    if(mysqli_num_rows($row) > 0) {
      while($rows = mysqli_fetch_assoc($row)) {
        $id = $rows['id'];
      }
    }
    db::close($conn);
    return $id;
  }
  public function insertEmail ($id, $email) {
     $conn = db::connection ();
     for($key = 0;$key < count($email);$key++) {
         $query = "insert into email (user_id,email_id) values($id,'$email[$key]')";
         mysqli_query($conn, $query);
     }
     db::close($conn);
  }
  public function insertMobile ($id, $mobile) {
     $conn = db::connection ();
     for($key = 0;$key < count($mobile);$key++) {
         $query = "insert into mobile (user_id,mobile) values($id,'$mobile[$key]')";
         mysqli_query($conn, $query);
     }
     db::close($conn);
  }
  public function insertAreaOfInterest ($id, $areaOfInterest) {
     $conn = db::connection ();
     for($key = 0;$key < count($areaOfInterest);$key++) {
         $query = "insert into area_of_interest (user_id,area_of_interest) values($id,'$areaOfInterest[$key]')";
         mysqli_query($conn, $query);
     }
     db::close($conn);
  }
  public function fetchDetail ($id) {
    $conn = db::connection();
    $list=[];
    $row = mysqli_query($conn, "select *from detail where id=$id");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $list['fname'] = $rows['first_name'];
        $list['lname'] = $rows['last_name'];
        $list['dob'] = $rows['date_of_birth'];
        $list['dog'] = $rows['details_of_graduation'];
        $list['bg'] = $rows['blood_group'];
        $list['gender'] = $rows['gender'];
      }
    }
    db::close($conn);
    return $list;
  }
  public function fetchEmail ($id) {
    $conn = db::connection();
    $i = -1;
    $row = mysqli_query($conn, "select *from email where user_id=$id");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i] = $rows['email_id'];
      }
    }
    return $list;
  }
  public function fetchMobile ($id) {
    $conn = db::connection();
    $i = -1;
    $row = mysqli_query($conn, "select *from mobile where user_id=$id");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i] = $rows['mobile'];
      }
    }
    return $list;
  }
  public function fetchBloodGroup ($id) {
    $conn = db::connection();
    $i = -1;
    $row = mysqli_query($conn, "select *from blood_group where id=$id");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $list = $rows['blood_group'];
      }
    }
    return $list;
  }
  public function fetchDetailsOfGraduation ($id) {
    $conn = db::connection();
    $i = -1;
    $row = mysqli_query($conn, "select *from details_of_graduation where id=$id");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $list = $rows['details_of_graduation'];
      }
    }
    return $list;
  }
  public function fetchAreaOfInterest ($id) {
    $conn = db::connection();
    $i = -1;
    $row = mysqli_query($conn, "select ad.area_of_interest from detail d join area_of_interest a on d.id=a.user_id and a.user_id=$id join admin_area_of_interest ad on a.area_of_interest = ad.id;");
    if(mysqli_num_rows($row) > 0) {
      while ($rows = mysqli_fetch_assoc ($row)) {
        $i++;
        $list[$i] = $rows['area_of_interest'];
      }
    }
    return $list;
  }
}

$newUser = newUser::getInstance();
?>
