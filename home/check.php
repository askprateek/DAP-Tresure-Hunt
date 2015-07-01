<?php
session_start();
require("../dbconnect.php");
if (isset($_SESSION["login_user"]))
{
  $user_answer=$_POST["user_answer"];
  $user=$_SESSION["login_user"];
  $sql="SELECT level FROM users WHERE username = '$user'";
  $level = mysql_fetch_row(mysql_query($sql));
  $logs="INSERT INTO logs (name,qid,answer) VALUES ('$user','$level[0]','$user_answer')";
  $indatabase=mysql_query($logs);
    $sql = "SELECT answer FROM questions WHERE q_id='$level[0]'";
    $ans=mysql_fetch_row(mysql_query($sql));
    if ($user_answer==$ans[0])
    {
      $lvlup=$level[0]+1;
      $sql="UPDATE users SET level='$lvlup' WHERE username='$user'";
      $update=mysql_query($sql);
      if ($update)
      {
        header("location:/hunt/correct.php");
      }
    }
    else {
      header("location:/hunt/home");
    }

}
?>
