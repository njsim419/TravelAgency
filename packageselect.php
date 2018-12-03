<!--
   Author:  Manish Sudani
   Course:  CPRG210
   Assignment:  Project Workshop1
-->

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Trip</title>
    <?php
    include ('header.php');
    ?>
</head>

<body id="pkgsel" class="bg-light">

    <div class="container">
      <div id="pkgsel2" class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="http://clubhouse27.com/wp-content/uploads/2017/12/booknow-icon.gif" alt="" width="250" height="100">
        <form method="post" action="insertbooking.inc.php"> 
     
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="pnumber">Home Phone Number:</label>
            <input type="phone" class="form-control form-control-sm" id="phonenumber" name="CustHomePhone">
        </div>
        <div class="form-group col-md-6">
            <label for="travelercount">Traveler Count:</label>
            <input type="number" class="form-control form-control-sm" id="TravelerCount" name="TravelerCount">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fName">First Name:</label>
            <input type="text" class="form-control form-control-sm" name="CustFirstName">
        </div>
            <div class="form-group col-md-6">
            <label for="lName">Last Name:</label>
            <input type="text" class="form-control form-control-sm" name="CustLastName">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cellphoner">Business Number:</label>
            <input type="phone" class="form-control form-control-sm" id="cellphone" name="CustBusPhone" >
          </div>
          <div class="form-group col-md-6">
            <label for="birthdate">Birthdate:</label>
            <input type="date"  class="form-control form-control-sm" name="birthdate" id="birthdate" required="required" >
        </div>
      </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea rows="1" cols="30" type="text" id="address"  class="form-control form-control-sm"  name="CustAddress"
            required="required">
            </textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" name="CustCity" class="form-control" id="city" required="required">
            </div>
            <div class="form-group col-md-4">
              <label for="province">Province:</label>
              <select name="CustProv" required="required" class="form-control" id="province">
              <option value="">Select a province</option>
                <option value="AB">Alberta</option>
                <option value="SK">Saskatchewan</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="ON">Ontario</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="postal">Postal Code:</label>
              <input type="text" class="form-control" id="postal" name="CustPostal">
            </div>
          </div>
        <div class="form-group">
          <label for="PackageId">Select Package:</label>
          <?php
            require_once('pop.php');
            $sql = "SELECT * FROM packages WHERE PkgEndDate > DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 DAY);";
            $result = mysqli_query($dbh, $sql);
            $resultCheck = mysqli_num_rows($result);
            ?>
          <select id="PackageId" name="PackageId" class="form-control" >
          <option value="" >--Select--</option>
            <?php
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <option value="<?php echo($row['PackageId']);?>"><?php echo($row['PkgName']);?></option>
            <?php
                }
            ?>        
            </select>
        </div>
        <input class="btn btn-primary btn-success" type="submit" value="Submit" >
        <input class="btn btn-primary btn-warning" onclick= "return confirm('Do you want to reset');" type="reset" value="Reset">
        
      </form>
      </div>
      <?php
    include ('footer.php');
    ?>
    </body>
    </html>
