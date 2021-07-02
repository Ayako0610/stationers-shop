<?php
include "../classes/product.php";
include "../classes/category.php";

$category =new Category;
$category_list = $category->getCategories();
$product = new Product;
$product_details = $product->getProduct($_GET['product_id']);
// print_r($product_data);
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
  <title>Edit product</title>
</head>
<body>
  <div class="container">
    <div class="card w-50 mx-auto">
      <div class="card-header bg-light">
      <h2 class="text-center">Edit Product</h2>
      </div>
      <div class="card-body ">
        <form action="../actions/edit-product.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="product_id" id="product_id" value="<?=$product_details['product_id'] ?>">

          <img src="../images/<?=$product_details['product_photo'] ?>" alt="Product photo" width="100%">

          <div class="custom-file mb-3">
            <label for="upload_photo" class="custom-file-label">Upload Photo</label>
            <input type="file" accept="image/*" name="product_photo" id="upload_photo" class="custom-file-input">
          </div>

          <label for="product_name">Name</label>
          <input type="text" name="product_name" id="product_name" class="form-control mb-2" value="<?=$product_details['product_name'] ?>" required>

          <label for="product_category">Category</label>
          <select name="category_id" id="product_category" class="form-control mb-2">
          <?php
          while($cat_details = $category_list->fetch_assoc()){
          ?>
            <option value="<?= $cat_details['category_id']?>"><?= $cat_details['category_name']?> </option>
          <?php 
          }
          ?>
          </select>

          <label for="product_price">Price</label>
          <input type="number" name="product_price" id="product_price" class="form-control mb-2" value="<?=$product_details['product_price'] ?>" required>
          
          <label for="product_description">Description</label>
          <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control mb-2" required><?=$product_details['product_description'] ?></textarea>

          <div class="text-center">
            <button type="submit" class="btn btn-success">Save</button>
            <a href="product.php" class="btn btn-warning">Cancel</a>
        </form>  
      </div>
    </div>
  </div>
</body>
</html>