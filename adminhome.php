<?php
require('conn.php');
session_start();

if(!isset($_SESSION['uname'])){
  header('location:loginadmin.php');
}
$uname= $_SESSION['uname'];

?>


<!-- <?php
// session_start();
// require("conn.php");
// error_reporting(0);



?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <style>

    
        #box1{
        background-image: url("pic-3.png");
        background-size: cover;
        background-blend-mode:darken;
       
        height: 50vh;
       }
       #box2{
        background-image: url("pic-1.png");
        background-size: cover;
        background-blend-mode:darken;
        height: 50vh;
       }
       #box3{
        background-image: url("pic-5.png");
        background-size: cover;
        background-blend-mode:darken;
        height: 50vh;
       }
       
   
  .main-head{
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("banner-bg.webp") no-repeat;
            background-position: center;
            background-size: cover;
            padding-top: 17rem;
            padding-bottom: 12rem;
    
        }
        .banner-text {
            color:black;
            position: absolute;
            left: 33%;
            top: 30%;
            font-family: 'Times New Roman', Times, serif;
        }

  
        </style>
  <script>
      
    </script>

<title>admin side</title>
</head>
<body>
  
    <div id="mySidebar" class="sidebar">
    
    
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h5 style="color: snow;text-align: center;font-size:1.5rem;"><?php echo $_SESSION["uname"];?></h5>
        <a href="adminhome.php">Dashboard</a>
        <a href="display.php">Shop data</a>
        <a href="conttable.php">Contact data</a>
        <a href="adminproduct.php">Products data</a>
        <a href="logoutadmin.php">Logout</a>
        </div>
        <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>
    
<!--header section ends-->

<div  class="main-head">
            <div class="banner-text">
            <h2>Fresh  And <span style="color:orange;">  Organic  </span >  Products  For  You  </h2>
                      <p style="font-size:20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Doloribus svitae omnis  rerum consectetur magnam optio <br> sequi voluptatum vel corporis. Repudiandae. consectetur ma</p>
            <div>
            
    </div>
    </div>
    </div>
    <div id="">
        <div class="container" style="margin-top: 45px;">

        <h3
                style="text-align: center;color:black;font-size: 2.1rem;font-family:'Times New Roman', Times, serif;font-weight:600;color:black;">
                Our <span style="color: orange;"> Admins</span></h3>
        <div class="row " style="margin: 10px;">
                    <div id="box1" class="col box1" style="margin: 9px;border: 1px solid white;" >
                    
                    </div>
                    <div id="box2" class="col box2" style="margin: 9px;border: 1px solid white;">
                   
                    </div>
                    <div id="box3" class="col box3" style="margin: 9px;border: 1px solid white;"></div>
                     
                </div>
    </div>
      </div>

      <section class="credit">created by Jainam Sanghvi | all rights reserved!</section>
      

</body>
</html>