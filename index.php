<?php
include("dbconnect.php");
session_start();
if (isset($_SESSION["login_user"]))
{
  header("location: /home");
}
else
{
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAP Treasure Hunt</title>
    <link rel="stylesheet" type="text/css" href="css/dap.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

  </head>
  <body>
    <div class ="container">
      <div class="page-header">
        <h1>Online Treasure Hunt </h1>
      </div>
      <div class ="login-box">
        <fieldset><legend id ="legend">User Login </legend>
          <form method = "POST" action = "login.php" name="User login">
            <br><i class="mdi-action-account-box"></i> Username : <input id = "box" type ="text" name = "username" required ><br>
            <br><i class="mdi-editor-border-color"></i> Password :<input id ="box" type = "password" name = "password" required> <br>
            <br> <input id ="button" type ="submit" value ="Login" ><br>
          </form>
        </fieldset>
      </div>

      <div class ="register">
        <fieldset><legend>New User? Register Here</legend>
          <form method ="POST" action="register.php" name="User register">
            <br>Desired Username <input id ="box" type ="text" name="newuser" required><br>
            <br>Your Email ID <input id ="box" type ="text" name ="email" required ><br>
            <br>Password <input id ="box" type = "password" name ="newpass" required ><br>
            <br><input id ="button" type ="submit" name ="user-register" value = "Register"><br>
          </form>
        </fieldset>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>

  <?php
}
?>
