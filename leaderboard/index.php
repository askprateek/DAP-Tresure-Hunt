<?php
include("../dbconnect.php");
?>
<div class ="container" >
  <div class ="jumbotron">
    <?php
    $sql = "SELECT * FROM users ORDER BY level ASC, time_stamp ASC";
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
