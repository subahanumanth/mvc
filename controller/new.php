<?php
session_start();
$a = 1;
include ("autoload.php");
include (sprintf("%s/model/dropdown.php", $_SERVER['DOCUMENT_ROOT']));
include (sprintf("%s/model/commandPattern.php", $_SERVER['DOCUMENT_ROOT']));

$bloodGroup = new bloodGroup();
$areaOfInterest = new areaOfInterest();
$detailsOfGraduation = new detailsOfGraduation();

$newUser = newUser::getInstance();
$url = $_GET['url'];
$url = explode("/", $url);
if (!isset($url[1]))
{
    if (count($_POST) > 0)
    {
        $nameExist = $newUser->checkFirstName($_POST['firstName']);
        $_POST['emailn'] = explode(", ", $_POST['email']);
        for ($i = 0;$i < count($_POST['emailn']);$i++)
        {
            $emailExist[] = $newUser->checkEmail($_POST['emailn'][$i]);
        }
        $_POST['mobileNew'] = explode(', ', $_POST['mobile']);
        for ($i = 0;$i < count($_POST['mobileNew']);$i++)
        {
            $mobileExist[] = $newUser->checkMobile($_POST['mobileNew'][$i]);
        }
    }
}
else
{
    $nameExist = "false";
    $emailExist = ["false"];
    $mobileExist = ["false"];
}
if (isset($url[1]) and isset($_SESSION['name']))
{
    $id = $url[1];
    $list = $newUser->fetchDetail($id);
    $list['aoi'] = $newUser->fetchAreaOfInterest($id);
    $list['email'] = $newUser->fetchEmail($id);
    $list['mobile'] = $newUser->fetchMobile($id);
    $dob = $list['dob'];
    $gender = $list['gender'];
    $dog = $list['dog'];
    $bg = $list['bg'];
    $aoi = $list['aoi'];
    $profile = $list['profilePicture'];
    $password = $list['password'];
    $_SESSION['userPassword'] = $password;
}
if (isset($_POST['cancel']))
{
    header("Location:../list");
}
include ("validation.php");
session_start();
include ("view/new.php");
?>

