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
      </div>
    </nav>



  </body>
  <!--Admin Page ends Here-->
  <?php
}

?>
