<?php

  require 'core/session.php';
  require 'core/config.php';
  include 'core/user_key.php';

//  require 'core/redirect.php';

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
  <body>

      <div class="cover">
        <nav class="nav_u">
        
          <ul>
          <li><a href="profile.php">Home</a></li>
            <li><a href="message.php">Add Complaints</a></li>
          <li><a href="logout.php" onClick="javascript:return confirm ('Are you really want to delete ?');">Logout</a></li>
            
          </ul>
          

          
        
        </nav>

        <p class="text-right pdd">
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">

      

          <div class="content">
            <div class="container">
            
                  <div class="col-lg-12">

                      <h2 class="text-center">How to complain?</h2>
                      <br><br><br>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>First</h3>
                            <p>Submit offline complaints at the Student Section office in person.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Second</h3>
                            <p>For assistance, students may contact to Student Section office during office hours (12 PM to 4 PM, Monday to Friday) at +91-96825 46536.</p>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="quotes blg text-center">
                          <h3>Third</h3>
                            <p>The Best way to complain you can use our online complaints form.</p>
                        </div>
                      </div>

                    <div class="col-lg-12">
                        <p>Your complaint will be recorded and dealt with by the most appropriate team or person in your area.</p>
                    </div>

              <div class="content">
                <div class="col-lg-12">
                  <div class="posts">
                    <?php
                      $db=mysql_query("SELECT * FROM `posts` ");
                      while($data=mysql_fetch_array($db)) {
                      echo "<br> <br> <div class='quotes glow'> ";
                      echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
                      echo "<p> Story : ".$data['story']."<br><br>";
                      echo " Posted By : ".$data['session_name']."<br>";
                      echo "</p></div><br><br>";
                     }
                    ?>
                  </div>
                </div>
              </div>


            </div>


            <div class="col-lg-12">
                  <div class="jumbotron india_cover"></div>
            </div>

          </div>
        </div>
      </div>
     
      <footer>
      <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
      </footer>





  <?php include 'core/jsscript.php'; ?>
  </body>
</html>
