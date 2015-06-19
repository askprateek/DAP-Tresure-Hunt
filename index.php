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
  <html>
      <head>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/dap.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      </head>
  <body>
    <div class ="container">
      <div class="page-header">
        <h1>Online Treasure Hunt</h1>
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

    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

  <?php
}
?>
