<?php
session_start();
if(isset($_SESSION['password'])) {
  header("Location:check");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Login Page</title>
<?php  include("css/style1.css") ?>
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login Info</h2>
                    <div id="error">
                    </div>
                    <form method="POST" action="../check">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-10">
                            <input type="submit" class="btn btn--pill btn--green" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$url = $_GET['url'];
$url = explode('/',$url);

if($url[1]==1){
  ?>
  <html>
 <script>
    var h4 = document.createElement("h4");
    var text = document.createTextNode("Incorrect username or password.");
    h4.appendChild(text);
    h4.classList.add("h");
    var div = document.querySelector("#error");
    div.appendChild(h4);
    div.classList.add("error");
 </script>
 </html>
 <?php
}
 ?>
