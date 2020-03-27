<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Paper Stack</title>
<?php include("css/sample.css"); ?>
</head>
<body>
<div class="container">
    <section id="content">
        <form action="../check" method="post">
            <h1>Login Form</h1>
            <div id="error">
           </div><br>
            <div>
                <input type="text" placeholder="Username" id="username" name="name" />
            </div>
            <div class="pace">
                <input type="password" placeholder="Password" id="password" name="password"/>
            </div>
            <div>
                <input type="submit" name="submit" value="submit"/>
                <a href="new"><span style="font-size:17px">Create New User?</span></a>
            </div>
        </form>
    </section>
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
