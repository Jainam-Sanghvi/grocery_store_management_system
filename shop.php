<?php
require('conn.php');
session_start();

if(!isset($_SESSION['uname'])){
  header('location:login.php');
}
$uname= $_SESSION['uname'];

?>
<?php

error_reporting(0);
if(isset($_POST['add_to_cart'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $image=$_POST['image'];
  $qun=$_POST['quantity'];

  $select_cart=mysqli_query($con,"SELECT * FROM tblshop WHERE name='$name' AND email='$uname'") or die('query failed');
  if(mysqli_num_rows($select_cart)>0){
       $message[]='product already in the list!';
  }
  else{
      $query="INSERT INTO tblshop(email,name,price,image,qun) VALUES('$uname','$name','$price','$image','$qun')";    ;
      mysqli_query($con,$query);
       $message[]='product added to cart!';
  }

}

if(isset($_POST['update_cart'])){
  
  $qun=$_POST['cart_quantity'];
  $id=$_POST['cart_id'];
  mysqli_query($con,"UPDATE tblshop SET qun='$qun' WHERE id='$id'") or die('query failed');
  $message[]='cart quantity updated successfully';
  
}
  if(isset($_GET['remove'])){
    $remove_id=$_GET['remove'];
    mysqli_query($con,"DELETE FROM tblshop WHERE id='$remove_id'") or die('query failed');
    header('location:shop.php');
}

if(isset($_GET['delete_all'])){
  mysqli_query($con,"DELETE FROM tblshop WHERE email='$uname'") or die('query failed');
  header('location:shop.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>shop</title>
    <style>
        .btn1
        {
          margin-top: 1rem;
          display: inline-block;
          padding: .4rem 4rem;
          background:  var(--orange);
          color: #fff;
          font-size: 1.5rem;
          cursor: pointer; 
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

<div class="main-about">
        <div class="banner-text">
            <h2>Add To Cart</h2>
            <p> <a href="home.php">Home >> </a> Shop </p>
        </div>

    </div>

    <?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>
    
    <div class="container">

    <section class="product">
    <h2 style="text-align: center;color:black;font-size: 2.1rem;font-family:'Times New Roman', Times, serif;font-weight:600;">OUR <span style="color: #bac34e;"> PRODUCTS </span></h2>
       

<div class="box-container">
        
          <?php
          
          $query="select * from tblproduct";

          $result=mysqli_query($con,$query);

          if(mysqli_num_rows($result)>0)
          {
            while($fetch=mysqli_fetch_assoc($result))

            {
              ?>
              
            <form action="" method="POST">
              <div class="box">
              <img src="<?php echo $fetch['image']; ?>" alt="" >
              <h5 class="name"><?php echo $fetch['name']?></h5>
              <div class="price"><?php echo $fetch['price']; ?> /-</div>
              <input type="number" min="1" name="quantity" value="1">
              <input type="hidden" name="image" value="<?php echo $fetch['image']; ?>">
            <input type="hidden" name="name" value="<?php echo $fetch['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $fetch['price']; ?>">
              <input type="submit" value="Add To Cart" name="add_to_cart" class="btn1">
              </div>
            </form>
        <?php
        
      }
    }
        ?>
           
  
</div>

</section>
</div>

<div class="shopping-cart1">
        <h1 class="heading1">Shooping-Cart</h1>
       <table>
            <thead>
                <th>image</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>total price</th>
                <th>action</th>
            </thead>
            <tbody>
            <?php
            $grand_total=0;
            $query="select * from tblshop where email='$uname'";
            $cart_query=mysqli_query($con,$query);
            if(mysqli_num_rows($cart_query)>0){
            while($fetch_cart=mysqli_fetch_assoc($cart_query)){
            ?>
            <tr>
                <td><img src="<?php echo $fetch_cart['image'];?>" height="100" alt=""></td>
                <td><?php echo $fetch_cart['name'];?></td>
                <td><?php echo $fetch_cart['price'];?></td>
                <td>
                    <form action="" method="POST">
                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id'];?>">
                        <input type="number"  name="cart_quantity" value="<?php echo $fetch_cart['qun'];?>">
                        <input type="submit" name="update_cart" value="update" class="btn-primary">
                    </form>
                </td>
                <td><?php echo $sub_total=number_format((int)$fetch_cart['price'] * (int)$fetch_cart['qun']); ?>/-</td>
                
                 <td><a href="shop.php?remove=<?php echo $fetch_cart['id'];?>" class="btn" onclick="return confirm('remove item from cart?');" style="background-color:red;color:snow;">remove</a></td> 
            </tr>
           
            <?php
                $grand_total+=$sub_total;
                };
            }else{
                echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
            }
            ?>
            <tr class="table-bottom">
                <td colspan="4">Grand total :</td>
                <td><?php echo $grand_total; ?>/-</td>
                <td><a href="shop.php?delete_all" onclick="return confirm('delete from all cart');" class="btn <?php echo ($grand_total > 1)?'':'disabled';?>" style="background-color:red;color:snow;">delete all</a></td>
            </tr>
            
            </tbody>
        </table>
            <div class="cart-btn">
                <a href="#" class="btn <?php echo ($grand_total > 1)?'':'disabled';?>" style="background-color:blue;color:snow;">proceed to checkout</a>
            </div>

    </div>
</div>
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