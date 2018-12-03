<!--
   Author:  Sheila Zhao
   Course:  CPRG210
   Assignment:  Project Workshop1
-->
<!DOCTYPE html>
<html>
<head>
    <title>Travel Packages </title>
    <?php
	include_once("pop.php");
	include ("header.php");

	function datePassed($startTime){
	    $dbTime = date ("Y-m-d H:i:s",  strtotime($startTime)); 
        $realtime = date("Y-m-d H:i:s");

        if($dbTime >= $realtime){
            return false;
        }
        if($dbTime < $realtime){
            return true;
        }
	}
?>

<!--Function to check the package expiry date. Added by Nicholas Sim-->
<style>
    h3 {
    font: 40px Abril Fatface, cursive;
    color:white;
    }
    #p1 {
    font: 25px Fjalla One, sans-serif;
    color: #ff9300;
    }
    .carousel-item{
    height:40vh;
    width:100%;
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
                    <img src="euu.jpg" alt="Europe" >
                    <div class="carousel-caption">
                        <h3>European Vacation Package</h3><br />
                        <p id="p1">Limited Time Price:$3000.00</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="ca.jpg" alt="Caribbean" width="100%">
                    <div class="carousel-caption">
                        <h3>Caribbean New Year Package</h3><br />
                        <p id="p1">Limited Time Price:$4800.00</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="cch.jpg" alt="Asia" width="100%">
                    <div class="carousel-caption">
                        <h3>Asian Expedition Package</h3><br />
                        <p id="p1">Limited Time Price:$2800.00</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="hw.jpg" alt="Polynesian" width="100%">
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
    <!--  ==============Slides to display packages================  -->
    <div class="pos">
        <div class="row" >
               <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
            <div class="column" style="width:100%;">
                           <div class="card">
                    <img src="caaa.jpg" alt="" style="width:100%">
                    <div class="container" style="height:350px;"><br />
                            <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 1");
                    $row = mysqli_fetch_assoc($result);
                    print ("<h2>" . $row["PkgName"] . "</h2>");                
                    print ("<span style='color:darkslategrey;'>" . $row["PkgDesc"] . "</span><br /><br />");     
                    
                    if(datePassed($row["PkgStartDate"])){
                        print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                        print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br /><br />"); 
                        }
                    else{
                        print ("Start Date: " . $row["PkgStartDate"] . "<br />");   
                        print ("End Date: " . $row["PkgEndDate"] . "<br /><br />");
                        }
                    print ("Price: $" . $row["PkgBasePrice"] . "<br />");
                    print ("Review:  &#9733 &#9733 &#9733 &#9733 &#9733" . "<br />")
                    ?>
                        <?php 
                    if(!datePassed($row["PkgStartDate"])){
                        echo '<p><a href="logincheck.php" style="color:white; text-decoration:none;"><button class="button bottom-align-text">Book</button></a></p>';
                    }
                    else{
                         echo '<p><div class="button bottom-align-text btn-danger" style="cursor:default;">Offer Expired</div></p>';
                    }
                    ?>


                    </div>
                </div>
            </div>
            </div>
            <!--Extract data from database. Revised by Nicholas Sim-->
             <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
            <div class="column" style="width:100%;">
                   <div class="card">
                    <img src="pol.jpg" alt="" style="width:100%">
                    <div class="container" style="height:350px;"><br />
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 2");
                    $row = mysqli_fetch_assoc($result);
                    print ("<h2>" . $row["PkgName"] . "</h2>");                
                    print ("<span style='color:darkslategrey;'>" . $row["PkgDesc"] . "</span><br /><br />");     
                    
                    if(datePassed($row["PkgStartDate"])){
                        print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                        print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br /><br />"); 
                        }
                    else{
                        print ("Start Date: " . $row["PkgStartDate"] . "<br />");   
                        print ("End Date: " . $row["PkgEndDate"] . "<br /><br />");
                        }
                    print ("Price: $" . $row["PkgBasePrice"] . "<br />");
                    print ("Review:  &#9733 &#9733 &#9733 &#9733 &#9733" . "<br />")
                    ?>
                    <?php 
                    if(!datePassed($row["PkgStartDate"])){
                        echo '<p><a href="logincheck.php" style="color:white; text-decoration:none;"><button class="button bottom-align-text">Book</button></a></p>';
                    }
                    else{
                         echo '<p><div class="button bottom-align-text btn-danger" style="cursor:default;">Offer Expired</div></p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
            </div>
         <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
            <div class="column" style="width:100%;">
            <div class="card">
                    <img src="chi.jpg" alt="" style="width:100%">
                     <div class="container" style="height:350px;"><br />
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 3");
                    $row = mysqli_fetch_assoc($result);
                    print ("<h2>" . $row["PkgName"] . "</h2>");                
                    print ("<span style='color:darkslategrey;'>" . $row["PkgDesc"] . "</span><br /><br />");     
                    
                    if(datePassed($row["PkgStartDate"])){
                        print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                        print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br /><br />"); 
                        }
                    else{
                        print ("Start Date: " . $row["PkgStartDate"] . "<br />");   
                        print ("End Date: " . $row["PkgEndDate"] . "<br /><br />");
                        }
                    print ("Price: $" . $row["PkgBasePrice"] . "<br />");
                    print ("Review:  &#9733 &#9733 &#9733 &#9733 &#9733" . "<br />")
                    ?>
                        <?php 
                    if(!datePassed($row["PkgStartDate"])){
                        echo '<p><a href="logincheck.php" style="color:white; text-decoration:none;"><button class="button bottom-align-text">Book</button></a></p>';
                    }
                    else{
                         echo '<p><div class="button bottom-align-text btn-danger" style="cursor:default;">Offer Expired</div></p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
            <div class="column" style="width:100%;">
                     <div class="card">
                    <img src="eu.jpg" alt="" style="width:100%">
                     <div class="container" style="height:350px;"><br />
                    <?php
                    $result = mysqli_query($dbh, "SELECT PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages WHERE PackageId = 4");
                    $row = mysqli_fetch_assoc($result);
                    print ("<h2>" . $row["PkgName"] . "</h2>");                
                    print ("<span style='color:darkslategrey;'>" . $row["PkgDesc"] . "</span><br /><br />");     
                    
                    if(datePassed($row["PkgStartDate"])){
                        print ("Start Date: <span style='color:red; font-weight:bold;'>" . $row["PkgStartDate"] . "</span><br />"); 
                        print ("End Date: <span style='color:red; font-weight:bold;'>" . $row["PkgEndDate"] . "</span><br /><br />"); 
                        }
                    else{
                        print ("Start Date: " . $row["PkgStartDate"] . "<br />");   
                        print ("End Date: " . $row["PkgEndDate"] . "<br /><br />");
                        }
                    print ("Price: $" . $row["PkgBasePrice"] . "<br />");
                    print ("Review:  &#9733 &#9733 &#9733 &#9733 &#9733" . "<br />")
                    ?>
                        <?php 
                    if(!datePassed($row["PkgStartDate"])){
                        echo '<p><a href="logincheck.php" style="color:white; text-decoration:none;"><button class="button bottom-align-text">Book</button></a></p>';
                        session_start();
                        $_SESSION['IsPackagePage'] = true;
                    }
                    else{
                         echo '<p><div class="button bottom-align-text btn-danger" style="cursor:default;">Offer Expired</div></p>';
                    }
                    ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
	include ("footer.php");
    ?>
</body>

</html>
