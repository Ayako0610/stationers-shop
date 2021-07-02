<?php
require_once "database.php";
class Staff extends Database{
  public function createStaff($s_first_name,$s_last_name,$s_username,$s_password){
    $sql ="INSERT INTO `staff`(`staff_first_name`, `staff_last_name`, `staff_username`, `staff_password`) VALUES ('$s_first_name','$s_last_name','$s_username','$s_password')";

    if($this->conn->query($sql)){
      header("location: ../views/staff-login.php"); 
      exit;
    }else{
      die("Error creation user ". $this->conn->error);
    }
  }
  public function login($s_username,$s_password){
    $sql = "SELECT `staff_id`, `staff_username`, `staff_password` FROM `staff` WHERE `staff_username`='$s_username'";
    if($result = $this->conn->query($sql)){
      if($result->num_rows == 1){
        // print_r($result);
        $staff_details = $result->fetch_assoc();
        // print_r($user_details);
        if(password_verify($s_password,$staff_details['staff_password'])){

          session_start();
          $_SESSION['staff_id'] = $staff_details['staff_id'];
          $_SESSION['s_username'] = $staff_details['s_username'];

          header("location: ../views/product.php");
          exit;
        }else{
          die("Password is incorrect.");
        }
      }else{
        die("Username does not exist.");
      }
    }else{
      die("Error: " .$this->conn->error);
    }
  }
  public function getStaff($staff_id){
    $sql = "SELECT * FROM `staff` WHERE staff_id = $staff_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("Error retrieving Staff: " .$this->conn->error);
    }
  }
}
?>