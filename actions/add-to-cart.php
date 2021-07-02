<?php
session_start();
include "../classes/cart.php";

// $cart_id = $_POST['cart_id'];
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$user_id = $_SESSION['user_id'];

// print_r($_POST);
// echo $user_id;

$cart = new Cart;
$cart->createCart($cart_id,$product_id,$quantity,$user_id);
?>