<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1f22affdad.js" crossorigin="anonymous"></script>
  <title>Login</title>
  <style>
  .card{
    height: 282px;
    color: #ff69b4;
    border-color: #ff69b4;
  }
  ::placeholder{
    color:  #CCFFFF !important;
    opacity: 0.6 !important;
  }

  
  </style>
</head>
<body class="bg-dark">
<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <div class="card my-5 ml-5 bg-dark">
        <div class="card-body">
          <h2 class="text-center display-5">Login</h2>
          <p class="text-center font-italic">For staff</p>
            <form action="../actions/staff-login.php" method="post">
              <input type="text" name="s_username" placeholder="USERNAME" class="form-control my-2 bg-dark text-white" required autofocus>

              <input type="password" name="s_password" placeholder="PASSWORD" class="form-control my-2 bg-dark text-white" required>
              <div class="card-footer bg-dark text-right">
                <button type="submit" class="btn bg-white">Log in</button>
              </div>
            </form>       
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card my-5 mr-5 bg-dark">
        <div class="card-body text-center">
          <h2 class="display-5">Do you have an account?</h2>
          <p class="font-italic">If you don't, create one here.</p>
          <a href="staff-register.php" class="btn btn-outline-info d-block mx-1 my-3">Create Account</a>
        
          <a href="../views" class="btn btn-outline-warning d-block mx-1 my-3">Login as Customer</a>
        </div>
      </div>
    </div>
  </div>  
</div>
</body>
</html>