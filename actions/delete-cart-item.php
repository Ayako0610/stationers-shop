<?php
include "../classes/cart.php";
$cart_id = $_GET['cart_id'];

$cart = new Cart;
$cart->deleteCartProduct($cart_id);
?>