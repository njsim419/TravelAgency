<!--
    Author:Mark Wessley
    Course:CPRG210
    Assignment:Project Workshop
-->
<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Agency Info</title>
		<link href="stylehome.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="markstyle.css" 	type="text/css" rel="stylesheet"/>
	</head>
	<body>
	<body class="home">
		<main role="main">
		<div class="jumbotron">
			<div class="container">
			<h1 class="display-3" >Agency Contact Info</h1>
			</div>
		</div>

		<div class="container float-center">
		<div class="row justify-content-center">
		
  <?php
	require_once("pop.php");
	$sql = "SELECT * FROM agencies;";
	$result = mysqli_query($dbh, $sql);
	$resultCheck = mysqli_num_rows($result);
	?>
	<?php
		while($row = mysqli_fetch_assoc($result))
		{

	echo '<div class="col-sm-12 col-md-6 col-lg-4">';
	echo '<div class="card" style="">
	<img class="card-img-top" style="height:30vh;" src="cal.jpg" alt="image" style="width:100%">
	<div class="card-body">
	  <h4 class="card-title"><i class="fas fa-map-marker-alt"></i> '.$row["AgncyAddress"].'</h4>
      <h4 class="card-title"><small>'.$row['AgncyCity'].' '.$row['AgncyProv'].'</small></h4>
      <h4 class="card-title"><small>'.$row['AgncyPostal'].' '.$row['AgncyCountry'].'</small></h4>
	  <p class="card-text"><i class="fas fa-phone"></i> '.$row["AgncyPhone"].'</p>
        <p class="card-text"></p> 
        <p class="card-text"><i class="fas fa-fax"></i> '.$row["AgncyFax"].'</p>
        <p class="card-text"><strong>Office Hours</strong></p>
        <p class="card-text">Monday-Friday: 9:00AM-8:00PM</p>
        <p class="card-text">Saturday-Sunday: Closed</p>
        <p class="card-text"><a href="https://travelexperts.website/agents.php?agency='.$row["AgencyId"].'" class="btn btn-primary btn-block">View Agents</a></p> 
	</div></div>
  </div><br />';
        }
  ?>
</div><br/>

	
	<?php
  include 'footer.php'
  ?>
	</body>
</html>