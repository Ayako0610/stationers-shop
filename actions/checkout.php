<?php
session_start();

include "../classes/order.php";
include "../classes/cart.php";

$cart = new Cart;

$user_id = $_SESSION['user_id'];
$total_quantity = $cart->countCartProducts($user_id);
$total_price = $cart->getTotalPrice($user_id);
date_default_timezone_set("ASIA/TOKYO");
$checkout_date = date("y-m-d h:i:s a");

// echo "now is: $checkout_date";
// echo "Now is ". date("Y-m-d h:i:s", $checkout_date);

$order = new Order;
$order->createOrder($user_id,$total_quantity,$total_price,$checkout_date);

?>