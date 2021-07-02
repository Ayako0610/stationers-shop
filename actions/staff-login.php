<?php
include "../classes/staff.php";
$s_username = $_POST['s_username'];
$s_password = $_POST['s_password'];

$staff = new Staff;
$staff->login($s_username,$s_password);
?>