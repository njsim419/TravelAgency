<!--
    Author:Manish Sudani
    Course:CPRG210
    Assignment:Project Workshop1
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="WORLD.png"/>
  <style src="stylehome.css"></style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<style>
    .dropdown-menu { right: 0; left: auto; }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  sticky-top">  
    <a class="navbar-brand" href="../index.php"><i class="fas fa-home"></i> Home |</a> <br />
    <div class="navbar-brand" id="gm">
      <?php 
      date_default_timezone_set('America/Edmonton');
      $Hour = date('G');

      if ( $Hour >= 0 && $Hour <= 11 ) {
          echo "Good Morning!";
      } else if ( $Hour >= 12 && $Hour <= 18 ) {
          echo"Good Afternoon!";
      } else if ( $Hour >= 19 || $Hour <= 4 ) {
          echo "Good Evening!";
      }
    ?>
    </div>
      <!--   Check the real time for greeting -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../package.php"><i class="fas fa-umbrella-beach"></i> Packages</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-plane-departure"></i> Flights</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../agencies.php"><i class="fas fa-phone"></i> Contact Us</a>
        </li>
        <li class="nav-item active dropdown">
            
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
   
          <a class="dropdown-item" href="#"></a>
        </div>
        </li>
        
        <?php 
         if(isset($_SESSION['user'])){
           echo ' <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
          '.$_SESSION['user'].'
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../account/logout.php"><i class="fas fa-user-plus"></i> Logout</a>
          </div>
          </li>';  
         }else{
              echo'<li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
          Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../login.php"><i class="fas fa-sign-in-alt"></i> Sign-In</a>
            <a class="dropdown-item" href="../register.php"><i class="fas fa-user-plus"></i> Register</a>
          </div>
          </li>';
         }
        
        
        ?>
       
      </ul>
    </div>
  </nav>


<?php include 'footer'; ?>
