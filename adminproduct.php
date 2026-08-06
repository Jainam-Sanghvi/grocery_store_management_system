<?php
require('conn.php');
session_start();

if(!isset($_SESSION['uname'])){
  header('location:loginadmin.php');
}
$uname= $_SESSION['uname'];

?>


<?php

require('conn.php');
error_reporting(0);




if($_POST['name'] && $_POST['price'] && $_POST['image'])
{

  $name=$_POST['name'];
  $price=$_POST['price'];
  $image=$_POST['image'];
  

  $query="insert into tblproduct(name,price,image) values('$name','$price','$image')";

  mysqli_query($con,$query);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    
    <link rel="stylesheet" href="style1.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <title>product form</title>
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
      th,td{
        color:snow;
      }
    </style>
    
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

    <div id="product">
    <form action=""  method="POST" id="myform" onsubmit="return validation()" style="margin: 2% 26%;padding: 2% 2%;border: 2px solid black;">
        <h2 style="text-align: center;">UPLOAD PRODUCTS</h2>
     
        <div class="form-group">
            <label id="name1" class="control-label">PRODUCT NAME</label>
            <input type="text" id="name" name="name"  placeholder="enter name" class="form-control" required >
            <span id="uname" class="text-danger"></span>
        </div>
        <div class="form-group">
            <label  class="control-label">PRODUCT PRICE</label>
            <input type="text" id="pass" name="price" placeholder="enter price" class="form-control">
            <span id="upass" class="text-danger"></span>
        </div>

        <div class="form-group">
            <label  class="control-label">PRODUCT IMAGE</label>
            <input type="file" id="pass" name="image" class="form-control">
           
        </div>
        <div class="form-group">
            <input type="submit" id="btn1" class="btn btn-primary btn-block btn-lg" value="SUBMIT" name="submit">
        </div>
       
    </form>
    </div>


    <div>

<div class="card-body">

<div class="table-responsive">
<h2 style="color:snow;text-align:center;margin:25px;">USER PRODUCT DATA</h2>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table class="table table-bordered" style="color:snow;color:#666;border:1px solid black;font-size:20px;font-weight:500;">
            
            <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">PRICE</th>
            <th scope="col">IMAGE</th>
           
            <th scope="col" colspan=2>ACTION</th>
    </tr>
    </thead>

    <tbody id="myTable">
        <?php
        $query="select * from tblproduct";
        $result=mysqli_query($con,$query);
        
        while($r=mysqli_fetch_array($result))

        {
            ?>
        <tr>
            <td><?php echo $r['id'];?></td>
            <td><?php echo $r['name'];?></td>
            <td><?php echo $r['price'];?></td>
            <td><image src="<?php echo $r['image'];?>" alt="" height="88px"></td>
            
              <td><a href="productdelete.php?REMOVE=<?php echo $r['id']; ?>" class="btn-danger btn-lg" onclick="return confirm('remove item from cart?');">REMOVE</a>
              <a href="productupdate.php?id=<?php echo $r['id']; ?>" class="btn-success btn-lg">UPDATE</a></td> 
              
       
       
            </tr> 
    <?php
        }
    ?>
</tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>