<?php
include "../classes/user.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT); //password_bcrypt - currently the strongest algorithm / $2y$ format / 60 characters long
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];

$user = new User;
$user->createUser($first_name, $last_name, $username, $password, $address, $contact_number);
?>