
<?php
require("./model/connection.php");
include("./model/adminList.php");
$query = "select *from detail";
$list = adminList::showAllDetail();
$distinct = adminList::distinct();
$listEmail = adminList::showAllEmail($distinct);
$keys = array_keys($listEmail);
$email = [];
foreach ($keys as $i) {
    array_push($email, implode(",",$listEmail[$i]));
}
$listMobile = adminList::showAllMobile($distinct);
$keys = array_keys($listMobile);
$mobile = [];
foreach ($keys as $i) {
    array_push($mobile, implode(",",$listMobile[$i]));
}
$listAreaOfIntrest = adminList::showAllAreaOfIntrest($distinct);
$keys = array_keys($listAreaOfIntrest);
$areaOfIntrest = [];
foreach ($keys as $i) {
    array_push($areaOfIntrest, implode(",",$listAreaOfIntrest[$i]));
}
include("./view/adminList.php");
?>
