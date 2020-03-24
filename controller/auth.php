<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    include("session.php");
    $list1 = check::selectNamePassword($name,$password);
    if($list1 != 0){
        $id = $list1['id'];
        $rights = $list1['rights'];
    }
}
 ?>
