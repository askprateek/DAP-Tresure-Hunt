<?php

ob_start();
session_start();
include("dbconnect.php");
if (!isset($_SESSION["login_user"]))
{
	$user=mysql_real_escape_string(stripslashes($_POST["username"]));
	$pass=mysql_real_escape_string(stripslashes($_POST["password"]));

	$sql="SELECT * FROM users WHERE username='$user' and password='$pass' ";
	$result=mysql_query($sql);
	if ($result)
	{
		$_SESSION["login_user"]=$user;
		header("location:/home");
	}
	else {
		$msg="Wrong Username or Password";
	}

}
else {
	header("location: /home");
}
ob_end_flush();
?>
