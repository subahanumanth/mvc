<?php 
include("../model/db.php");
include ("../model/table.php");
include ("../model/tableAdapter.php");
if($_POST['page'] == "/manageBloodGroup") {
    if(isset($_POST['query'])) { 
        $bg = $_POST['query'];
        $table->save($bg, "blood_group", "blood_group"); 
        exit;
    }
    if(isset($_POST['id'])) { 
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "blood_group", "blood_group");  
        exit;
    }
}

if($_POST['page'] == "/manageDetailsOfGraduation") {
    if(isset($_POST['query'])) { 
        $bg = $_POST['query'];
        $table->save($bg, "details_of_graduation", "details_of_graduation"); ?>
        <script>$("#form").hide();</script>
        <?php
    }
    if(isset($_POST['id'])) { 
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "details_of_graduation", "details_of_graduation");
    }
}

if($_POST['page'] == "/manageAreaOfInterest") {
    if(isset($_POST['query'])) { 
        $bg = $_POST['query'];
        $table->save($bg, "admin_area_of_interest", "area_of_interest"); ?>
        <script>$("#form").hide();</script>
        <?php
    }
    if(isset($_POST['id'])) { 
        $id = $_POST['id'];
        $bg = $_POST['bg'];
        $table->update($id, $bg, "admin_area_of_interest", "area_of_interest");
    }
}
