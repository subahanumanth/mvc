<?php
session_start();
if (isset($_SESSION['password']))
{
    header("Location:list");
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
    <link rel="stylesheet" type="text/css" href="../../view/css/styles.css">
    <script src="../../view/js/index.js"></script>
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
                    <form method="POST" action="../list">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="p-t-10">
                            <input type="submit" class="btn btn--pill btn--green" name="submit" value="Submit">
                        </div><br><br>
                    </form>
                    <a href="../new" id="new">Create New User?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$url = $_GET['url'];
$url = explode('/', $url);

if ($url[1] == "error")
{
?>
  <html>
 <script>
 error();
 </script>
 </html>
 <?php
}
?>
