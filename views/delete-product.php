<?php
include "../classes/product.php";
$product = new Product;
$product_details = $product->getProduct($_GET['product_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
  <title>Delete</title>
</head>
<body>
  <main class="container" style="padding-top:80px">
    <div class="card w-25 mx-auto border-0">
      <h2 class="text-center text-danger">DELETE  PRODUCT</h2>
    </div>
    <div class="card-body">
      <div class="text-center mb-4">
        <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
        <p class="font-weight-bold mb-0">Are you sure you want to delete <?= $product_details['product_name']?></p>
      </div>
      <div class="row">
        <div class="col">
          <a href="product.php" class="btn btn-secondary btn-block">Cancel</a>
        </div>
        <div class="col">
          <a href="../actions/delete-product.php?product_id=<?= $product_details['product_id']?>" class="btn btn-outline-danger btn-block">Delete</a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>