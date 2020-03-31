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
        echo "<html><script>alert('inserted');</script></html>";
      } else {
        echo "no";
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
}

$newUser = newUser::getInstance();
?>
