<?php
include ("autoload.php");
include ("./model/table.php");
include ("./model/tableAdapter.php");

$url = $_GET['url'];
$url = explode('/', $url);
if(isset($_POST['query'])) {
    $id = $_POST['query'];
    echo $id;
    if($table->check($id, "blood_group")) { ?>
        <script>toastr.error("Deletion Failed");</script>
        <?php
        exit;
    } else {
        $table->delete($id, "blood_group"); ?>
        <script>$("."+<?php echo $id; ?>).remove();toastr.warning("Deleted Successfully");</script>
<?php
        exit;
    }
}  

if ($url[1] == "add" and isset($_POST['submit']))
{
    $bg = $_POST['bg'];
    $table->save($bg, "blood_group", "blood_group");
    header("Location:../manageBloodGroup");
}
if (isset($url[2]))
{
    $value = $table->find($url[2], "blood_group", "blood_group");
}
if (isset($_POST['submit']) and $url[1] == "update" and isset($url[2]))
{
    $table->update($url[2], $_POST['bg'], "blood_group", "blood_group");
    header("Location:../../manageBloodGroup");
}
$list = $table->get("blood_group", "blood_group", "bloodGroup");
session_start();
if (isset($_SESSION['name']))
{
    include ("./view/bloodGroup.php");
}
else
{
    header("Location:login");
}
?>
