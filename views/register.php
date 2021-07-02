
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
  body{
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background: -moz-linear-gradient(-45deg, #ffe0e3 32%, #a7e0e5 68%) ;
    background: -webkit-linear-gradient(-45deg, #ffe0e3 32%,#a7e0e5 68%);
    background: linear-gradient(135deg,  #ffe0e3 32%,#a7e0e5 68%);
  }

  </style>
</head>
<body>
<div class="container my-3">
  <div class="card col-6 mx-auto">
    <div class="card-header bg-transparent">
      <h1 class="text-center font-italic">REGISTER</h1>
    </div>
    <div class="card-body">
      <form action="../actions/register.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control my-2" autofocus required>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control my-2" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control my-2" required>

        <label for="contact_number">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" class="form-control my-2" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control my-2" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control my-2" required>
    </div>
        <div class="card-footer text-right bg-white border-0 bg-transparent">
          <button type="submit" class="btn btn-outline-info ">Register</button>
          <p class="text-center mt-3 font-italic">Registered already? <a href="index.php">Log in.</a></p>
        </div>
      </form>
  </div>
</div>
</body>
</html>