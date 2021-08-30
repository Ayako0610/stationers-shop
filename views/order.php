<?php
session_start();
include "../classes/order.php";

$order = new Order;
$order_details = $order->getOrder($_GET['order_id']);
// print_r($order_details);
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
  body{
    background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
    /* background-color:#4158D0;
    background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
    height: 100%; */
  }
  .card{
    /* height: 600px; */
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
          <label for="username"></label>
          <h5>Order Number: NO.<?= $_GET['order_id'] ?></h5>
          <h5>Oder Date: <?= $order_details['checkout_time_date'] ?></h5>
          <h5>Full Nme : <?= $order_details['first_name'] ?> <?= $order_details['last_name'] ?></h5>
          <h5>Total quantity: # <?= $order_details['total_quantity'] ?></h5>
          <h5 class ="mb-3">Total Price: $<?= $order_details['total_price'] ?></h5>
          <!-- <h5>Summary :</h5> -->
          <a href="../views/dashboard.php" class="btn btn-success d-block mt-2 mx-3
          ">View more</a>

        </div>
      </div>
    </div>
  </div>
</body>
</html>