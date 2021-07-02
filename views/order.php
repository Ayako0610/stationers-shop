<?php
session_start();
include "../classes/order.php";

$cart = new Cart;
$total_price = $cart->getTotalPrice($_SESSION['user_id']);
$total_quantity = $cart->getCart($user_id);
$order = new Order;
$order_list = $order->createOrder($order_id,$user_id,$total_price,$checkout_date);
$order_detals = getOrder($user_id);
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
  <title>Order</title>
  <style>
  .card{
    height: 400px;
    color : #00bfff;
    position: relative;
    background: #fff0cd;
    box-shadow: 0px 0px 0px 5px #fff0cd;
    border: dashed 2px white;
    padding: 0.2em 0.5em;
    /* color: #454545; */
  }
  .card:after{
     position: absolute;
    content: '';
    right: -7px;
    top: -7px;
    border-width: 0 15px 15px 0;
    border-style: solid;
    border-color: #ffdb88 #fff #ffdb88;
    box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15);
  }
  
  </style>
</head>
<body>
  <div class="container">
    <div class="col-8 mx-5 my-4">
      <div class="card mx-4">
        <div class="card-headder">
        <h3 class="display-3 text-center">Thanks for your order</h3>
        </div>
        <div class="card-body font-italic text-left">
          <form action="../classes/action/order.php" method="post">
          <input type="hidden" name="user_id" value="user_id<?= $order_detals['user_id'] ?>">
          <label for="username"></label>
          <h5>Ordernumber: NO.<?= $order_detals['order_number'] ?></h5>
          <h5>Oder Date: <?= $order_detals['order_date'] ?></h5>
          <h5>Total Price: $<?= $order_detals['total_price'] ?></h5>
          <!-- <h5>Summary :</h5> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>