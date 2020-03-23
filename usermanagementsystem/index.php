<?php
$url = $_GET['url'];
$url = explode('/',$url);
if(isset($url[0])) {
  require("./controller/index.php");
  $controller = new index ();
  $controller->{$url[0]} ();
}
?>
