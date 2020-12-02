<html>
<link rel="stylesheet" href="<?php  echo str_replace(".","",dirname($_GET['url'],5));  ?>/view/css/error.css">
<body>
<div class="error">
<h1 class="oops">Oooops!</h1>
<h4 class="found">Page not found</h4>
<img src="<?php  echo str_replace(".","",dirname($_GET['url'],5));  ?>/uploads/circle-cropped.png">
<a href="<?php  echo str_replace(".","",dirname($_GET['url'],5));  ?>/login">Back to home</a>
</div>
</body>
</html>
