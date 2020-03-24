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
        <form action="check" method="post">
            <h1>Login Form</h1>
            <div>
                <input type="text" placeholder="Username" required="" id="username" name="name"/>
            </div>
            <div class="pace">
                <input type="password" placeholder="Password" required="" id="password" name="password"/>
            </div>
            <div>
                <input type="submit" name="submit" value="submit" />
                <a href="new"><span style="font-size:17px">Create New User?</span></a>
            </div>
        </form>

    </section>
</div>
</body>
</html>
