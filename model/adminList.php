<?php
class adminList {
  public static $instance;
  public static function getInstance () {
    return adminList::$instance = new adminList();
  }
  private function __construct () {

  }
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
    public function showAllEmail($id) {
      $list = [];
      $conn = db::connection();
      $row = mysqli_query($conn,"select email_id from email where user_id=$id");
      if(mysqli_num_rows($row) > 0) {
          while($rows = mysqli_fetch_assoc($row)) {
              $list[] = $rows['email_id'];
          }
      }
      db::close($conn);
      return implode(',',$list);
    }
    public function showAllMobile($id) {
      $list = [];
      $conn = db::connection();
      $row = mysqli_query($conn,"select mobile from mobile where user_id=$id");
      if(mysqli_num_rows($row) > 0) {
          while($rows = mysqli_fetch_assoc($row)) {
             $list[] = $rows['mobile'];
          }
       }
      db::close($conn);
      return implode(',',$list);
    }

     public function selectName($id) {
       $conn = db::connection();
       $query = "select *from detail where id=$id";
       $row = mysqli_query($conn, $query);
       if(mysqli_num_rows($row) > 0) {
           while($rows = mysqli_fetch_assoc($row)) {
               $firstName = $rows['first_name'];
               $lastName = $rows['last_name'];
           }
        }
        db::close($conn);
        return $firstName." ".$lastName;
     }
     public function showAllBloodGroup($id) {
       $conn = db::connection();
       $query = "select b.blood_group from detail d join blood_group b on d.blood_group = b.id and d.id=$id";
       $row = mysqli_query($conn, $query);
       if(mysqli_num_rows($row) > 0) {
           while($rows = mysqli_fetch_assoc($row)) {
                $bloodGroup = $rows['blood_group'];
           }
        }
        db::close($conn);
        return $bloodGroup;
     }
     public function showAllDetailsOfGraduation($id) {
       $conn = db::connection();
       $query = "select de.details_of_graduation from detail d join details_of_graduation de on d.details_of_graduation=de.id and d.id=$id";
       $row = mysqli_query($conn, $query);
       if(mysqli_num_rows($row) > 0) {
           while($rows = mysqli_fetch_assoc($row)) {
                $dog = $rows['details_of_graduation'];
           }
        }
        db::close($conn);
        return $dog;
     }
     public function showAllAreaOfInterest($id) {
       $conn = db::connection();
       $query = "select ad.area_of_interest from detail d join area_of_interest a on a.user_id=d.id and a.user_id=$id join admin_area_of_interest ad on a.area_of_interest=ad.id";
       $row = mysqli_query($conn, $query);
       if(mysqli_num_rows($row) > 0) {
           while($rows = mysqli_fetch_assoc($row)) {
                $aoi[] = $rows['area_of_interest'];
           }
        }
        db::close($conn);
        $aoi = implode(",",$aoi);
        return $aoi;
     }
}

$adminList = adminList::getInstance();
?>
