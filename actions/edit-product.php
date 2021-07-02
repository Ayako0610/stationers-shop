<?php
include "../classes/product.php";

$product_id = $_POST['product_id'];
$category_id = $_POST['category_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];

$product = new Product;
if(empty($_FILES['product_photo']['name'])){
  // echo "Foo";
  $product->updateProduct($product_id,$category_id,$product_name,$product_price,$product_description);
}else{
  // echo "Bar";
  $photo_name = $_FILES['product_photo']['name'];
  $tmp_name = $_FILES['product_photo']['tmp_name'];

  // print_r($_FILES);
  $product->updateProductWithPhoto($product_id,$category_id,$product_name,$product_price,$product_description,$photo_name,$tmp_name);
}

?>