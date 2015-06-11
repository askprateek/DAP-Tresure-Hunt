<?php
session_start();
require("../dbconnect.php");
if (isset($_SESSION["login_user"]))
{
    $user_answer=$_POST["user_answer"];
    $user=$_SESSION["login_user"];
    $sql="SELECT level FROM users WHERE username = '$user'";
    $level = mysql_fetch_row(mysql_query($sql));
    $sql = "SELECT answer FROM questions WHERE q_id='$level[0]'";
    $ans=mysql_fetch_row(mysql_query($sql));
    if ($user_answer==$ans[0])
    {
      echo "Correct answer";
    }

}
?>
