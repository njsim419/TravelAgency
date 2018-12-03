<!--
   Author:  Nicholas Sim
   Course:  CPRG210
   Assignment:  Project Workshop1
-->
<?php 
include "../header.php";
?>
<html>
    <head>
        
    </head>
    <body>
        <div class="jumbotron text-center">
            <h2>User Registration</h2>
        </div>
        <div class="container">
        

<?php
    if(!$_POST){
        header("Location: ../login.php");
    }
       		require_once("../pop.php");
    if(isset($_POST['first_Name'])){ //Validate that the email was sent over.
        $firstName = $_POST['first_Name'];
        $firstName = mysqli_real_escape_string($dbh, $firstName);
    }
        if(isset($_POST['first_Name'])){ //Validate that the email was sent over.
        $lastName = $_POST['first_Name'];
        $lastName = mysqli_real_escape_string($dbh, $lastName);
    }
        if(isset($_POST['phone_num'])){ //Validate that the email was sent over.
        $phoneNum = $_POST['phone_num'];
        $phoneNum = mysqli_real_escape_string($dbh, $phoneNum);
    }
       if(isset($_POST['buisness_num'])){ //Validate that the email was sent over.
        $busPhone = $_POST['buisness_num'];
        $busPhone = mysqli_real_escape_string($dbh, $busPhone);
    }
       if(isset($_POST['email_address'])){ //Validate that the email was sent over.
        $email = $_POST['email_address'];
        $email = mysqli_real_escape_string($dbh, $email);
    }
       if(isset($_POST['street_address'])){ //Validate that the email was sent over.
        $street = $_POST['street_address'];
        $street = mysqli_real_escape_string($dbh, $street);
    }
       if(isset($_POST['postal_code'])){ //Validate that the email was sent over.
        $postal = $_POST['postal_code'];
        $postal = mysqli_real_escape_string($dbh, $postal);
    }
           if(isset($_POST['province'])){ //Validate that the email was sent over.
        $province = $_POST['province'];
        $province = mysqli_real_escape_string($dbh, $province);
    }
       if(isset($_POST['city_code'])){ //Validate that the email was sent over.
        $city = $_POST['city_code'];
        $city = mysqli_real_escape_string($dbh, $city);
    }
       if(isset($_POST['user_name'])){ //Validate that the email was sent over.
        $user = $_POST['user_name'];
        $user = mysqli_real_escape_string($dbh, $user);
    }
       if(isset($_POST['newPass'])){ //Validate that the email was sent over.
        $pass = $_POST['newPass'];
        $pass = mysqli_real_escape_string($dbh, $pass);
    }
       if(isset($_POST['confirmPass'])){ //Validate that the email was sent over.
        $cpass = $_POST['confirmPass'];
        $cpass = mysqli_real_escape_string($dbh, $cpass);
    }
    if($cpass != $pass){
        echo "Error: Passwords do not match.";
        die();
    }

    //Database Information

    
    $existQuery = mysqli_query($dbh, "SELECT * FROM users WHERE Email='$email'");
    $existTotal = mysqli_num_rows($existQuery);
    if($existTotal > 0){
                    echo "<div class='alert alert-danger'>";
        echo "Error: A user in our database already has the email address provided.";
        echo "</div>";
        die();
    }else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $createSQL = "INSERT INTO users (Email, Pass, firstName, lastName, phoneNum, buisnessNum, streetAddress, postal, province, city, userName) VALUES ('$email', '$pass', '$firstName', '$lastName', '$phoneNum', '$busPhone', '$street','$postal', '$province', '$city', '$user')";
        if(mysqli_query($dbh, $createSQL)){
                                echo "<div class='alert alert-success'>";
        echo "Your account has been created.";
        echo "</div>";
        echo "<h2>Thank You!</h2>";
        echo "<p>Now that you've got an account, you can view your bookings as well as make future bookings.";
        
            die();
        }else{
            echo "<div class='alert alert-danger'>";
            echo "An error occured: ". mysqli_error($dbh);
            echo "</div>";
            die();
        }
    }


?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</div>
    </body>
</html>