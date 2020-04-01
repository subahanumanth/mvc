<?php
    include("./model/adminList.php");
    $url = $_GET['url'];
    $url = explode('/',$url);
    if(isset($url[1])) {
      $id = $url[1];
      $adminList->deleteEmail ($id);
      $adminList->deleteMobile ($id);
      $adminList->deleteAreaOfInterest ($id);
      $adminList->deleteDetail ($id);
    }
    $list = $adminList->showAllDetail($id);
    for($i = 0;$i<count($list);$i++) {
        $list[$i]['bloodGroup'] = $adminList->showAllBloodGroup($list[$i]['id']);
        $list[$i]['detailsOfGraduation'] = $adminList->showAllDetailsOfGraduation($list[$i]['id']);
        $list[$i]['areaOfInterest'] = $adminList->showAllAreaOfInterest($list[$i]['id']);
        $list[$i]['email'] = $adminList->showAllEmail($list[$i]['id']);
        $list[$i]['mobile'] = $adminList->showAllMobile($list[$i]['id']);
    }
    $_SESSION['fullName'] = $adminList->selectName($id);
    include("./view/adminList.php");
?>
