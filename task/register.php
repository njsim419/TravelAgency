<?php 
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
        echo ("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);
    
    $existQuery = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email'");
    $existTotal = mysqli_num_rows($existQuery);
    if($existTotal > 0){
        echo "Error: A user in our database already has the email address provided.";
        die();
    }else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $createSQL = "INSERT INTO users (Email, Pass) VALUES ('$email', '$pass')";
        if(mysqli_query($conn, $createSQL)){
            echo "Account Created";
            die();
        }else{
            echo "An error occured: ". mysqli_error($conn);
            die();
        }
    }


?>