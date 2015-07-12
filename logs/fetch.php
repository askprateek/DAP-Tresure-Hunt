<?php
include("../dbconnect.php");

$sql = "SELECT * FROM logs ORDER BY id DESC";
$result=mysql_query($sql);
$log=array();
while ($row=mysql_fetch_assoc($result)){
    $log[]=$row;
}

echo json_encode($log);
