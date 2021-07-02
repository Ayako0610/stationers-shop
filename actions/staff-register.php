<?php
include "../classes/staff.php";

$s_first_name = $_POST['s_first_name'];
$s_last_name = $_POST['s_last_name'];
$s_username = $_POST['s_username'];
$s_password = password_hash($_POST['s_password'],PASSWORD_DEFAULT); 

$staff = new Staff;
$staff->createStaff($s_first_name, $s_last_name, $s_username, $s_password,);
?>