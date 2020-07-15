<?php
    include("../sign-in/config.php");
    session_start();

    function transform($content, $con) {
      $content = stripcslashes($content);
      $content = mysqli_real_escape_string($con, $content);
      return $content;
     }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $time_stamp = date('Y-m-d H:i:s');
      $address_1 = $_POST['address_1'];
      $address_2 = $_POST['address_2'];
      $country = $_POST['country_'];
      $state = $_POST['state_'];
      $zip = $_POST['zip'];
      $payment_opt = $_POST['paymentMethod'];
      $card_name = $_POST['card_name'];
      $card_number = $_POST['card_number'];
      $month_exp = $_POST['month_exp'];
      $year_exp = $_POST['year_exp'];
      $card_cvv = $_POST['card_cvv'];
      $product = $_SESSION['product'];
      $total_bill = (string)$_SESSION['total_bill'];
      $email = $_SESSION['signin'];
      $user = $_SESSION['user'];

      $time_stamp = transform($time_stamp,$con);
      $address_1 = transform($address_1,$con);
      $address_2 = transform($address_2,$con);
      $country = transform($country,$con);
      $state = transform($state,$con);
      $zip = transform($zip,$con);
      $payment_opt = transform($payment_opt,$con);
      $card_name = transform($card_name,$con);
      $card_number = transform($card_number,$con);
      $month_exp = transform($month_exp,$con);
      $year_exp = transform($year_exp,$con);
      $card_cvv = transform($card_cvv,$con);
      $product = transform($product,$con);
      $total_bill = transform($total_bill,$con);
      $email = transform($email,$con);
      $user = transform($user,$con);

      $sql = "INSERT INTO  checkout ( time_stamp,address_1,address_2,country,state,zip,
        payment_option,card_name,card_number,card_cvv,month_exp,year_exp,
        product_code,total_bill,email,user) VALUES ('$time_stamp','$address_1','$address_2','$country','$state',
        '$zip','$payment_opt','$card_name','$card_number','$card_cvv','$month_exp','$year_exp','$product',
        '$total_bill','$email','$user')";
      $result = mysqli_query($con, $sql) or die("Could Not Perform the Query");
      echo "<h1><center>registration successful. </center></h1>";
      $_SESSION['timestamp'] = $time_stamp;
      $_SESSION['card'] =$card_number;
      header("Location: http://localhost/e-commerce/cover/purchase.php");
    }

?>
