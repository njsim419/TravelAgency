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
	
	$sql = "select AgtLastname from Agents where AgtFirstName=?";
	$stmt = mysqli_prepare($dbh, $sql);
	mysqli_stmt_bind_param($stmt, "i", $_REQUEST["AgtFirstName"]);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$AgtLastName = mysqli_fetch_array($result);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Main Page</title>
	</head>
	<body>
		<form method="post" action="day11example2-2.php">
			Product Id:<br />
			Last Name:<input type="text" name="AgtLastName" value="<?php print($AgtLastName[0]); ?>" /><br />
		</form>
	</body>
</html>