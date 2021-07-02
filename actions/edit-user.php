<?php
include "../classes/user.php";
$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$address = $_POST['address'];
$contact_number = $_POST['number'];
$password = $_POST['password'];

$user = new User;
$user->updateUser($user_id,$first_name,$last_name,$username,$address,$contact_number,$password);

?>