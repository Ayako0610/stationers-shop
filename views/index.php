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
    /* color : #00bfff; */
    position: relative;
    background: #fff0cd;
    box-shadow: 0px 0px 0px 5px #fff0cd;
    border: dashed 2px white;
    padding: 0.2em 0.5em;
    color: #454545;
  }
  .card:after{
     position: absolute;
    content: '';
    right: -7px;
    top: -7px;
    border-width: 0 15px 15px 0;
    border-style: solid;
    border-color: #ffdb88 #fff #ffdb88;
    box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15);
  }
  
  </style>
</head>
<body>
<div class="container my-5">
  <div class="row">
    <div class="col-6">
      <div class="card my-5 ml-5 border-info">
        <div class="card-body ">
          <h2 class="text-center display-5">Login</h2>
            <form action="../actions/login.php" method="post">
              <input type="text" name="username" placeholder="USERNAME" class="form-control my-2" required autofocus>

              <input type="password" name="password" placeholder="PASSWORD" class="form-control my-2" required>
              <div class="card-footer text-right" style="#454545">
                <button type="submit" class="btn btn-outline-dark">Log in</button>
              </div>
            </form>       
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card my-5 mr-5 border-info">
        <div class="card-body text-center">
          <h2 class="display-5">Do you have an account?</h2>
          <p class="font-italic">If you don't, create one here.</p>
          <a href="register.php" class="btn btn-outline-info d-block mx-1 my-3">Create Account</a>
          <p class="font-italic mt-3">Do you have Staff ID ?</p>
          <a href="staff-login.php" class="btn btn-outline-warning d-block mx-1 my-3">Login as Staff</a>
        </div>
      </div>
    </div>
  </div>  
</div>
</body>
</html>