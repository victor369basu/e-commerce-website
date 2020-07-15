<?php
    include("config.php");
    session_start();
    function transform($content, $con) {
      $content = stripcslashes($content);
      $content = mysqli_real_escape_string($con, $content);
      return $content;
     }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST['email'];
      $password = $_POST['password'];
      //to prevent from mysqli injection
      $email = transform($email,$con);
      $password = transform($password,$con);

      $sql = "select * from signup where email = '$email' and password = '$password'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);

      if($count == 1){
        $_SESSION['signin'] = $email;
        $_SESSION['user'] = $row['first_name']." ".$row['last_name'];
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['id']=$row['id'];
        echo "<h1><center> Login successful </center></h1>";
        header("Location: http://localhost/e-commerce/Home/Home.php");
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
            $_SESSION['signin'] = "no such account.";
            header("Location: http://localhost/e-commerce/sign-in/index.php");
            exit();
        }
      }
?>
