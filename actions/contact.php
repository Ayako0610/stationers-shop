<?php
include "../classes/contact.php";

$con_first_name = $_POST['first_name'];
$con_last_name = $_POST['last_name'];
$con_contact_unm = $_POST['contact_num'];
$con_mail = $_POST['mail'];
$con_description = $_POST['contact_description'];

$contact = new Contact;


?>