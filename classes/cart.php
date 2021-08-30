<?php
require_once "database.php";

class Cart extends Database{
  public function createCart($product_id,$quantity,$user_id){
    // $prod_price = thisconn getProdPrice($prod id)
    // total = prod price * $quan
    
    $product_price = $this->getProductPrice($product_id);
    $total = $product_price * $quantity;
    $sql_insert = "INSERT INTO `cart`(`quantity`, `product_id`, `user_id`, `total_price`) VALUES ($quantity, $product_id, $user_id, $total)";
    
    if($this->conn->query($sql_insert)){
      header("location: ../views/dashboard.php");
      exit;
    }else{
      die("Error adding to Cart: " . $this->conn->error);
    }
  }

  private function getProductPrice($product_id){
    $sql = "SELECT `product_price` FROM `products` WHERE product_id = $product_id";
    // $result =...
    // $product = result->fetch
    // return $product['product_price'];
    if($result = $this->conn->query($sql)){
      $product = $result->fetch_assoc();
      return $product['product_price'];
    }else{
      die("Error counting to Cart: " . $this->conn->error);
    }
  }

  public function getCart($user_id){
    $sql = "SELECT * FROM `cart` INNER JOIN products ON cart.product_id = products.product_id WHERE cart.user_id = $user_id";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error get cart: " .$this->conn->error);
    }
  }

  public function countCartProducts($user_id){
    $sql = "SELECT SUM(quantity) FROM `cart` WHERE user_id = $user_id";
    
    if($result = $this->conn->query($sql)){
      $cart = $result->fetch_assoc();
      $count = $cart['SUM(quantity)'];
      if($count ==0){
        // echo "foo";
        return 0;
      }else{
        // echo "bar";
        return $count;
      }
    }else{
      die("Error counting to Cart: " . $this->conn->error);
    }
  }

  public function deleteCartProduct($cart_id){
    $sql = "DELETE FROM `cart` WHERE cart_id = $cart_id";
    if($this->conn->query($sql)){
      header("location: ../views/cart.php");
      exit;
    }else{
      die("Error delete product: " .$this->conn->error);
    }
  }
  public function getTotalPrice($user_id){
    
    $sql = "SELECT SUM(total_price) FROM cart WHERE user_id = $user_id ";

    if($result = $this->conn->query($sql)){
        $cart_total = $result->fetch_assoc();
        return $cart_total['SUM(total_price)'];
    }else{
      die("Error cluculate total.");
    }
  }
}
?>