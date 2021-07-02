<?php
require_once "database.php";

class Product extends Database{
  public function createProduct($category_id,$product_name,$product_price,$product_description,$photo_name,$tmp_name){
    $sql ="INSERT INTO `products`(`product_name`, `product_price`, `product_description`, `product_photo`, `category_id`) VALUES ('$product_name','$product_price','$product_description','$photo_name','$category_id')";
    if($this->conn->query($sql)){
      $destination = "../images/" . basename($photo_name);
      if(move_uploaded_file($tmp_name,$destination)){
        header("location: ../views/product.php");
        exit;
      }else{
        die("Error moving photo.");
      }
      header("location:../views");
      exit;
    }else{
      die("Error create product: ". $this->conn->error);
    }
  }

  public function getAllProducts(){
    $sql = "SELECT * FROM `products` INNER JOIN `categories` ON products.category_id = categories.category_id";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error Get Products: " .$this->conn->error);
    }
  }
  
  public function getProduct($product_id){
    $sql = "SELECT * FROM `products` WHERE product_id = $product_id";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving Products: ".$this->conn->error);
    }
  }
  
  public function getProductPhoto(){
    $sql = "SELECT`product_photo` FROM `products` WHERE product_id = $product_id";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error fetching photo: " .$this->conn->error);
    }
  }

  public function updateProduct($product_id,$category_id,$product_name,$product_price,$product_description){
    $sql ="UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`product_description`='$product_description',`category_id`='$category_id' WHERE product_id = $product_id";

    if($this->conn->query($sql)){
      header("location: ../views/product.php");
      exit;
    }else{
      die ("Error updating product: " .$this->conn->error);
    }
  }

  public function updateProductWithPhoto($product_id,$category_id,$product_name,$product_price,$product_description,$photo_name,$tmp_name){
    $sql = "UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`product_description`='$product_description',`product_photo`='$photo_name',`category_id`='$category_id' WHERE product_id = $product_id";
    if($this->conn->query($sql)){
      $destination = "../images/" . basename($photo_name);
      if(move_uploaded_file($tmp_name,$destination)){
        header("location: ../views/product.php");
        exit;
      }else{
        die("Error updating photo.");
      }
      header("location: ../views/product.php");
    }else{
      die("Error fetching photo: " .$this->conn->error);
    }
  }
  
  public function deleteProduct($product_id){
    $sql = "DELETE FROM products WHERE product_id = $product_id";
    if($this->conn->query($sql)){
      header("location: ../views/product.php");
      exit;
    }else{
      die("Error delete Product: " .$this->conn->error);
    }
  }
}
?>