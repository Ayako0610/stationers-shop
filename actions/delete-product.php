<?php
include "../classes/product.php";
$product_id = $_GET['product_id'];

$product = new product;
$product->deleteProduct($product_id);
?>