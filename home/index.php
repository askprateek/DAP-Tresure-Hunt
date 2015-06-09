<?php
session_start();
if( isset( $_SESSION["login_user"]))
{
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DAP Treasure Hunt</title>
  <link rel="stylesheet" type="text/css" href="../css/dap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
  <title> Welcome <?php $_SESSION["login_user"]; ?> </title>
  <body>
    <div class ="container">
      <div class="panel panel-default">
      <div class ="panels-body">
      <ul class = "nav nav-tabs">
        <li class ="active"> <a href="/" >Home</a> </li>
        <li> <a href="leaderboard.php">Leaderboard</a> </li>
        <li> <a href="../../logout.php">Logout</a> </li>
      </ul>
      Welcome <?php  echo $_SESSION["login_user"]; ?>
    </div>
  </div>
  </div>

</html>

<?php
}
else {
  echo "NO Access";
}
?>
