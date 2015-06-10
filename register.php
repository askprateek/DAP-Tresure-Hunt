<?php

require('dbconnect.php');
if (!empty($_POST['user-register']))
{


if(isset($_POST['newuser'])){ $username = $_POST['newuser']; }
if(isset($_POST['email'])){ $email = $_POST['email']; }
if(isset($_POST['newpass'])){ $password = $_POST['newpass']; }

$username=mysql_real_escape_string($username);
$email=mysql_real_escape_string($email);
$password=md5(mysql_real_escape_string($password));

    /*Adding User details in database */
$query = "INSERT INTO users (username, password, email_id,level,status) VALUES ('$username', '$password', '$email','1','user')";
$result = mysql_query($query);
if($result)
{
  echo "User Created Successfully.";
}

}

?>
