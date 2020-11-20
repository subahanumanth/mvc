<?php 
include ("./model/adminList.php");
$url = $_GET['url'];
$url = explode('/', $url);
$adminList = adminList::getInstance();


$list = $adminList->showAllDetail($_SESSION['id']);
for ($i = 0;$i < count($list);$i++)
{
    $list[$i]['bloodGroup'] = $adminList->showAllBloodGroup($list[$i]['id'], $i);
    $list[$i]['detailsOfGraduation'] = $adminList->showAllDetailsOfGraduation($list[$i]['id'], $i);
    $list[$i]['areaOfInterest'] = $adminList->showAllAreaOfInterest($list[$i]['id'], $i);
    $list[$i]['email'] = $adminList->showAllEmail($list[$i]['id'], $i);
    $list[$i]['mobile'] = $adminList->showAllMobile($list[$i]['id'], $i);
}
//$list = null;
try {
    if(isset($list)) {
    } else {
        throw new exception("Data is not fetched yet".__FILE__);
    }
} catch (exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
}

//Email Fetch error
try {
    if(empty($list[0]['email'])) {
         throw new Exception("Email fetch Error at ".__FILE__);
    }
}
catch (Exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
}  

//Mobile number Fetch error
try {
    if(empty($list[0]['mobile'])) {
         throw new Exception("Mobile number fetch Error at ".__FILE__);
    }
}
catch (Exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
}  

//Details Of Graduation Fetch error
try {
    if(empty($list[0]['detailsOfGraduation'])) {
         throw new Exception("Details Of Graduation fetch Error at ".__FILE__);
    }
}
catch (Exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
}  

//Blood Group Fetch error
try {
    if(empty($list[0]['bloodGroup'])) {
         throw new Exception("Blood Group fetch Error at ".__FILE__);
    }
}
catch (Exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
} 

//Area Of Interest Fetch error
try {
    if(empty($list[0]['areaOfInterest'])) {
         throw new Exception("Area Of Interest fetch Error at ".__FILE__);
    }
}
catch (Exception $e) {
     error_log("[".date("F j,Y,g:i")."]".$e->getMessage()."\n", 3, "model/error.php");
} 

$_SESSION['fullName'] = $adminList->selectName($_SESSION['id']);

	
if ($url[1] == "update" and isset($url[2]))
{
    header("Location:../../new/$url[2]");
}

require("./view/adminList.php");

?>
