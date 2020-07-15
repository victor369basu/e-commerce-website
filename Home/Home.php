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
    <title>Victor Owl</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

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
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="navbar-brand" href="#">&nbsp;Victor's Owl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/e-commerce/product/index_product.html">courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About us</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <?php if($_SESSION['signin']=='logout'){ ?>
              <a class="btn btn-outline-primary" href="http://localhost/e-commerce/sign-in/index.php">Sign In</a>
        <?php }else{ ?>
          <button class="btn btn-outline-success my-2 my-sm-0" style="color:chartreuse"><?php echo $_SESSION['user'].", ".$_SESSION['signin']; ?></button>
          <a class="btn btn-outline-primary" style="color:white" href="http://localhost/e-commerce/Home/logout.php">Sign Out</a>
        <?php } ?>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <img src="http://localhost/e-commerce/Home/home_img/3.jpg" ></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 style="color:black;text-shadow: 2px 2px 4px white;">Welome to the world's leading A.I. Platform.</h1>
            <p>Learn, develop and deploy the best. Your trust, our gaurantee.</p>
            <p><a class="btn btn-lg btn-primary" href="http://localhost/e-commerce/sign-in/signUp.php" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <img src="http://localhost/e-commerce/Home/home_img/1.jpg" ></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:black;text-shadow: 2px 2px 4px white;">From Noob to the Grand Master.</h1>
            <p style="text-shadow: 2px 2px 4px black;">No matter how much unskilled you are with Data Science and A.I. or rather
              don't know how to deploying your A.I. model with through web-application, android or IoS we are always with you.
            We would hold your hand and take you from the sea-bed to the mountains of Grand masters.</p>
            <p><a class="btn btn-lg btn-primary" href="http://localhost/e-commerce/product/index_product.html" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/>
        <img src="http://localhost/e-commerce/Home/home_img/1.jpg" ></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1 style="color:black;text-shadow: 2px 2px 4px white;">Taught by the best.</h1>
            <p style="color:white;text-shadow: 2px 2px 4px black;">We travelled the world, and convinced the best and renouned Data scientists and A.I. researchers to guid you as your mentor.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Develop your skill in <span class="text-muted">Machine Learning, Deep Learning and Data Science.</span></h2>
        <p class="lead">We Provide you the best package options to select and master. We provide you packages with respect to
        frameworks which makes selection process much easier for you.</p>
      </div>
      <div class="col-md-5">
        <img src="http://localhost/e-commerce/Home/home_img/12.jpg" style="width: 80%; height: 300px; border-radius: 19px 0 19px 0;">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Learn how to <span class="text-muted">deploy A.I. models.</span></h2>
        <p class="lead">Learn how to deploy your A.I. model through Web-application, Android and iOS like a Pro.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="http://localhost/e-commerce/Home/home_img/11.png" style="width: 80%; height: 300px; border-radius: 19px 0 19px 0;">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Compete and <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Participate, Compete with the proest of the pro and lern from the war.
          Win Prize money and job offers at the end of these competitions.</p>
      </div>
      <div class="col-md-5">
        <img src="http://localhost/e-commerce/Home/home_img/10.png" style="width: 80%; height: 300px; border-radius: 19px 0 19px 0;">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Victor's Owl, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
