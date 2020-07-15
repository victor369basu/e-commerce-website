<?php
session_start();
include('../sign-in/config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Develop with PyTorch</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

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
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark" >
  <h5 class="p-2 text-light">Victor's Owl</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="#">Features</a>
    <a class="p-2 text-light" href="#">Enterprise</a>
    <a class="p-2 text-light" href="#">Support</a>
    <a class="p-2 text-light" href="#">Pricing</a>
  </nav>
  <?php if($_SESSION['signin']=='logout'){ ?>
    <a class="btn btn-outline-primary" href="http://localhost/e-commerce/sign-in/index.php">Sign In</a>
<?php }else{ ?>
<button class="btn btn-outline-success my-2 my-sm-0" style="color:chartreuse"><?php echo $_SESSION['user'].", ".$_SESSION['signin']; ?></button>
<a class="btn btn-outline-primary" style="color:white" href="http://localhost/e-commerce/Home/logout.php">Sign Out</a>
<?php } ?>
<?php
if($_GET){
  if ($_GET['n2p_torch']){
    $_SESSION['price'] = 5;
    $_SESSION['product'] = 'n2p_torch';
  }
  if ($_GET['p2m_torch']){
    $_SESSION['price'] = 20;
    $_SESSION['product'] = 'p2m_torch';
  }
  if ($_GET['m2gm_torch']){
    $_SESSION['price'] = 39;
    $_SESSION['product'] = 'm2gm_torch';
  }
  header("Location: http://localhost/e-commerce/checkout/checkout.php");
}
?>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Develop yourself from noob to Grand-Master in Pytorch. We offer you the best skill in the cheapest price.
  Select your journey as per current scale.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">noob to pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$5 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Introducing basic concepts</li>
          <li>Solve project based on basic concepts</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary" name='n2p_torch'
        onclick="window.location.href='?n2p_torch=1';">Add to Cart</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro to master</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$20 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Introducing advanced concepts</li>
          <li>Solving advanced projects</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" name='p2m_torch'
        onclick="window.location.href='?p2m_torch=1';">Add to Cart</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Master to Grand Master</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$39 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Get guided during competition</li>
          <li>Get job Offers and referals</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" name='m2gm_torch'
        onclick="window.location.href='?m2gm_torch=1';">Add to Cart</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
