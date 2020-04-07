<?php
session_start();
$a=1;
include("./model/connection.php");
include("./model/dropdown.php");
include("./model/new.php");
$url = $_GET['url'];
$url = explode("/",$url);
if(isset($url[1]) and isset($_SESSION['name'])) {
  $id = $url[1];
  $list = $newUser->fetchDetail($id);
  $list['aoi'] = $newUser->fetchAreaOfInterest ($id);
  $list['email'] = $newUser->fetchEmail ($id);
  $list['mobile'] = $newUser->fetchMobile ($id);
  $dob = $list['dob'];
  $gender = $list['gender'];
  $dog = $list['dog'];
  $bg = $list['bg'];
  $aoi = $list['aoi'];
  $profile = $list['profilePicture'];
  $password = $list['password'];
}
include("validation.php");
include("./view/new.php");


?>
