<?php


  require 'core/session.php';
  require 'core/config.php';
  require 'core/redirect.php';

  if(isset($_SESSION['username'])===true){
      header("location:profile.php");
  }

  $message="";

  if(empty($_POST)===false){
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
    if(empty($email) || empty($password)){
          header('Location:index.php');
    }else{
        $query1=mysql_query("SELECT * FROM `circle` WHERE id AND email='$email' and password='$password'") or die(mysql_error());
        if(mysql_num_rows($query1)>0){
            $_SESSION['email'] = $_REQUEST['email'];
            header('Location:profile.php');
        }else{
          $message="Your username or password is incorrect";
        }
      }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VIT | Grievance System  </title>
    <link rel="shortcut icon" href="files/img/VIT logo.png">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body >

  
    <div class="animated fadeIn">


    <div class="cover user text-center">
      <h1 class="text-center">VIT Grievance System</h1>
      <div>
        <img height=60px src="./files/img/graduationCap.png" alt="Cap">
      </div>
      <h2>STUDENT LOGIN</h2>
    </div>



      <div class="padd">
        <div class="col-lg-12 text-center">
              <form class="" method="post" autocomplete="off">
                <label for="username"></label>
                <input type="email" name="email" placeholder="Email" id="email">
                <br><br>
                <label for="password"></label>
                <input type="password" name="password" placeholder="Password" id="pass">
                <br><br>
                <button type="submit" class="log">Login</button>
                <br><br>
                <span class="red"><?php echo $message; ?></span>
              </form>
              <br>
                Don't have an acccount ? <a href="signup.php">Sign Up  </a>

        </div>
      </div>

      <div class="links">
        <a href="dummy-login.php">Teacher</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin-login.php">Admin </a>
      </div>

    </div>
    <?php
    include 'footer.php';
    include 'core/jsscript.php';
    ?>


  </body>
</html>
