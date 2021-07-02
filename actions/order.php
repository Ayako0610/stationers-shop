<?php
session_start();

include "../classes/order.php";
include "../classes/cart.php"

$user_id = $_SESSION['user_id'];
$total_quantity = $_POST['total_quantity'];
$total_price = $_POST['total_price'];
$checkout_date = date("y-m-d h:i:s");

// echo "now is: $checkout_date";
// echo "Now is ". date("Y-m-d h:i:s", $checkout_date);

$order = new Order;
$order->createOrder($order_id,$user_id,$total_price,$checkout_date);
$cart = new Cart;
$total_price = $cart->getTotalPrice($_SESSION['user_id']);
$total_quantity = $cart->getCart($user_id);
?>