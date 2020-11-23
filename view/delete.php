<?php
include("../model/adminList.php");
include("../model/table.php");
include("../model/tableAdapter.php");
include("../model/db.php");
$adminList = adminList::getInstance();
if(isset($_POST['query'])) {
    if($_POST['page'] == "/list") {
        $id = $_POST['query'];
        if($adminList->deleteEmail($id) and $adminList->deleteMobile($id) and $adminList->deleteAreaOfInterest($id) and $adminList->deleteDetail($id)) {
        ?>
            <html><script>
            $("."+<?php echo $id; ?>).remove();    
            toastr.success("deleted Successfully");</script></html> <?php
        } else { ?>
            <script>toastr.error("deletetion Failed");</script><?php
        }
    }
    if($_POST['page'] == "/manageBloodGroup") {    
        $id = $_POST['query'];
        if($table->check($id, "blood_group")) { ?>
            <script>toastr.error("Deletion Failed");</script>
            <?php
        } else {
            $table->delete($id, "blood_group"); ?>
            <script>$("."+<?php echo $id; ?>).remove();toastr.warning("Deleted Successfully");</script>
            <?php
          }        
    }
    if($_POST['page'] == "/manageDetailsOfGraduation") {    
        $id = $_POST['query'];
        if($table->check($id, "details_of_graduation")) { ?>
            <script>toastr.error("Deletion Failed");</script>
            <?php
        } else {
            $table->delete($id, "details_of_graduation"); ?>
            <script>$("."+<?php echo $id; ?>).remove();toastr.warning("Deleted Successfully");</script>
            <?php
        }   
    }
    if($_POST['page'] == "/manageAreaOfInterest") {
        $id = $_POST['query'];   
        echo $id;
        if($table->checkArea($id)) { ?>
            <script>toastr.error("Deletion Failed");</script>
            <?php
        } else {
            $table->delete($id, "admin_area_of_interest"); ?>
            <script>$("."+<?php echo $id; ?>).remove();toastr.warning("Deleted Successfully");</script>
            <?php
        }    
    }
}
?>
