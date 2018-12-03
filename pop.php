<?php
/*
   Author:  Nicholas Sim,, Sheila Zhao
   Course:  CPRG210
   Assignment:  Project Workshop1
*/

$host = 'localhost';
$user = 'travel_user';
$pass = 'password123';
$db = 'travel_travelexperts';

$dbh = mysqli_connect($host,$user,$pass,$db) or die($mysqli->error);
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}

?>