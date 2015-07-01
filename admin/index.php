<?php
session_start();
require("../dbconnect.php");
if ($_SESSION['status']!='admin')
{
  header("location:/hunt/home");
}
else {

  ?>
  <!--Admin Page Starts From Here-->
    <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <body class="lime">
    <nav>
      <div class="nav-wrapper orange darken-1">
        <a href="#" class="brand-logo center">DAP Treasure Hunt</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="/hunt/admin">Admin Home</a></li>
          <li><a href="/logs">Logs</a></li>
          <li ><a href="/hunt/leaderboard">Leaderboard</a></li>
          <li><a href="../logout.php">logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col l2 lime lighten-2" style="height:100%">
        ADmin Panel Here.
        Welcome Admin,
        Enjoy the logs XD.
      </div>

      <div class="col l7" style="height:100%">
        Questions are shown here
      </div>

      <div class="col l3 lime lighten-2" style="height:100%">
        latest logs are shown here

      </div>

    </div>


  </body>
  <!--Admin Page ends Here-->
  <?php
}

?>
