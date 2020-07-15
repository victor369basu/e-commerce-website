<?php
    include("config.php");
    session_start();
    function transform($content, $con) {
      $content = stripcslashes($content);
      $content = mysqli_real_escape_string($con, $content);
      return $content;
     }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $first = $_POST['firstName'];
      $last = $_POST['lastName'];
      $country = $_POST['country'];
      $city = $_POST['city'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      //to prevent from mysqli injection
      $first = transform($first,$con);
      $last = transform($last,$con);
      $country = transform($country,$con);
      $city = transform($city,$con);
      $phone = transform($phone,$con);
      $email = transform($email,$con);
      $password = transform($password,$con);

      $sql = "select * from signup where email = '$email'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1){
            echo "<h1><center> User already exist. </center></h1>";
            $_SESSION['signin'] = "User already exist.";
            header("Location: http://localhost/e-commerce/sign-in/signUp.php");
        }
        else{
          $sql = "INSERT INTO signup (first_name,last_name,country,city,contact_no,email,password) VALUES ('$first','$last','$country','$city','$phone','$email','$password')";
          $result = mysqli_query($con, $sql) or die("Could Not Perform the Query");;
          echo "<h1><center>registration successful. </center></h1>";
          $_SESSION['signin'] = $email;
          $_SESSION['user'] = $first." ".$last;
          $_SESSION['success'] = "You are now logged in";
          $_SESSION['id']=$row['id'];
          header("Location: http://localhost/e-commerce/Home/Home.php");
        }
      }
?>
