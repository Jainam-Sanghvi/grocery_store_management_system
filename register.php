<?php

require('conn.php');

error_reporting(0);



session_start();
//  $query="create table tblreg(uname varchar(25),pass int,cpass int)";
//   mysqli_query($con,$query);
if(isset($_POST['register'])){

  $uname=mysqli_real_escape_string($con,$_POST['uname']);
  $pass=md5($_POST['pass']);
  $cpass=md5($_POST['cpass']);

   $select="select * from tblreg where uname='$uname'";

   $result=mysqli_query($con,$select);
  
   if(mysqli_num_rows($result) >0){
     $error[] = 'user already exsist';
    
    
   }else{
    $insert="insert into tblreg(uname,pass,cpass)values('$uname','$pass','$cpass')";
    mysqli_query($con,$insert);
     header('Location:login.php');
    }
  }





  



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    
    <style>
      body{
        background-image: url("login12.jpg");
        background-size: 100%;
      
      }
      .error{
        color:red;
      }
      #myform{
        background-image: url("login1.webp");
        background-size: 100%;
        background-blend-mode: darken;
        color: snow;
      }
    </style>
    <script>
      function validation()
      {
        
        var pass=document.getElementById("pass").value;
        var cpass=document.getElementById("cpass").value;
        
       
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
        if(pass != cpass)
        {
          document.getElementById("ucpass").innerHTML=" ** password are not matching";
          return false;
        }
        if(cpass == "")
        {
          document.getElementById("ucpass").innerHTML=" ** please fill the conform password feild";
          return false;
        }
      }

     
    </script>
</head>
<body>
    <div id="register">
      <form action="" class="form" method="POST" id="myform" onsubmit="return validation()" style="margin: 4% 26%;padding: 5% 5%;border: 2px solid black;">
        <h2 style="text-align: center;">REGISTER FORM</h2>
        <?php
        
        if(isset($error))
        {

          foreach($error as $error)
          {
            echo '<h3><span class="error">'.$error.'</span></h3>';
          }
        }
        ?>
        <div class="form-group">
            <label class="control-label">ENTER YOUR USERNAME</label>
            <input type="email" id="name" name="uname" placeholder="enter your email" class="form-control">
            
          </div>
        <div class="form-group">
            <label class="control-label">ENTER YOUR PASSWORD</label>
            <input type="password" id="pass" name="pass" placeholder="enter your password" class="form-control" required>
            <span id="upass" class="text-danger"></span>
         </div>
        <div class="form-group">
            <label class="control-label">ENTER CONFORM PASSWORD</label>
            <input type="password" id="cpass" name="cpass" placeholder="enter your conform password" class="form-control" maxlength="8">
            <span id="ucpass" class="text-danger"></span>
        </div>
        <div class="form-group">
        <input type="submit" id="btn1" class="btn btn-primary btn-block btn-lg" value="REGISTER NOW" name="register">
        
        </div>
        <div>
            <p style="font-size: 20px;text-align: center;">you alredy have any account ? <a href="login.php">login now!</a> </p>
        </div>
    </form>

    </div>
</body>
</html>