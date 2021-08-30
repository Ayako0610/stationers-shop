<?php
require_once "database.php";

class Order extends Database{
  public function createOrder($user_id,$total_quantity,$total_price,$checkout_date){
    
    $sql = "INSERT INTO `orders`(`user_id`, total_price, total_quantity,checkout_time_date) VALUES ($user_id,$total_price,$total_quantity,'$checkout_date')";

    if($this->conn->query($sql)){
      $order_id = $this->conn->insert_id;
      header("location: ../views/order.php?order_id=$order_id");
      exit;
    }else{
      die("Error send to data: " . $this->conn->error);
    }
  }

  public function getOrder($order_id){
    $sql = "SELECT first_name, last_name, `address`, total_price, total_quantity, checkout_time_date FROM orders INNER JOIN users ON orders.user_id = users.user_id WHERE order_id = $order_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error counting to Cart: " . $this->conn->error);
    }
  }

}
?>