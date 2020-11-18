<?php
include ("autoload.php");
include ("./model/table.php");
include ("./model/tableAdapter.php");


$url = $_GET['url'];
$url = explode('/', $url);
if(isset($_POST['query'])) {
    $id = $_POST['query'];
    echo $id;
    if($table->checkArea($id)) { ?>
        <script>toastr.error("Deletion Failed");</script>
        <?php
        exit;
    } else {
        $table->delete($id, "admin_area_of_interest"); ?>
        <script>$("."+<?php echo $id; ?>).remove();toastr.warning("Deleted Successfully");</script>
<?php
        exit;
    }
}  

if ($url[1] == "add" and isset($_POST['submit']))
{
    $bg = $_POST['bg'];
    $table->save($bg, "admin_area_of_interest", "area_of_interest");
    header("Location:../manageareaOfInterest");
}
if (isset($url[2]))
{
    $value = $table->find($url[2], "admin_area_of_interest", "area_of_interest");
}
if (isset($_POST['submit']) and isset($url[2]) and $url[1] == "update")
{
    $table->update($url[2], $_POST['bg'], "admin_area_of_interest", "area_of_interest");
    header("Location:../../manageareaOfInterest");
}
$list = $table->get("admin_area_of_interest", "area_of_interest", "areaOfInterest");
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/areaOfInterest.php");
}
else
{
    header("Location:login");
} ?>
