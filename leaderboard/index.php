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
  <div class ="jumbotron">
    <?php
    $sql = "SELECT * FROM users ORDER BY level DESC, time_stamp ASC";
    $result =mysql_query($sql);
    if (mysql_fetch_row($result) > 0)
    {
      while ($row=mysql_fetch_assoc($result))
      {
        echo $row['username']."  ".$row['email_id']."  ".$row['level'];?> <br><?php
      }
    }

    ?>

  </div>
</div>
</body>
</html>
