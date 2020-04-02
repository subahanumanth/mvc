<?php
session_start();
if(isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
    $lists = $check->selectNamePassword($_SESSION['name'],$_SESSION['password']);
        $name = $lists['first_name']." ".$lists['last_name'];
        $_SESSION['id'] = $lists['id'];
        $rights = $lists['rights'];
        if($rights == 1) {
          include("adminList.php");
        } else if($rights == 0 and isset($_SESSION['id'])) {
              $list = $check->select($_SESSION['id']);
              $listBloodGroup = $check->selectBloodGroup($_SESSION['id']);
              $listDetailsOfGraduation = $check->selectDetailsOfGraduation($_SESSION['id']);
              $listAreaOfInterest = $check->selectAreaOfInterest($_SESSION['id']);
              $listEmail = $check->selectEmail($_SESSION['id']);
              $listMobile = $check->selectMobile($_SESSION['id']);
              include("./view/check.php");
        } else if(empty($rights)) {
              session_destroy();
              header("Location:login/1");
        }
} else {
      $lists = $check->selectNamePassword($_SESSION['name'],$_SESSION['password']);
      $name = $lists['first_name']." ".$lists['last_name'];
      $_SESSION['id'] = $lists['id'];
      $rights = $lists['rights'];
      if($rights == 1) {
        include("adminList.php");
      } elseif($rights == 0 and isset($_SESSION['id'])) {
            $list = $check->select($_SESSION['id']);
            $listBloodGroup = $check->selectBloodGroup($_SESSION['id']);
            $listDetailsOfGraduation = $check->selectDetailsOfGraduation($_SESSION['id']);
            $listAreaOfInterest = $check->selectAreaOfInterest($_SESSION['id']);
            $listEmail = $check->selectEmail($_SESSION['id']);
            $listMobile = $check->selectMobile($_SESSION['id']);
            include("./view/check.php");
      } else if (empty($rights)) {
            session_destroy();
            header("Location:login/1");
      }
}
?>
