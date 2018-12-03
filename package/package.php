<?php
	include_once("../pop.php");
	include ("../navbar.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Packages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Arimo|Abril+Fatface|Fjalla+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url("2100.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

        .pos {
            padding-left: 5%;
            padding-right: 5%;
        }

        h3 {
            font: 40px Abril Fatface, cursive;
            color: beige;
        }

        #p1 {
            font: 20px Fjalla One, sans-serif;
            color: #ff9300;
        }

        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .slide {
            padding-left: 5%;
            padding-right: 5%;
        }

        .carousel-control-prev {
            margin-left: 4%;
        }

        .carousel-control-next {
            margin-right: 4%;
        }

        /* ---------------------------*/
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 25%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: royalblue;
            font: bold 17px Arimo, sans-serif;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

    </style>
</head>

<body>
    <div class="slides">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="ca.jpg" alt="Caribbean" width="770">
                    <div class="carousel-caption">
                        <h3>Caribbean New Year Package</h3><br />
                        <p id="p1">Limited Time Price:$4800.00</p>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="eu.jpg" alt="Europe" width="770">
                    <div class="carousel-caption">
                        <h3>European Vacation Package</h3><br />
                        <p id="p1">Limited Time Price:$3000.00</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="chi.jpg" alt="Asia" width="770">
                    <div class="carousel-caption">
                        <h3>Asian Expedition Package</h3><br />
                        <p id="p1">Limited Time Price:$2800.00</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="pol.jpg" alt="Polynesian" width="770">
                    <div class="carousel-caption">
                        <h3>Polynesian Paradise</h3><br />
                        <p id="p1">Limited Time Price:$3000.00</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <br />
    <!--  =================================  -->
    <div class="pos">
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="ca.jpg" alt="" style="width:100%" margin:auto;>
                    <div class="container">
                    <h2>
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 1");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgName"]);                    
                    ?></h2>
                    <p class="title">
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 1");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgDesc"]);                    
                    ?>
                    </p>
                    <?php   
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 1");
                    $dbTimeStart = date ("d/m/Y", $row["PkgStartDate"]); 
                    $dbTimeEnd = date ("d/m/Y", $row["PkgEndDate"]); 
                    $realtime = date("d/m/Y");
                  
                    
                    $row = mysqli_fetch_assoc($result);
                      if($dbTimeStart >= $realtime){
                       print ("Start Date: " . $row["PkgStartDate"] . "<br />");
                    }else{
                            print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                    }
                        if($dbTimeEnd >= $realtime){
                       print ("End Date: " . $row["PkgEndDate"] . "<br />");
                    }else{
                            print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br />"); 
                    }
                    print ("Price: " . $row["PkgBasePrice"] . "<br />");
                    ?>
                    </p>
                    <p>Review: &#9733 &#9733 &#9733 &#9733 &#9733</p>
                    <?php 
                    if($dbTime >= $realtime){
                        echo '<p><button class="button">Book</button></p>';
                    }
                    else{
                        echo '<p><i class="far fa-frown-open"></i> Oh! You missed out on a great deal. Don\'t miss the next one. Faster next time.</p>';
                    }
                    ?>
                    
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="pol.jpg" alt="" style="width:100%" margin:auto;>
                    <div class="container">
                    <h2>
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 2");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgName"]);                    
                    ?></h2>
                    <p class="title">
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 2");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgDesc"]);                    
                    ?><br />
                      </p>
                    <?php   
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 2");
                    $dbTimeStart = date ("Y-m-d H:i:s", $row["PkgStartDate"]); 
                    $dbTimeEnd = date ("Y-m-d H:i:s", $row["PkgEndDate"]); 
                    $realtime = date("Y-m-d H:i:s");
                  
                    
                    $row = mysqli_fetch_assoc($result);
                      if($dbTimeStart >= $realtime){
                       print ("Start Date: " . $row["PkgStartDate"] . "<br />");
                    }else{
                            print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                    }
                        if($dbTimeEnd >= $realtime){
                       print ("End Date: " . $row["PkgEndDate"] . "<br />");
                    }else{
                            print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br />"); 
                    }
                    print ("Price: " . $row["PkgBasePrice"] . "<br />");
                    ?>
                    </p>
                    <p>Review: &#9733 &#9733 &#9733 &#9733 &#9733</p>
                    <?php 
                    if($dbTime >= $realtime){
                        echo '<p><button class="button">Book</button></p>';
                    }
                    else{
                        echo '<p><i class="far fa-frown-open"></i> Oh! You missed out on a great deal. Don\'t miss the next one. Faster next time.</p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="chi.jpg" alt="" style="width:100%" margin:auto;>
                    <div class="container">
                    <h2>
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 3");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgName"]);                    
                    ?></h2><br />
                    <p class="title">
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 3");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgDesc"]);                    
                    ?><br /><br />
                       </p>
                    <?php   
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 3");
                    $dbTimeStart = date ("Y-m-d H:i:s", $row["PkgStartDate"]); 
                    $dbTimeEnd = date ("Y-m-d H:i:s", $row["PkgEndDate"]); 
                    $realtime = date("Y-m-d H:i:s");
                  
                    
                    $row = mysqli_fetch_assoc($result);
                      if($dbTimeStart >= $realtime){
                       print ("Start Date: " . $row["PkgStartDate"] . "<br />");
                    }else{
                            print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                    }
                        if($dbTimeEnd >= $realtime){
                       print ("End Date: " . $row["PkgEndDate"] . "<br />");
                    }else{
                            print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br />"); 
                    }
                    print ("Price: " . $row["PkgBasePrice"] . "<br />");
                    ?>
                    </p>
                    <p>Review: &#9733 &#9733 &#9733 &#9733 &#9733</p>
                    <?php 
                    if($dbTime >= $realtime){
                        echo '<p><button class="button">Book</button></p>';
                    }
                    else{
                        echo '<p><i class="far fa-frown-open"></i> Oh! You missed out on a great deal. Don\'t miss the next one. Faster next time.</p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
            
            <div class="column">
                <div class="card">
                    <img src="eu.jpg" alt="" style="width:100%" margin:auto;>
                    <div class="container">
                    <h2>
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 4");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgName"]);                    
                    ?></h2>
                    <p class="title">
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 4");
                    $row = mysqli_fetch_assoc($result);
                    print ($row["PkgDesc"]);                    
                    ?>
                       </p>
                    <?php   
                    $result = mysqli_query($dbh, "SELECT PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 4");
                    $dbTimeStart = date ("Y-m-d H:i:s", $row["PkgStartDate"]); 
                    $dbTimeEnd = date ("Y-m-d H:i:s", $row["PkgEndDate"]); 
                    $realtime = date("Y-m-d H:i:s");
                    
                    $row = mysqli_fetch_assoc($result);
                      if($dbTimeStart >= $realtime){
                       print ("Start Date: " . $row["PkgStartDate"] . "<br />");
                    }else{
                            print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                    }
                        if($dbTimeEnd >= $realtime){
                       print ("End Date: " . $row["PkgEndDate"] . "<br />");
                    }else{
                            print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br />"); 
                    }
                    print ("Price: " . $row["PkgBasePrice"] . "<br />");
                    ?>
                    </p>
                    <p>Review: &#9733 &#9733 &#9733 &#9733 &#9733</p>
                    <?php 
                    if($dbTime >= $realtime){
                        echo '<p><button class="button">Book</button></p>';
                    }
                    else{
                        echo '<p><i class="far fa-frown-open"></i> Oh! You missed out on a great deal. Don\'t miss the next one. Faster next time.</p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    !!!!!!!!!!!!!!!!!#%$$%#%$%^^$%^$#^%^#^#%
    <?php
	include ("../footer.php");
    ?>
</body>

</html>
