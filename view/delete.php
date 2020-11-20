<?php
include("../model/adminList.php");
include("../model/db.php");
$adminList = adminList::getInstance();
if(isset($_POST['query'])) {
    $id = $_POST['query'];
    if($adminList->deleteEmail($id) and $adminList->deleteMobile($id) and $adminList->deleteAreaOfInterest($id) and $adminList->deleteDetail($id)) {
    ?>
    <html><script>
toastr.success("deleted Successfully");</script></html> <?php
} else { ?>
<script>toastr.error("deletetion Failed");</script><?php
}
}
?>
