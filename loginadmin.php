<?php
session_start();
require("conn.php");
error_reporting(0);

if(isset($_POST["login"]))
{
  $uname=$_POST["uname"];
$pass=$_POST["pass"];

$query="select * from tbladmin where uname='$uname' and pass='$pass'";
$r=mysqli_query($con,$query);


if(mysqli_num_rows($r)>0)
{
  $_SESSION["uname"]=$uname;

  header("Location:adminhome.php");
}
else
{
  $error="invalid admin..";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <style>
      body{
        background-image: url("login12.jpg");
        background-size: 100%;
      
      }
      #myform{
        background-image: url("login1.webp");
        background-size: 100%;
        background-blend-mode: darken;
        color: snow;
      }
      .error
      {
        color:red;
      }
    </style>
    <script>
      function validation()
      {
    
        var pass=document.getElementById("pass").value;
       
        if(pass == "")
        {
          document.getElementById("upass").innerHTML=" ** please fill the password feild";
          return false;
        }
        if((pass.length<=2)||(pass.length > 20))
        {
          document.getElementById("upass").innerHTML=" ** password length must be between 2 and 20";
          return false;
        }
      }

      
    </script>
</head>
<body>
    <div id="login">
      <form action=""  method="POST" id="myform" onsubmit="return validation()" style="margin: 8% 26%;padding: 5% 5%;border: 2px solid black;">
        <h2 style="text-align: center;">LOGIN NOW</h2>
        <h3 class="error"><?php echo $error; ?></h3>
        <div class="form-group">
            <label id="name1" class="control-label">ENTER YOUR USERNAME</label>
            <input type="email" id="name" name="uname" placeholder="enter your email" class="form-control" required>
            <span id="uname" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label id="pass1" class="control-label">ENTER YOUR PASSWORD</label>
            <input type="password" id="pass" name="pass" placeholder="enter your password" class="form-control">
            <span id="upass" class="text-danger"></span>
        </div>
        <div class="form-group">
            <input type="submit" id="btn1" class="btn btn-primary btn-block btn-lg" value="LOGIN NOW" name="login">
        </div>
        
    </form>

    </div>

    
</body>
</html>