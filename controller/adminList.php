<?php
include ("autoload.php");
$url = $_GET['url'];
$url = explode('/', $url);
$adminList = adminList::getInstance();
$list = $adminList->showAllDetail($_SESSION['id']);
for ($i = 0;$i < count($list);$i++)
{
    $list[$i]['bloodGroup'] = $adminList->showAllBloodGroup($list[$i]['id']);
    $list[$i]['detailsOfGraduation'] = $adminList->showAllDetailsOfGraduation($list[$i]['id']);
    $list[$i]['areaOfInterest'] = $adminList->showAllAreaOfInterest($list[$i]['id']);
    $list[$i]['email'] = $adminList->showAllEmail($list[$i]['id']);
    $list[$i]['mobile'] = $adminList->showAllMobile($list[$i]['id']);
}
//$list = null;
try {
    if(isset($list)) {
    } else {
        throw new exception("Data is not fetched yet");
    }
} catch (exception $e) {
    echo $e->getMessage();
}
$_SESSION['fullName'] = $adminList->selectName($_SESSION['id']);
if ($url[1] == "delete" and isset($url[2]))
{
    $id = $url[2];
    $adminList->deleteEmail($id);
    $adminList->deleteMobile($id);
    $adminList->deleteAreaOfInterest($id);
    $adminList->deleteDetail($id);	  
    header("Location:../../../list");
}

if ($url[1] == "update" and isset($url[2]))
{
    header("Location:../../new/$url[2]");
}


require("./view/adminList.php");
?>
