<?php
	include_once("functions.php");
	$dbh = dbconnect();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Main Page</title>
	</head>
	<body>
		<h1>Agency Contact Info</h1>
		<h2>How can we help?</h2>
			<table id="contacttable">
                <tr>
                    <td><h3>Office Hours </h3></td>
                    <td>Monday-Friday: <br />Saturday: <br /> Sunday: </td>
                    <td>9:00-8:00pm <br/>11:00-5:00pm <br />Closed</td>
                </tr>
                <tr>
                    <form method="post" action="contact_page_agent.php">
		            <td><h3>Select an Agent</h3></td><td><select name="AgtFirstName" onchange="this.form.submit();">
			<option value="">Select an Agent</option>
		<?php
			$sql = "select AgtFirstName from Agents";
			$result = mysqli_query($dbh, $sql);
			if (!$result)
			{
				print("Request failed, call tech support");
				exit();
			}
			while ($row = mysqli_fetch_array($result))
			{
				print("<option value='$row[0]'>$row[0]</option>");
			}
		?>
		</select></td><br />
                </tr>
                <tr>
					<td><label id="" for="selectagent"><h3>Select Agent </h3></label></td>
					<td><select>
						<option value="">Choose Your Agent</option>
						<option value="A0">Agent</option>
						<option value="A1">Agent</option>
						<option value="A2">Agent</option>
						<option value="A3">Agent</option>
						<option value="A4">Ontario</option>
						<option value="CS">Customer Service</option>
						<option value="CN">Cancellations</option>
                    </select></td>
                </tr>
                <tr>
                    <td><h3>Contact Information</h3></td>
                    <td>Phone: <br />Email: </td>
                    <td>403-988-5555 <br />travel.experts@agency.com </td>
                </tr>
                <tr>
                    <td></td><td>Address: </td><td>123 Main Street<br />Calgary Alberta<br />T3A 2C4</td>
                </tr>
            </table>
	</body>
</html>