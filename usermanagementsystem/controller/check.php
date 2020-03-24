<?php
$rights=5;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    include("session.php");
    $query = "select * from detail where first_name='$name' and password='$password'";
    $list = db::fetchDetail($query);
    $id = $list['id'];
    $rights = $list['rights'];
}

if($rights == 1) {
    header("Location:adminList");
} elseif($rights == 0) {
    $query = "select *from detail where id=$id";
    $list = db::fetchDetail($query);
    $query = "select email_id from email where user_id=$id";
    $listEmail = db::fetchEmail($query);
    $query = "select mobile_no from mobile where user_id=$id";
    $listMobile = db::fetchMobile($query);
    $query = "select area_of_intrest from area_of_intrest1 where user_id=$id";
    $listAreaOfIntrest = db::fetchAreaOfIntrest($query);
} else {
    echo "user not exist";
}
?>
