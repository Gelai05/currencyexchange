<?php
include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-light">

 
<div class="container  d-flex justify-content-center align-items-center vh-100  ">
  <div class="card shadow-lg p-5 " style="width:40rem;">
  <h3 class="text-center">Login</h3>
    <form method="POST" action="login.php">
      <div class="form-outline col-lg-6 mx-auto">
        <input type="username" name="username" id="username" class="form-control border-dark" />
        <label class="form-label" for="username">Username</label>
      </div>
      <div class="form-outline col-lg-6 mx-auto">
        <input type="password" name="password" id="password" class="form-control border-dark" />
        <label class="form-label border-dark" for="password">Password</label>
      </div>
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary mx-auto">Sign in</button>
      </div>
    </form>
  </div>
</div>

    
</body>
</html>