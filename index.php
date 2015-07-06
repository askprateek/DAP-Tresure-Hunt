<?php
include("dbconnect.php");
session_start();
if (isset($_SESSION["login_user"]))
{
  header("location:/hunt/home");
}
else
{
  ?>
  <html>
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/animate.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>
  <body class="lime">

    <nav style="margin-bottom:10px;">
      <div class="nav-wrapper black">
        <div class="animated shake">
        <a href="/hunt" class="brand-logo center">DAP Treasure Hunt</a>
      </div>
      </div>
    </nav>
    <div class="container">
    <div class="row">
      <ul class="tabs">
        <li class="tab col s3"><a class="active"href="#login">Login</a></li>
        <li class="tab col s3"><a href="#signup">Sign Up</a></li>
      </ul>
    </div>
    <div id="login" class="col s12">
      <div class="row">
        <div class="col s12 offset">
          <form method="POST" action ="login.php">

            <div class="input-field col s12">
              <i class="mdi-action-account-circle prefix"></i>
              <input class="username" type="text" name="username" class="validate">
              <label for="username">Username</label>
            </div>

            <div class="input-field col s12">
              <i class="mdi-action-https prefix"></i>
              <input class="password" type="password" name = "password" class="validate">
              <label for="password">Password</label>
            </div>
            <div class="col s1">
              <button class="btn waves-effect waves-light" type="submit">Login<i class="mdi-action-lock-open right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>   <!-- Login Form Ends Here-->

    <div id="signup" class="col s12">
      <div class="row">
        <div class="col s12">

          <form action="register.php" method="POST">
            <div class="input-field col s12">
              <i class="mdi-action-account-circle prefix"></i>
              <input class="username" type="text" name="newuser" class="validate">
              <label for="newuser">Username</label>
            </div>
            <div class="input-field col s12">
              <i class="mdi-maps-local-offer prefix"></i>
              <input id="email" type="text" name = "email" class="validate">
              <label for="email">Email ID</label>
            </div>

            <div class="input-field col s12">
              <i class="mdi-action-https prefix"></i>
              <input class="newpass" type="password" name = "newpass" class="validate">
              <label for="newpass">Password</label>
            </div>
            <div class="col s1">
              <button class="btn waves-effect waves-light" type="submit">Register<i class="mdi-action-lock-open right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--Sign Up ends Here-->
  </div>
</body>





    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $('ul.tabs').tabs();
    });
    </script>
  </body>
  </html>

  <?php
}
?>
