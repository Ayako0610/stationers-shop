<?php
include "../classes/category.php";
include "../classes/product.php";

$category = new Category;
$category_list = $category->getCategories();
$product = new Product;
$product_list = $product->getAllProducts();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
    <title>Product</title>
  </head>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFD5EC;">
  <a href="product.php" class="navbar-brand">Stationer's Shop</a>
  <!-- <a class="nav-link" href="dashboard.php">Home</a> -->
  <!-- <a href="dashboard.php" class="nav-link">Dashboard</a> -->
  <!-- <a href="edit-user.php" class="nav-link">Profile</a> -->
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      <a class="nav-link" href="../actions/staff-logout.php"><i class="fas fa-sign-in-alt"></i></a>
    </form>
  </nav>

  <body>
    <div class="container my-5">
      <div class="row">
        <div class="col-4">
          <div class="card bg-light ">
            <div class="card-header">      
              <h2 class="text-center display-4">Add Product</h2>
            </div>
            <div class="card-body"><!-- FORM -->
              <form action="../actions/product.php" method="post" enctype="multipart/form-data">
                <label for="product_category">Category</label>
                <select name="category_id" id="product_category" class="form-control">
                <?php
                while($cat_details = $category_list->fetch_assoc()){
                ?>
                  <option value="<?= $cat_details['category_id']?>"><?= $cat_details['category_name']?></option>
                <?php 
                }
                ?>
                </select>
              
                <label for="product_name">Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control" required>

                <label for="product_price">Price</label>
                <input type="number" name="product_price" id="product_price" class="form-control" required>
                
                <label for="product_description">Description</label>
                <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control mb-2" required></textarea>

                <div class="custom-file">
                  <label for="upload-photo" class="custom-file-label">Upload Photo</label>
                  <input type="file" accept="image/*" name="product_photo" id="upload-phot" class="custom-file-input">
                </div>
            </div>
                <div class="card-footer text-right">             
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary px-5">
                </div>
              </form>
          </div>
        </div>
        <div class="col-8">
          <h2 class="text-center display-4">All Products</h2>
            <!-- TABLE -->
            <table class="table table-hover">
              <thead class="bg-muted">
                <tr>        
                  <th>#</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th></th>
                </tr>
              </thead>
              <tbody> 
              <?php
              while($product_details = $product_list->fetch_assoc()){
              ?>
                <tr>
                  <td><?=$product_details['product_id'] ?></td>
                  <td class="text-center"><img src="../images/<?=$product_details['product_photo'] ?>" alt="Product photo" height="80px" ></td>
                  <td><?=$product_details['product_name'] ?></td>
                  <td><?=$product_details['product_price'] ?></td>
                  <td><?=$product_details['product_description'] ?></td>
                  <td><?=$product_details['category_name']?></td>
                  <td style="width :95px">
                    <a href="edit-product.php?product_id=<?= $product_details['product_id'] ?>" class="btn btn-outline-info btn-sm"><i class="fas fa-edit"></i></a>

                    <a href="delete-product.php?product_id=<?= $product_details['product_id'] ?>" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                  </td>
                </tr>
              <?php 
              }
              ?> 
              </tbody>
            </table>
        </div>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  
</body>
</html>