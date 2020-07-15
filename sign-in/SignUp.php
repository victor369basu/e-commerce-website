<?php
session_start();
include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="http://localhost/e-commerce/sign-in/UpdateDB.php" method="POST">
  <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h1 mb-3 font-weight-normal">Sign up here</h1>
  <h4 class="h4 mb-3 font-weight-normal">join the team</h4>
  <?php if($_SESSION['signin']=='User already exist.'){ ?>
    <p>User already exists.<a href='http://localhost/e-commerce/sign-in/index.php'>Sign In</a></p>
  <?php } ?>
  <label for="inputFirstName" class="sr-only">First Name</label>
  <input type="text" id="inputFirstName" name="firstName" class="form-control" placeholder="First Name" required autofocus>
  <label for="inputLastName" class="sr-only">Last Name</label>
  <input type="text" id="inputLastName" name="lastName" class="form-control" placeholder="Last Name" required autofocus>
  <label for="phone" class="sr-only">Contact no.</label>
  <input type="text" id="country" name="country" class="form-control" placeholder="country" required autofocus>
  <label for="country" class="sr-only">Country</label>
  <input type="text" id="city" name="city" class="form-control" placeholder="city" required autofocus>
  <label for="city" class="sr-only">City</label>
  <input type="tel" id="phone" name="phone" class="form-control" placeholder="Contact no" pattern="[0-9]{10}" maxlength="10" required>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="t&c"> I accept terms & condition
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
</body>
</html>
