<?php
include("./model/connection.php");
include("./model/detailsOfGraduationTable.php");
if(isset($_POST['submit'])) {
    $bg = $_POST['bg'];
    $detailsOfGraduation->insert($bg);
}
$url = $_GET['url'];
$url = explode('/',$url);
if(isset($url[1])) {
    $detailsOfGraduation->delete($url[1]);
}
$list = $detailsOfGraduation->selectDetailsOfGraduation();
include("./view/detailsOfGraduationTable.php");
?>
