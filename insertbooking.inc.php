<!--
   Author:  Manish Sudani
   Course:  CPRG210
   Assignment:  Project Workshop1
-->
<?php
if( !empty( $_POST)) {

        function getBookingID($length = 5) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    $mysqli = new mysqli('localhost', 'travel_user', 'password123', 'travel_travelexperts');

    if($mysqli->connect_error){
        die('Connect Error: ' . $mysqli->connect_errno . ':' . $mysqli->connect_error);
    }
    $dateBook = date("Y-m-d H:i:s");
        $sql = "INSERT INTO customers ( CustFirstName, CustLastName, CustAddress, CustHomePhone, CustBusPhone, CustPostal, CustProv, CustCity) VALUES 
                           ( '{$mysqli->real_escape_string($_POST['CustFirstName'])}', '{$mysqli->real_escape_string($_POST['CustLastName'])}',
                             '{$mysqli->real_escape_string($_POST['CustAddress'])}', '{$mysqli->real_escape_string($_POST['CustHomePhone'])}',
                             '{$mysqli->real_escape_string($_POST['CustBusPhone'])}', '{$mysqli->real_escape_string($_POST['CustPostal'])}',
                             '{$mysqli->real_escape_string($_POST['CustProv'])}' , '{$mysqli->real_escape_string($_POST['CustCity'])}')";
                         
$insert = $mysqli->query($sql);
if ($insert) {
   
}
   include_once("pop.php");
     $fName = $_POST['CustFirstName'];
     $fName = mysqli_real_escape_string($dbh, $fName);
     $lName = $_POST['CustLastName'];
     $lName = mysqli_real_escape_string($dbh, $lName); 
     

$random = getBookingID();
        $sql1 = "INSERT INTO bookings ( BookingDate, BookingNo, TravelerCount, CustomerId, TripTypeID, PackageId) VALUES 
                           ( '{$mysqli->real_escape_string($dateBook)}', '{$mysqli->real_escape_string($random)}',
                             '{$mysqli->real_escape_string($_POST['TravelerCount'])}', '{$mysqli->real_escape_string("1")}',
                             '{$mysqli->real_escape_string("B")}', '{$mysqli->real_escape_string($_POST['PackageId'])}')";
                         
$insert1 = $mysqli->query($sql1);


if($insert1){
       header("Location: bookingconfirmed.php?Booking Confirmed!");
} else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
}

$mysqli->close();
}

?>