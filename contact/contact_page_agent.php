<?php
	//if the user arrived here without going through
	//day11example2.php, then there is no product id, so send
	//them to that page first.
	if (!isset($_REQUEST["AgtFirstName"]))
	{
		header("Location: contact_page_php.php");
	}
	
	include_once("functions.php");
	$dbh = dbconnect();
	$firstName = $_REQUEST["AgtFirstName"];
	$sql = "select * from Agents where AgtFirstName='$firstName'";
	$result = mysqli_query($dbh, $sql);
	$row=mysqli_fetch_array($result);



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Main Page</title>
	</head>
	<body>
		<form method="post" action="day11example2-2.php">
			Product Id:<br />
			Last Name:<input type="text" name="AgtLastName" value="<?php print($row['AgtLastName']); ?>" /><br />
		</form>
	</body>
</html>