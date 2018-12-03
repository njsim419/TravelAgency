<?php
/*
   Author:  Nicholas Sim
   Course:  CPRG210
   Assignment:  Project Workshop1
*/
   	require_once("../pop.php");
    session_start();
    if(isset($_POST['email'])){ //Validate that the email was sent over.
        $email = $_POST['email'];
    }
    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }
    $email = mysqli_real_escape_string($dbh, $email); //Sanatize mysql inputs to prevent bad things from happening.
    $pass = mysqli_real_escape_string($dbh, $pass);
    $existQuery = mysqli_query($dbh, "SELECT * FROM users WHERE Email='$email' LIMIT 1"); //Checks to see if the user was found by the email address.
    if(! $existQuery){
        printf("Error: %s\n", mysqli_error($dbh));
    }
    $existTotal = mysqli_num_rows($existQuery);
    if($existTotal == 0){
      echo "Error: Username and or password is incorrect.";
        die();
    }else{
      $row=mysqli_fetch_array($existQuery);
        if(password_verify($pass, $row['Pass'])){ //Checks if the password matches the password hash in the system.
            echo 'Login';
            session_regenerate_id();
            $_SESSION['user'] = $row['userName'];
            die();
           }else{
             echo "Error: Username and or password is incorrect.";
           }
    }
?>