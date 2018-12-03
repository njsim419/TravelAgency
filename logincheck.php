<?php
    session_start();
    if(!$_SESSION['user']){
   header("location:login.php");
   die;}
else{
    header("location:packageselect.php");
    die;
}
//Check if customer login and redirect to login if not.
?>
