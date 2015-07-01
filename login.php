<?php

ob_start();
session_start();
include("dbconnect.php");
$user=mysql_real_escape_string(stripslashes($_POST["username"]));
$pass=md5(mysql_real_escape_string(stripslashes($_POST["password"])));

$sql="SELECT * FROM users WHERE username='$user' and password='$pass' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$details=mysql_fetch_row($result);
if ($count==1)
{
	if($details[5]=='admin')
	{
		$_SESSION['status']='admin';
		$_SESSION[login_user]=$user;
		header("location:/hunt/admin");
	}
	elseif($details[5]=='user')
	{
		$_SESSION['status']='user';
		$_SESSION[login_user]=$user;
		header("location:/hunt/home");
	}
}
else {
	echo "Wrong Details";
}
ob_end_flush();
?>
