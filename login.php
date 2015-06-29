<?php

ob_start();
session_start();
include("dbconnect.php");
$user=mysql_real_escape_string(stripslashes($_POST["username"]));
$pass=md5(mysql_real_escape_string(stripslashes($_POST["password"])));

$sql="SELECT * FROM users WHERE username='$user' and password='$pass' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if ($count==1)
{
	$_SESSION["login_user"]=$user;
	header("location:/hunt/home");
}
else {
	echo "Wrong Username or Password";
}
ob_end_flush();
?>
