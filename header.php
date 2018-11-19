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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="navbar-brand" href= "#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                <?php 
                    if(activeUser()){ //If the user session exists.
                        echo '<div class="dropdown">';
                        echo '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">'.getGreeting().', '.$_SESSION['user'].'</button>';
                        echo '<div class="dropdown-menu dropdown-menu-right">';
                        echo '<a class="dropdown-item" href="#"><i class="fas fa-book-open"></i> Your Bookings</a>';
                        echo '<a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i> Support</a>';
                        echo '<a class="dropdown-item" href="#"><i class="fas fa-key"></i> Account Information</a>';
                        echo '<a class="dropdown-item" href="account/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                    if(!activeUser()){ //If the user session does NOT exist.
                        echo '<a href="login.php" class="btn btn-secondary" role="button">Login/Sign Up</a>';
                    }
                ?>

            </ul>
        </div>
    </nav>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

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