<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:/hunt"); // Redirecting To Home Page
}
?>
