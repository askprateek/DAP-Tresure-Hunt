<?php
session_start();
require("../dbconnect.php");
if( isset( $_SESSION["login_user"]))
{
  $user=$_SESSION["login_user"];
  ?>

  <html>
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/dap.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>
  <title> Welcome <?php $_SESSION["login_user"]; ?> </title>
  <body>
    <div class ="container">
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">DAP Treasure Hunt</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="../leaderboard">Leaderboard</a></li>
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class = "row">
        <div class="col s12" align ="center">

          <h1 align="center"> Question will be shown here </h1>
          <?php
          //  $user=$_SESSION["login_user"];
          //echo $user;
          $sql= "SELECT level FROM users WHERE username = '$user'";
          $level = mysql_fetch_row(mysql_query($sql));
          $question = "SELECT * FROM questions WHERE q_id ='$level[0]'";
          $result = mysql_query($question);
          $result =mysql_fetch_row($result);
          ?> <h2> <?php echo $result[1]; ?></h2>
          <form class="form-horizontal" role="form" action = "check.php" method = "POST">
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-8">
                <input class="form-control" id="box" name ="user_answer" type="text" placeholder = "Your Answer Here :v">
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      // Activate the side menu
      $(".button-collapse").sideNav();
    });
    </script>
    </html>
    <?php
  }
  else {
    echo "NO Access";
  }
  ?>
