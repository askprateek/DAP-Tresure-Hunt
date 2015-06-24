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
    <div class="container" >
    <div>
      <h1>Online Treasure Hunt</h1>
    </div>
      <div class="row">
        <div class="col s12 m6 l6">
          <!-- Posts list is displayed here -->
          <div class="widget-item z-depth-1">

              <div class="row">
                <form class="col s12 offset" action ="login.php" method="POST">

                    <div class="col s12">
                      <b>Login Here</b>
                    </div>
                    <div class="input-field col s12">
                      <i class="mdi-action-account-circle prefix"></i>
                      <input id="username" type="text" name="username" class="validate">
                      <label for="username">Username</label>
                    </div>

                    <div class="input-field col s12">
                      <i class="mdi-action-https prefix"></i>
                      <input id="password" type="password" name = "password" class="validate">
                      <label for="password">Password</label>
                    </div>
                    <div class="col s1">
                    <button class="btn waves-effect waves-light" type="submit">Login<i class="mdi-action-lock-open right"></i></button>
                  </div>

                </form>

              </div>
            </div>
          </div>

      <div class="col s12 m6 l6">
                <!-- widgets are displayed here -->
                <div class="widget-item z-depth-1">

                    <div class="row">
                      <form class="col s12 offset" action ="register.php" method="POST">

                          <div class="col s12">
                            <b>Login Here</b>
                          </div>
                          <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="username" type="text" class="validate">
                            <label for="username">Username</label>
                          </div>
                          <div class="input-field col s12">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input id="email_id" type="text" class="validate">
                            <label for="email_id">Email ID</label>
                          </div>

                          <div class="input-field col s12">
                            <i class="mdi-action-https prefix"></i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                          </div>
                          <div class="col s1">
                          <button class="btn waves-effect waves-light" type="submit">Register<i class="mdi-action-lock-open right"></i></button>
                        </div>

                      </form>

                    </div>
                  </div>
                </div>
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
