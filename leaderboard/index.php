<?php
include("../dbconnect.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DAP Treasure Hunt</title>
  <link rel="stylesheet" type="text/css" href="../css/dap.css">
  <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">

</head>
<body>
  <div class ="container" >
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">DAP Treasure Hunt</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../home">Home</a></li>
          <li class = "active"><a href="/">Leaderboard</a></li>
          <li><a href="../logout.php">logout</a></li>
        </ul>
      </div>
    </nav>
    <div class ="row">
      <div class ="col-s10" align = "center">
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
