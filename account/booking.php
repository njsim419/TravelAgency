<?php 
    include "../header.php"; 
    $serverIP = "localhost";
    $user = "root";
    $passDB = "";
    $db = "travelexperts";
    $conn = mysqli_connect($serverIP, $user, $passDB, $db);
    if(!$conn){
        echo ("Failed to connect to MySQL: " . mysqli_connect_error());
    }
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h2>Your Bookings </h2>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Booking No</th>
                        <th>Travelers</th>
                        <th>Booking Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $booking = mysqli_query($conn, "SELECT * FROM bookings WHERE CustomerId='133'");
                    while($row = mysqli_fetch_array($booking)){
                        echo '<tr>';
                        echo '<td>'.$row["BookingNo"].'</td>';
                        echo '<td>'.$row["TravelerCount"].'</td>';
                        echo '<td>'.$row["BookingDate"].'</td>';
                        echo '</tr>';
                    }
                ?>
                </tbody>
        </div>
    </body>
</html>