
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

button {
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}

#submit {
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}

button:hover {
 opacity: 0.8;
}

.cancelbtn {
 width: auto;
 padding: 10px 18px;
 background-color: #f44336;
}

.imgcontainer {
 text-align: center;
 margin: 24px 0 12px 0;
}

img.avatar {
 width: 40%;
 border-radius: 50%;
}

.container {
 padding: 16px;
}

span.psw {
 float: right;
 padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
 span.psw {
    display: block;
    float: none;
 }
 .cancelbtn {
    width: 100%;
 }
/* ////////////////////////////////////////////////////////////// */

.center {
   margin-left:200px;
}
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="check">
 <div class="imgcontainer">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRBtMnFAp7AIKJYdAFSoFBTxUprGblRmyoTmRZpHfT5xq5VqMay" alt="Avatar" class="avatar" height="300">
 </div>

 <div class="container">
   <div class="center">
   <label for="uname" style="margin-left:310px;"><b>Username</b></label>
   <input type="text" placeholder="Enter Username" name="name" style="width:30%; margin-left:30px;" required> <br>

   <label for="psw" style="margin-left:310px;"><b>Password</b></label>
   <input type="password" placeholder="Enter Password" name="password" align="centre" style="width:30%; margin-left:30px;" required><br>
   </div>
   <input type="submit" name="submit" style="width:20%; margin-left:420px;" id="submit">
   <a href="new.php">Create New User?</a>
 </div>

</form>

</body>
</html>
