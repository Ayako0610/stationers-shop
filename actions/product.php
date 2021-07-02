<?php
include "../classes/product.php";

$category_id = $_POST['category_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
$photo_name = $_FILES['product_photo']['name'];
$tmp_name = $_FILES['product_photo']['tmp_name'];   

$product = new Product;
$product->createProduct($category_id,$product_name,$product_price,$product_description,$photo_name,$tmp_name);

?>