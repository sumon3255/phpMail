<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$datetday = date("d M Y");
$dateObject = new DateTime('Asia/Dhaka');

echo "{$datetday} - {$dateObject->format('h:i A')}";
?>