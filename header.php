<!--
   Author:  Manish Sudani
   Course:  CPRG210
   Assignment:  Project Workshop1
-->

<?php
    session_start(); //Start the session on every page.
    function activeUser(){
            if(isset($_SESSION['user'])){
                return true;
            }else{
                return false;
            }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="WORLD.png">
    <link href="stylehome.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    
    

    <link href="https://fonts.googleapis.com/css?family=Arimo|Abril+Fatface|Fjalla+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    
  </head>

  <body>
   <?php include ("navbar.php");?>



  <?php 
    function getGreeting(){
        $hour = date("h");

        if($hour >= 6 && $hour < 12){
            return "Good Morning";
        }
        if($hour >= 12 && $hour < 5){
            return "Good Afternoon";
        }else{
            return "Good Evening";
        }
    }
    ?>
</html>