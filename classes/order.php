<?php
require_once "database.php";

class Order extends Database{
  public function createOrder($order_id, $user_id,$total_price,$checkout_date){
    // $sql = "SELECT SUM(total_price) FROM cart WHERE user_id = $user_id ";
    // $total = $product_price * $quantity;
    $total_price = $order->getorder($_SESSION['user_id']);
    $sql = "INSERT INTO `orders`(user_id, total_price, checkout_time_date) VALUES $user_id,$cart_total,$checkout_date WHERE user_id = $user_id";

    if($this->conn->query($sql)){
      header("location: ../views/order.php");
      exit;
    }else{
      die("Error send to data: " . $this->conn->error);
    }
  }

  public function getOrder($user_id){
    $sql = "SELECT order_id, user_id, total_price, checkout_time_date FROM orders INNER JOIN cart ON  orders.user_id = cart.user_id WHERE user_id = $user_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error counting to Cart: " . $this->conn->error);
    }
  }

}
?>