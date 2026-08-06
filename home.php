<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Home page</title>
    <style>
          
        .main-head{
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("banner-bg.webp") no-repeat;
            background-position: center;
            background-size: cover;
            padding-top: 20rem;
            padding-bottom: 16rem;
    
        }
        .banner-text {
            color:black;
            position: absolute;
            left: 33%;
            top: 30%;
            font-family: 'Times New Roman', Times, serif;
        }

       
        
        .btn1{
            position: absolute;
            top: 100%;
            left: 30%;
            
        }
        .btn2{
            position: absolute;
            top: 60%;
            left: 05%;
            
        }
        .row h5
        {
            
            position: absolute;
            top: 18%;
            left: 05%;
        }
        .row h4
        {
            position: absolute;
            top: 33%;
            left: 05%;
        }
        .box1{
        background-image: url("banner-1.jpg");
        background-size: cover;
        background-blend-mode:darken;
       
        height: 35vh;
       }
       .box2{
        background-image: url("banner-2.jpg");
        background-size: cover;
        background-blend-mode:darken;
        height: 35vh;
       }
       .box3{
        background-image: url("banner-3.jpg");
        background-size: cover;
        background-blend-mode:darken;
        height: 35vh;
       }
    </style>
</head>
<body>
    
           <!--header section start-->
           <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- <a class="navbar-brand" href="#">ALL IN ONE</a> -->
            <a href="home.php" class="navbar-brand"> <i class="fas fa-shopping-basket"></i> All In One  </a>
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
        <div  class="main-head">
            <div class="banner-text">
            <h2>Fresh  And <span style="color:orange;">  Organic  </span >  Products  For  You  </h2><p style="font-size:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Doloribus svitae omnis  rerum consectetur magnam optio <br> sequi voluptatum vel corporis. Repudiandae. consectetur ma</p>
            <div>
            <a href="shop.php" class="btn1 btn-warning btn-lg ">Shop Now</a>
    </div>
    </div>
        
        </div>
        <div id="jainam">
        <div class="container" style="margin-top: 50px;">
        <div class="row " style="margin: 10px;">
                    <div id="box1" class="col box1" style="margin: 9px;border: 1px solid white;" >
                    <h5>Limited Sales</h5>
                    <h4>upto 50% off</h4>
                    <button class="btn2 btn-warning btn-lg " >Shop Now</button>
                    </div>
                    <div id="box2" class="col box2" style="margin: 9px;border: 1px solid white;">
                    <h5>Limited Sales</h5>
                    <h4>upto 50% off</h4>
                    <button class="btn2 btn-warning btn-lg " >Shop Now</button>
                    </div>
                    <div id="box3" class="col box3" style="margin: 9px;border: 1px solid white;">
                    <h5>Limited Sales</h5>
                    <h4>upto 50% off</h4>
                    <button class="btn2 btn-warning btn-lg " >Shop Now</button>
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