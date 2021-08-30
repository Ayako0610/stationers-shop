<?php
session_start();
include "../classes/product.php";
include "../classes/category.php";
include "../classes/cart.php";


$category = new Category;
$category_list = $category->getCategories();
$product = new Product;
$product_list = $product->getAllProducts();
$cart = new Cart;
$count_cart = $cart->countCartProducts($_SESSION['user_id']);
// echo "<h1>$count_cart</h1>";
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
  <title>Dashbord</title>
  <style>
  body{
    /* background-image: linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%); */
    /* background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%); */
    background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
  }
  .fa-shopping-cart{
    font-size: 25px ;
  }
  h3{
    position: relative;
    background: #dfefff;
    box-shadow: 0px 0px 0px 5px #dfefff;
    border: dashed 2px white;
    padding: 0.2em 0.5em;
    color: #454545;
  }
  h3:after{
    position: absolute;
    content: '';
    left: -7px;
    top: -7px;
    border-width: 0 0 15px 15px;
    border-style: solid;
    border-color: #fff #fff #a8d4ff;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);
  }
  .header{
    opacity: 0.7;
    height: 450px;
    width: 100%;
    background-image: url("../images/3.jpg");
    background-position: top;
    background-size: cover;
  }
  .card-img{
    border-radius: 10px;
    height: 100px;
    max-width: 100%;
  }
  .input{
    height: 10px;
    width: 30px;
  }
  /* .button{
    display: inline-block;
    border-radius: 10%;
    text-align: center;
    font-size: 8pt;
    background: rgba(255, 102, 255, 0.72);
    cursor: pointer;
    color: rgba(0, 0, 0, 0.96);
  } */
  #cart_count{
    text-align: center;
    padding: 00.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
  }
  </style>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light"   style="background-color: #FFD5EC;">
  <a href="dashboard.php" class="navbar-brand">Stationer's Shop</a>
  <a href="../views/contact.php">Contact Us</a>
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

<div class="container my-3">
  <div class="row">
    <div class="col-3">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center">Categories</h3>
        </div>
        <?php
        while($cat_details = $category_list->fetch_assoc()){
        ?>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $cat_details['category_name']?></li>
          </ul>
          <?php } ?>
      </div>
    </div>
    <div class="col-9">
      <div class="card bg-dark text-white mb-4 header">
        <!-- <div class="text-left text-dark">
          <h2 class="card-title">Stationer's Shop</h2>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div> -->
      </div>    
    </div>
  </div>

  <div class="row">
    <?php
    while($product_details = $product_list->fetch_assoc()){ ?>
    <div class="col-3 my-2">
      <div class="card border-success">
        <input type="hidden" name="product_id" value="<?=$product_details['product_id'] ?>">
        <img src="../images/<?=$product_details['product_photo'] ?>" class="card-img-top" alt="product photo" height="200px">
        <!-- <div class="card-header">
        </div> -->
        <div class="card-body text-left">
          <h5 class="card-title"><?=$product_details['product_name']?></h5>
          <p class="card-text"> $ <?=$product_details['product_price'] ?>(TAX)</p>
          .
          <p class="card-text text-truncate"><?=$product_details['product_description'] ?></p>
        </div>
        <div class="card-footer text-left">
          <form action="../actions/add-to-cart.php" method="post">
            <div class="form-row">
              <input type="hidden" name="product_id" value="<?= $product_details['product_id'] ?>">
              <input type="number" name="quantity" id="quantity" placeholder="Quantity" class="form-control col-9" value="0" min="1" required>
              <button type="submit" class="btn btn-primary col"><i class="fas fa-cart-plus"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
      <?php } 
      ?>      
  </div>
  
</div>

</body>
</html>