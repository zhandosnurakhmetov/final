<!DOCTYPE html>

<?php
include "db.php";
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <?php
         	include "default_header.php";
         ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
             // include "offline_menu.php"
          ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <br><br><br><br>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          
        </div>
       

     <div class="col-md-4">
          <form class="form-signin" action="to_register.php" method="POST">
                <h2 class="form-signin-heading">Please sign up</h2>
                <label  class="sr-only">Name</label>
                
                <input type="text" name="user_name" class="form-control" placeholder="Name" required autofocus>
                 <label  class="sr-only">Login</label>
               
                <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
                <label class="sr-only">Password</label>
               
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
      </div>
        <div class="col-md-4">
        
        </div>
      </div>
      <br><br><br><br><br><br><br>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
