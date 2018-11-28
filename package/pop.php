<?php

$host = 'localhost';
$user = 'jackie';
$pass = '123456';
$db = 'travelexperts';

$dbh = mysqli_connect($host,$user,$pass,$db) or die($mysqli->error);
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}

?>