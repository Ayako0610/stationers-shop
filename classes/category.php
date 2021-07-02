<?php
require_once "database.php";
class Category extends Database{
  public function getCategories(){
    $sql ="SELECT * FROM categories";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("Error Get Categories: " .$this->conn->error);
    }
  }
 }
?>