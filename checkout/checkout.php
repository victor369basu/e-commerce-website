<?php
session_start();
include('../sign-in/config.php');

function checkout_decode($code)
{
  $decode = explode("_",$code);
  $level = $decode[0];
  $prod = $decode[1];
  if ($prod=='tf')$product='Learn Tensorflow';
  if ($prod=='torch')$product='Learn PyTorch';
  if ($prod=='cpt')$product='Join Competitions';
  if ($prod=='web')$product='Deploy A.I. Web application';
  if ($prod=='r')$product='Learn R';
  if ($level=='n2p') $category="from Noob to Pro" ;
  if ($level=='p2m') $category="from Pro to Master" ;
  if ($level=='m2gm') $category="from Master to Grand Master" ;
  if ($level=='n2gm') $category="from Noob to Grand Master" ;
  if ($level=='noP') $category="Compete for no price money" ;
  if ($level=='P') $category="Compete for price money" ;
  return array($product, $category);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">1</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php $prod = checkout_decode($_SESSION['product']); echo  $prod[0] ?></h6>
            <small class="text-muted"><?php echo $prod[1] ?></small>
          </div>
          <span class="text-muted"><?php echo "$".$_SESSION['price'] ?></span>
        </li>
        <!--li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li-->
        <!--li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li-->
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
        <?php error_reporting(~E_NOTICE); ?>
        <?php if ($_GET['promo']) { if ($_GET['promo']=='JGEC'){ $_SESSION['total_bill'] = $_SESSION['price']-5 ?>
                <h6 class="my-0">Promo code</h6>
                <small>JGEC</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
          <?php } else { $_SESSION['total_bill'] = $_SESSION['price']?>
            <h6 class="my-0" style="color:red">Wrong Promo code</h6>
          </div>
          <span class="text-success">-$0</span>
        </li>
          <?php }} ?>
        <!--li class="list-group-item d-flex justify-content-between red-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>JGEC</small>
          </div>
          <span class="text-success">-$5</span>
        </li-->
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong><?php echo "$".$_SESSION['total_bill'] ?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code" name='promo'>
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary"
            onclick="window.location.href='?promo=';">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="http://localhost/e-commerce/checkout/checkout_update.php" method="POST" novalidate>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name='address_1' id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name='address_2' id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select name='country_' class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
              <option>India</option>
              <option>Japan</option>
              <option>Africa</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <input type="text" name='state_' class="form-control" id="state" placeholder="California" required>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name='zip' placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit" value="Credit card">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit" value="Debit card">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal" value="UPI payment">UPI payment</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input name='card_name' type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="tel" name='card_number' class="form-control" id="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <div class="date-field">
                <div class="month">
                  <select name="month_exp">
                    <option >Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                  </select>
                </div>
                <div class="year">
                  <select name="year_exp">
                    <option >Year</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                  </select>
                </div>
              </div>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="tel" name='card_cvv' maxlength="10" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Victor's Owl</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>
</html>
