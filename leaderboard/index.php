<?php
include("../dbconnect.php");
?>
<html>
    <head>
      <!--Import materialize.css
      <link type="text/css" rel="stylesheet" href="../css/dap.css"  media="screen,projection"/>-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
<body class="lime">
    <nav>
      <div class="nav-wrapper black">
        <a href="#" class="brand-logo center">DAP Treasure Hunt</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../home">Home</a></li>
          <li class = "active"><a href="/hunt/leaderboard">Leaderboard</a></li>
          <li><a href="../logout.php">logout</a></li>
        </ul>
      </div>
    </nav>
    <div class ="container" >
    <div class ="row">
      <div class ="col s12" align ="center">
        <table>
          <thead>
            <tr>
              <th data-field="id">Username</th>
              <th data-field="name">Email ID</th>
              <th data-field="price">Level</th>
            </tr>
          </thead>
          <?php
          $sql = "SELECT * FROM users ORDER BY level DESC, time_stamp ASC";
          $result=mysql_query($sql);
          while ($row=mysql_fetch_array($result))
          {
            ?>
            <tbody>
              <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email_id']; ?></td>
                <td><?php echo $row['level']; ?></td>
              </tr>
              <?php
            }

            ?>
          </div>
        </div>

      </div>
    </div>
  </body>
  </html>
