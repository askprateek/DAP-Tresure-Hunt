<?php
session_start();
require("../dbconnect.php");
if( isset( $_SESSION["login_user"]))
{
  $user=$_SESSION["login_user"];
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
  <div class = "row">
    <div class="col-sm-12">

      <h1 align="center"> Question will be shown here </h1>
      <?php
    //  $user=$_SESSION["login_user"];
      echo $user;
      $sql= "SELECT level FROM users WHERE username = '$user'";
      $level = mysql_fetch_row(mysql_query($sql));
      $question = "SELECT * FROM questions WHERE q_id ='$level[0]'";
      $result = mysql_query($question);
      $result =mysql_fetch_row($result);
      echo $result[1];

      ?>
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
