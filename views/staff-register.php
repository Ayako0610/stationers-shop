<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
  <title>Register</title>
  <style>
  .h1{
    color: #ff69b4;
  }
  </style>
</head>
<body class="bg-dark">
<div class="container my-3 text-white">
  <div class="card col-6 mx-auto bg-dark border-0">
    <div class="card-header bg-transparent text-center font-italic border-0">
      <h1>REGISTER</h1>
      <p>For staff</p>
    </div>
    <div class="card-body">
      <form action="../actions/staff-register.php" method="post">
        <label for="s_first_name">First Name</label>
        <input type="text" name="s_first_name" id="s_first_name" class="form-control my-2 bg-dark text-white" autofocus required>

        <label for="s_last_name">Last Name</label>
        <input type="text" name="s_last_name" id="s_last_name" class="form-control my-2 bg-dark text-white" required>

        <label for="username">Username</label>
        <input type="text" name="s_username" id="s_username" class="form-control my-2 bg-dark text-white" required>

        <label for="s_password">Password</label>
        <input type="password" name="s_password" id="s_password" class="form-control my-2 bg-dark text-white" required>
    </div>

        <div class="card-footer text-right border-0 bg-dark bg-transparent">
          <button type="submit" class="btn btn-outline-info ">Register</button>
          <p class="text-center mt-3 font-italic">Registered already? <a href="staff-login.php">Log in.</a></p>
        </div>
      </form>
  </div>
</div>
</body>
</html>