<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script>
         $(document).ready(function(){
            $("#box6").mouseover(function(){
                
                $("#box6").css('background-image',"url('gallery-img-6.jpg')");
        })    
        $("#box7").mouseover(function(){
            $("#box7").css('background-image',"url('gallery-img-4.jpg')");     
        })
        $("#box8").mouseover(function(){
            $("#box8").css('background-image',"url('gallery-img-1.jpg')");
        })  
        $("#box9").mouseover(function(){
            $("#box9").css('background-image',"url('gallery-img-2.jpg')");
        })              
        $("#box10").mouseover(function(){
            $("#box10").css('background-image',"url('gallery-img-3.jpg')");
        })        
        $("#box11").mouseover(function(){
            $("#box11").css('background-image',"url('gallery-img-5.jpg')");
        })    
        })
        </script>
    <title>Document</title>
</head>

<body>
    <!--header section start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!-- <a class="navbar-brand" href="#">ALL IN ONE</a> -->
        <a href="" class="navbar-brand"> <i class="fas fa-shopping-basket"></i> All In One </a>
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
            <h2>About Us</h2>
            <p> <a href="home.php">Home >> </a> About </p>
        </div>

    </div>
    <section class="about">
        <div class="container" style="margin-top: 8px;">
            <div class="row " style="margin: 8px;">
                <div id="box4" class="col box1" style="margin: 9px;border: 1px solid white;">
                </div>

                <div id="box5" class="col box1" style="margin: 60px;border: 1px solid white;">
                    <h3><span style="color: #bac34e;">Welcome To Our Shop</span></h3>
                    <h3>Fresh And Organic Groceries</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non
                        quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis
                        dicta, incidunt dolores nemo ex.</p>
                    <a href="#jainam" class="btn-warning btn-lg">Read More</a>

                </div>


    </section>
    <div id="jainam">
        <div class="container" style="margin-top: 1px;">
            <h3
                style="text-align: center;color:black;font-size: 2.1rem;font-family:'Times New Roman', Times, serif;font-weight:600;color:black;">
                Our <span style="color: #bac34e;"> Gallery</span></h3>
            <div class="row " style="margin: 10px;">
                <div id="box6" class="col box1" style="margin: 9px;border: 1px solid black;"></div>
                <div id="box7" class="col box2" style="margin: 9px;border: 1px solid black;"></div>
                <div id="box8" class="col box3" style="margin: 9px;border: 1px solid black;"></div>
            </div>
            <div class="row " style="margin: 10px;">
                <div id="box9" class="col box4" style="margin: 9px;border: 1px solid black;"></div>
                <div id="box10" class="col box5" style="margin: 9px;border: 1px solid black;"></div>
                <div id="box11" class="col box6" style="margin: 9px;border: 1px solid black;"></div>
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