<?php 
    session_start();
    if(isset($_POST['email'])){ //Validate that the email was sent over.
        $email = $_POST['email'];
    }
    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }
    //Database Information
    $serverIP = "localhost";
    $user = "root";
    $pass = "";
    $db = "travelexperts";
    $conn = mysqli_connect($serverIP, $user, $pass, $db);
    if(!$conn){
        echo ("Failed to connect to MySQL: " . mysqli_connect_error()); //Throws an error if we cannot connect to the database.
    }
    $email = mysqli_real_escape_string($conn, $email); //Sanatize mysql inputs to prevent bad things from happening.
    $pass = mysqli_real_escape_string($conn, $pass);
    
    $existQuery = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email' LIMIT 1"); //Checks to see if the user was found by the email address.
    $existTotal = mysqli_num_rows($existQuery);
    if($existTotal == 0){
        echo "Error: Could not find a valid user.";
        die();
    }else{
        $row=mysqli_fetch_array($existQuery);
        if(password_verify($pass, $row['Pass'])){ //Checks if the password matches the password hash in the system.
            echo 'Login';
            session_regenerate_id();
            $_SESSION['user'] = $email;
            die();
           }
    }


?>