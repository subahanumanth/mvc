<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $lists = check::selectNamePassword($name,$password);
    if ($lists != 0){
        $id = $lists['id'];
        $rights = $lists['rights'];
    }
}
?>
