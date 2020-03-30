<?php
if(isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
    $lists = $check->selectNamePassword($_SESSION['name'],$_SESSION['password']);
        $name = $lists['first_name']." ".$lists['last_name'];
        $id = $lists['id'];
        $rights = $lists['rights'];
        if($rights == 1) {
          include("adminList.php");
        } else if($rights == 0 and isset($id)) {
              $list = $check->select($id);
              $listEmail = $check->selectEmail($id);
              $listMobile = $check->selectMobile($id);
              $listAreaOfIntrest = $check->selectAreaOfInterest($id);
              include("./view/check.php");
        } else if(empty($rights)) {
          header("Location:login/1");
        }
} else {
      $lists = $check->selectNamePassword($_SESSION['name'],$_SESSION['password']);
      $name = $lists['first_name']." ".$lists['last_name'];
      $id = $lists['id'];
      $rights = $lists['rights'];
      if($rights == 1) {
        include("adminList.php");
      } elseif($rights == 0 and isset($id)) {
            $list = $check->select($id);
            $listEmail = $check->selectEmail($id);
            $listMobile = $check->selectMobile($id);
            $listAreaOfIntrest = $check->selectAreaOfInterest($id);
            include("./view/check.php");
      } else if (empty($rights)) {
        header("Location:login/1");
      }
}
?>
