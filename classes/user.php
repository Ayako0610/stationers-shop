<?php
require_once "database.php";
class User extends Database{
  public function createUser($first_name,$last_name,$username,$password,$address,$contact_number){
    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`, `address`, `contact_number`, `password`) VALUES ('$first_name','$last_name','$username','$address','$contact_number','$password')";

    if($this->conn->query($sql)){
      header("location: ../views/index.php");
      exit;
    }else{
      die("Error create user: ". $this->conn->error);
    }
  }
  public function login($username,$password){
    $sql = "SELECT `user_id`, `username`, `password` FROM `users` WHERE `username`='$username'";
    if($result = $this->conn->query($sql)){
      if($result->num_rows == 1){
        $user_details = $result->fetch_assoc();
        
        if(password_verify($password,$user_details['password'])){
          // create session variables
          session_start();

          $_SESSION['user_id'] = $user_details['user_id'];
          $_SESSION['username'] = $user_details['username'];

          header("location: ../views/dashboard.php");
          exit;

        }else{
          // password is incorrect
          die("Password is incorrect.");
        }
      }else{
        // username does not exist
        die("Username does not exist.");
      }
    }else{
      // query faild
      die("Error: " .$this->conn->error);
    }
  }
  
  public function getUser($user_id){
    $sql = "SELECT * FROM `users` WHERE user_id = $user_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving users: " .$this->conn->error);
    }
  }

  public function updateUser($user_id,$first_name,$last_name,$username,$address,$contact_number,$password){
    $sql ="UPDATE `users` SET `first_name`= '$first_name',`last_name`= '$last_name',`username`= '$username',`address`='$address',`contact_number`='$contact_number',`password`='$password' WHERE user_id = $user_id";

    if($this->conn->query($aql)){
      header("location: ../views/dashboard.php");
      exit;
    }else{
      die("Error updating user: " .$this->conn->error);
    }
  }

  public function deleteUser($user_id){
    $sql = "DELETE FROM `users` WHERE user_id = $user_id";
    if($this->conn->query($sql)){
      header ("location: ../views/dashboard.php");
      exit;
    }else{
      die("Error delete user: " .$this->conn->error);
    }
  }

}

?>