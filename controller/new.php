<?php
include("./model/connection.php");
include("./model/dropdown.php");
include("./model/new.php");
include("validation.php");
$url = $_GET['url'];
$url = explode("/",$url);
if(isset($url[1])) {
  $id = $url[1];
  $list = $newUser->fetchDetail($id);
  $list['aoi'] = $newUser->fetchAreaOfInterest ($id);
  $list['email'] = $newUser->fetchEmail ($id);
  $list['mobile'] = $newUser->fetchMobile ($id);
  $dob = $list['dob'];
  $gender = $list['gender'];
  $dog = $list['dog'];
  $bg = $list['bg'];
  echo $list['email'];
  print_r($list);
}
include("./view/new.php");
echo var_dump($_POST['date']);

?>
