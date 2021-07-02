<?php
session_start();
include "../classes/user.php";
$user = new User;
$user_details = $user->getUser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
  <title>Delete User</title>
</head>
<body>
<div class="container">
  <div class="card my-5">
  <h2 class="text-center text-danger display-3">Delete User</h2>
  </div>
  <div class="card-body">
    <div class="text-center">
      <p class="">Are you sure to delete ?</p>  
    </div>
  </div>
  <div class="row">
    <div class="col-6">
      <a href="dashboard.php" class="btn btn-outline-danger">Delete</a>
    </div>
    <div class="col-6">
      <a href="../actions/delete-user.php" class="btn btn-outline-warning">Cancel</a>
    </div>
  </div>
</div>
  
</body>
</html>