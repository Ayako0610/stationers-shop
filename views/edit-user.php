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
  <title>Edit User</title>
</head>
<body>
  <div class="container my-3">
    <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center display-3">
            Edit User</h2>
          </div>
          <div class="card-body">
          <form action="../actions/edit-user.php" method="post">
          
          <input type="hidden" name="user_id" id="user_id" value="<?= $user_details['user_id'] ?>">

          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control" value="<?=$user_details['first_name']?>" required autofocus>

          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control" value="<?=$user_details['last_name']?>" required>

          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" value="<?=$user_details['username']?>" required>

          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" value="<?=$user_details['address']?>" required>

          <label for="contact_number">Contact Number</label>
          <input type="number" name="contact_number" class="form-control" value="<?=$user_details['contact_number']?>" required>

          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" value="<?=$user_details['password']?>" required>

          <div class="card-footer bg-white text-right">
            <button type="submit" class="btn btn-outline-info">Save</button>
            <a href="dashboard.php" class="btn btn-outline-dark bg-warning">Cancel</a>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>