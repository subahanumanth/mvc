
<?php
require("./model/connection.php");
include("./model/adminList.php");
$url = $_GET['url'];
$url = explode('/',$url);
$id = $url[1];
$name = $adminList->showName($id);
$list = $adminList->showAllDetail($id);
$distinct = $adminList->distinct($id);
$listEmail = $adminList->showAllEmail($distinct);
$keys = array_keys($listEmail);
$email = [];
foreach ($keys as $index) {
    array_push($email, implode(",",$listEmail[$index]));
}
$listMobile = $adminList->showAllMobile($distinct);
$keys = array_keys($listMobile);
$mobile = [];
foreach ($keys as $index) {
    array_push($mobile, implode(",",$listMobile[$index]));
}
$listAreaOfIntrest = $adminList->showAllAreaOfIntrest($distinct);
$keys = array_keys($listAreaOfIntrest);
$areaOfIntrest = [];
foreach ($keys as $index) {
    array_push($areaOfIntrest, implode(",",$listAreaOfIntrest[$index]));
}
include("./controller/session.php");
include("./view/adminList.php");
?>
