<?php
include("../dbconnect.php");

$sql = "SELECT * FROM questions ORDER BY q_id Asc";
$result=mysql_query($sql);
$log=array();
while ($row=mysql_fetch_row($result)){
    $log=$row;
}

echo json_encode($log);
