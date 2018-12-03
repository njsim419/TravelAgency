<!--
    Author:Nicholas Sim
    Course:CPRG210
    Assignment:Project Workshop
-->

<?php
include "navbar.php";

	

	include_once ("pop.php");
	$firstName = $_GET["agency"];
	$sql = "select * from agents WHERE AgencyId='".$firstName."'";
	$result = mysqli_query($dbh, $sql);
	if(!$result){
	     printf("Error: %s\n", mysqli_error($dbh));
	}
	$row=mysqli_fetch_array($result);
    





?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Agents</title>
		<link href="stylehome.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body class="home">
		<main role="main">
		<div class="jumbotron">
			<div class="container">
			<h1 class="display-3" >Agent Info</h1>
			</div>
		</div>

		<div class="container float-center">
		<div class="row justify-content-center">
	<?php 
 $num = 0;
while($row = mysqli_fetch_array($result)){
	$num++;
	$sql1 = "select * from agencies WHERE AgencyId=".$row['AgencyId']."";
	$result1 = mysqli_query($dbh, $sql1);
	$row1=mysqli_fetch_array($result1);

	echo '<div class="col-sm-12 col-md-12 col-lg-4">';
	echo '<div class="card" style="">
	<img class="card-img-top" style="height:30vh;" src="ag.png" alt="image" style="width:100%">
	<div class="card-body">
	  <h4 class="card-title">'.$row['AgtFirstName'].' '.$row['AgtLastName'].'</h4>
	  <h4 class="card-title"><small>'.$row["AgtPosition"].'</small></h4>
	  <p class="card-text"><i style="color:#1565c0;" class="fas fa-envelope"></i> <a href="mailto:'.$row["AgtEmail"].'">'.$row["AgtEmail"].'</a></p>
	  <p class="card-text"><i class="fas fa-phone"></i> '.$row["AgtBusPhone"].'</p>
	   <p class="card-text"><i class="fas fa-map-marker-alt"></i> '.$row1["AgncyAddress"].'</p>
	</div>
  </div><br />';
	echo '</div>';
}
	?>

        </div>
        <?php
  include 'footer.php'
  ?>
	</body>
</html>