<?php
session_start();
include "../classes/cart.php";

$cart = new Cart;
$count_cart = $cart->countCartProducts($_SESSION['user_id']);

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
  <title>Countact Us</title>
  <style>
  body{
    background-image: linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
  }
  </style>
</head>
<body>
<!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light"   style="background-color: #FFD5EC;">
    <a href="dashboard.php" class="navbar-brand">Stationer's Shop</a>
    <!-- <a href="../views/contact.php">Contact Us</a> -->
    <div class="ml-auto">
      <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="../views/cart.php">
          <i class="fas fa-shopping-cart"></i>
          <span id="cart_count"><?= $count_cart ?></span>
        </a>
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <a class="nav-link" href="index.php"><?=$_SESSION['username']?> <i class="fas fa-sign-in-alt xl-2"></i></a>
      </form>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto">
        <div class="card my-3 mx-3">
          <div class="card-header bg-white border-0">
            <h2 class="text-center my-3">Contact Us</h2>
          </div>
          <div class="card-body">
            <form action="../actions/contact.php" method="post">
            <label for="first_name">Full Name</label>
              <div class="row">
                <!-- <div class="col-6 my-2 mx-3"> -->
                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" required>
                <!-- </div> -->
                <!-- <div class="col-6 my-2 mx-3"> -->
                  <input type="text" name="last_name" id="last_name" class=" form-control" placeholder="Last name" required>
                <!-- </div> -->
              </div>

              <label for="contact_num">Contacut Number</label>
              <input type="text" name="contact_num" id="contact_num" class="form-control"required>

              <label for="mail">Mail Adress</label>
              <input type="email" name="mail" id="mail" class="form-control" required>

              <label for="contact_description">Description</label>
              <textarea name="contact_description" id="contact_description" cols="30" rows="10" class="form-control mb-2" required></textarea>
              
              <div class="card-footer text-center bg-white border-0">
                <!-- <input type="submit" value="submit" name="submit" class="btn btn-dark btn-outline px-5"> -->
                <button type="submit" class="btn btn-light btn-outline-dark px-5">Submit</button>
              </div> 
            </form>  
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>