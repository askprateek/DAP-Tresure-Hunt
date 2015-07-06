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
    <nav style="margin-bottom:10px;">
      <div class="nav-wrapper black">
        <a href="#" class="brand-logo center">DAP Treasure Hunt</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="/hunt/admin">Admin Home</a></li>
          <li><a href="/hunt/logs">Logs</a></li>
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
        <!-- Current set of Questions -->

        <table class="striped">
        <thead>
          <tr>
              <th data-field="name"></th>
              <th data-field="id">Question</th>
              <th data-field="answr">Answer</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM questions ORDER BY q_id Asc";
          $result=mysql_query($sql);
          while ($row=mysql_fetch_array($result))
          {
            ?>

          <tr>
            <td><?php echo $row['q_id'] ?></td>
            <td><?php echo $row['question'] ?></td>
            <td><?php echo $row['answer'] ?></td>
          </tr>
          <?php
        }

           ?>
        </tbody>
      </table>

      </div>

      <div class="col l3 lime lighten-2" style="height:100%">

        <!-- LIVE LOGS -->
        <table class="striped">
        <thead>
          <tr>
              <th data-field="name">Name</th>
              <th data-field="id">Level</th>
              <th data-field="answr">Answer</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM logs ORDER BY id DESC";
          $result=mysql_query($sql);
          while ($row=mysql_fetch_array($result))
          {
            ?>

          <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['qid'] ?></td>
            <td><?php echo $row['answer'] ?></td>
          </tr>
          <?php
        }

           ?>
        </tbody>
      </table>

      </div>

    </div>


  </body>
  <!--Admin Page ends Here-->
  <?php
}

?>
