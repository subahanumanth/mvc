<?php
$url = $_GET['url'];
$url = explode('/',$url);
if(isset($url[0])) {
  require("./controller/index.php");
  $controller = new index ();
  if(method_exists('index', $url[0]))
  {
      $controller->{$url[0]} ();
  } 
  else
  {
      http_response_code(404);
  }
}

