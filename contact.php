<?php
require('conn.php');
error_reporting(0);




if($_POST['name'] && $_POST['email'] && $_POST['mno'] && $_POST['addr'])
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $pno=$_POST['mno'];
  $review=$_POST['review'];
  $addr=$_POST['addr'];

  $query="insert into tblcon(name,email,pno,review,addr) values('$name','$email',$pno,'$review','$addr')";;

  mysqli_query($con,$query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>contact</title>
    <script>
           function validation()
        {
          var name=document.getElementById("name").value;
          var email=document.getElementById("email").value;
          var mno=document.getElementById("mno").value;
          var food=document.getElementById("food").value;
          var addr=document.getElementById("addr").value;
          if(name == "")
          {
            document.getElementById("uname").innerHTML=" ** please fill the user name feild";
            return false;
          }
          if(!isNaN(name))
          {
            document.getElementById("uname").innerHTML=" ** only chracters are allowed";
            return false;
          }
          if((name.length<=2)||(name.length > 20))
          {
            document.getElementById("uname").innerHTML=" ** user length must be between 2 and 20";
            return false;
          }
          if(email == "")
          {
            document.getElementById("email1").innerHTML=" ** please fill the email feild";
            return false;
          }
          if(mno == "")
          {
            document.getElementById("mno1").innerHTML=" ** please fill the mobile number feild";
            return false;
          }
          if(mno.length != 10)
          {
            document.getElementById("mno1").innerHTML=" ** mobile number must be 10 digits allowed";
            return false;
          }
         
         
          if(addr == "")
          {
            document.getElementById("addr1").innerHTML=" ** please fill the address feild";
            return false;
          }
        }
      </script>
    </script>
</head>

<body>
    <!--header section start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!-- <a class="navbar-brand" href="#">ALL IN ONE</a> -->
        <a href="home.php" class="navbar-brand"> <i class="fas fa-shopping-basket"></i> All In One </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review.php">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main-about">
        <div class="banner-text">
            <h2>Contact Us</h2>
            <p> <a href="home.php">Home >> </a> Contact </p>
        </div>
        
    </div>
    <h2 style="text-align: center;color:black;font-size: 2.1rem;font-family:'Times New Roman', Times, serif;font-weight:600; margin-top: 30px;">ORDER <span style="color: #bac34e;"> NOW </span></h2>
    <div class="container" style="margin-top: 1.5%;">
        <div class="row" style="border-radius:.4rem;border-radius:.5rem;box-shadow: 0 .5rem 1rem;">
            <div class="col" style="margin-left:2vh;">
                
                <img src="gallery-img-1.jpg" alt="" width="99%" height="91%" style="margin-top: 6%;margin-left:4%;">
             </div>
             <div class="col" style="margin-right:1%;margin-top: 1%;"> 
                <form action="" class="form" id="myform" method="POST" onsubmit="return validation() " style="margin:2% 5%;padding: 2% 1%;">
                    <div class="form-group">
                       
                        <input type="text" id="name" name="name" placeholder="enter your name" class="form-control" style="border: 1px solid #666;">
                        <span id="uname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                       
                        <input type="email" id="email" name="email" placeholder="enter your email" class="form-control" style="border: 1px solid #666;">
                        <span id="email1" class="text-danger"></span>
                    </div>
                    <div class="form-group">
            
                        <input type="text" id="mno" name="mno" placeholder="enter your phone number" class="form-control" style="border: 1px solid #666;">
                        <span id="mno1" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        
                        <input type="text" id="food" name="review" placeholder="enter your suggestion" class="form-control" style="border: 1px solid #666;">
                       
                    </div>
                    <div class="form-group">
                        
                    <textarea placeholder="enter your address" name="addr" id="addr" cols="63" rows="3" style="border: 1px solid #666;"></textarea>
                    <span id="addr1" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-danger" name="order" value="ORDER NOW">
                    </div>
                
                    </form>
            </div>
        </div>
        </div>
    </div>
    </div>
  <!--footer section start-->
  <section class="footer"  style="margin-top: 80px;">


<div class="box-container">

<div class="box">
    <h4>Quick Links</h4>
    <a href="login.php"><i class="fas fa-arrow-right"></i>Login</a>
    <a href="register.php"><i class="fas fa-arrow-right"></i>Register</a>
    <a href="home.php"><i class="fas fa-arrow-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-arrow-right"></i>About</a>
    <a href="shop.php"><i class="fas fa-arrow-right"></i>Shop</a>
    <a href="review.php"><i class="fas fa-arrow-right"></i>Review</a>
    <a href="contact.php"><i class="fas fa-arrow-right"></i>Contact</a>
</div>
   
    <div class="box">
        <h4>Social Links</h4>
        <a href=""><i class="fas fa-arrow-right"></i>Facebook</a>
        <a href=""><i class="fas fa-arrow-right"></i>Twitter</a>
        <a href=""><i class="fas fa-arrow-right"></i>Instagram</a>
        <a href=""><i class="fas fa-arrow-right"></i>Pinterest</a>
        <a href=""><i class="fas fa-arrow-right"></i>Linkedin</a>
    </div>

   
</div>
</section>
<section class="credit">created by Jainam Sanghvi | all rights reserved!</section>
      
<!--footer section ends-->
</body>

</html>