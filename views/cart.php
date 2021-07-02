<?php
session_start();

include "../classes/cart.php";
include "../classes/order.php";

$cart = new Cart;
$cart_list = $cart->getCart($_SESSION['user_id']);/* session user id */
// print_r ($cart_list);
// $total->getProductPrice($product_id);
$cart_total = $cart->getTotalPrice($_SESSION['user_id']);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
  <title>Cart</title>
  <style>
  .card{
    margin : auto;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #FFD5EC;">
  <a href="dashboard.php" class="navbar-brand">Stationer's Shop</a>
  <div class="ml-auto">
    <form class="form-inline my-2 my-lg-0">
      <!-- <a class="nav-link" href="../views/cart.php">
        <i class="fas fa-shopping-cart"></i>
        <span id="cart_count"><?= $count_cart ?></span>
      </a> -->
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a class="nav-link" href="index.php"><?=$_SESSION['username']?> <i class="fas fa-sign-in-alt xl-2"></i></a>
    </form>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-9 mt-4">
      <h2 class="text-center"> My Cart</h2>
      <table class="table text-center mt-4">
      <thead>
        <tr>
          <th>Product Photo</th>
          <th>Product Name</th>
          <th>Unit Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th></th> <!-- delete butten -->
        </tr>
      </thead>
      <tbody>
      <?php
      while($cart_details = $cart_list->fetch_assoc()){ 
        //  print_r($cart_details);
        // print_r($_SESSION['user_id']);
      ?>
        <tr>
          <td class="text-center"><img src="../images/<?=$cart_details['product_photo'] ?>" alt="product photo" height="80px"></td>
          <td><?=$cart_details['product_name'] ?></td>
          <td>$<?=$cart_details['product_price'] ?></td>
          <td><?=$cart_details['quantity'] ?></td>
          <td>$<?= $cart_details['total_price']//$cartdetails total ?></td>
          <td>
          <a href="../actions/delete-cart-item.php?cart_id=<?= $cart_details['cart_id']?>"class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
      <?php }?>
      </tbody>
      </table>
    </div>
      <div class="col-3">
        <div class="card my-5 ">
          <div class="card-headder mt-3">
            <h3 class="text-center">Total Price</h3> 
          </div>
          <div class="card-body">
            <!-- <p>Your total price is </p> -->
            <h4 class="text-center">$<?=$cart_total ?></h4>
          </div>
          <div class="text-center my-2 mx-3">
            <form action="../actions/order.php?user_id=<?= $cart_details['user_id']?>" method="post">
            <!-- <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>"> -->
            <!-- <button type="submit" class="btn btn-primary d-block my-2" style="width: 200px;">Checkout</button> -->
            <a href="../views/order.php" class="btn btn-primary d-block mt-2">Checkout</a>

            <a href="../views/dashboard.php" class="btn btn-outline-warning d-block mt-2">Keep  purchasing</a>
           </form>
          </div>
        </div>
     </div>
  </div>
</div> 
</body>
</html>