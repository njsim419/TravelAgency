<!--
   Author:  Nicholas Sim
   Course:  CPRG210
   Assignment:  Project Workshop1
-->
<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html>

<head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
            <script src="emailpost.js"></script>
        <title>Registration</title>
</head>

<body>
    <div class="container" style="margin-top:1%;">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                      <form id="register" class="form-horizontal" action="task/register.php" method="post">
                        <div class="card" style="padding:1%;">
                            <h2>Personal Information</h2>
                            <div class="form-group row">
                                <div class="col-xs-12 col-md-6">
                                    <label for="first_Name">First Name:</label>
                                    <input class="form-control" name="first_Name" id="first_Name" type="text" placeholder="John" required>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <label for="last_Name">Last Name:</label>
                                    <input class="form-control" name="last_Name" id="last_Name" type="text" placeholder="Doe" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-md-4">
                                    <label for="phone_num">Phone Number:</label>
                                    <input class="form-control" name="phone_num" id="phoneNum" type="text" placeholder="(403)-123-4567" required>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label for="buisness_num">Buisness Number:</label>
                                    <input class="form-control" name="buisness_num" id="buisness_num" type="text" placeholder="(403)-999-9999"
                                       >
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label for="email_address">Email Address:</label>
                                    <input class="form-control" name="email_address" id="email_address" type="email" placeholder="John@example.com required"
                                       >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12 col-md-12">
                                    <label for="street_address">Street Address:</label>
                                    <input class="form-control" name="street_address" id="street_address" type="text" placeholder="123 1st Street SE" required>
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-xs-12 col-md-4">
                                    <label for="postal_code">Postal:</label>
                                    <input class="form-control" name="postal" id="postal" type="text" placeholder="T1T1T1" required>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label for="province">Province:</label>
                                            <select name="province" required="required" class="form-control" id="province" required>
                                               <option val="AB">AB - Alberta</option>
                                               <option val="BC">BC - British Columbia</option>
                                               <option val="SK">SK - Saskatchewan</option>
                                               <option val="MB">MB - Manitoba</option>
                                               <option val="ON">ON - Ontario</option>
                                               <option val="QC">QC - Quebec</option>
                                               <option val="NB">NB - New Brunswick</option>
                                               <option val="NS">NS - Nova Scotia</option>
                                               <option val="PE">PE - Prince Edward Island</option>
                                               <option val="NL">NL - Newfoundland and Labrador</option>
                                               <option val="YT">YT - Yukon</option>
                                               <option val="NT">NT - Northwest Territories</option>
                                               <option val="NU">NU - Nunavut</option>
                                            </select>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <label for="city_code">City:</label>
                                    <input class="form-control" name="city_code" id="city_code" type="text" placeholder="Calgary" required>
                                </div>
                            </div>
                            <h2>User Information</h2>
                            <div class="form-group row">
                                <div class="col-xs-12 col-md-4">
                                        <label for="user_name">Username:</label>
                                        <input class="form-control" name="user_name" id="user_name" type="text" placeholder="jdoe123" required>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="newPass">Password:</label>
                                        <input class="form-control" name="newPass" id="newPass" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="confirmPass">Confirm Password:</label>
                                        <input class="form-control" name="confirmPass" id="confirmPass" type="password" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <p class="message" id="message"></p>
                                <div class="form-group row">
                                  <div style="margin-top:5%;" class="col-xs-12 col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block" id="register"><i class="fas fa-sign-in-alt"></i>
                                            Create Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </form>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script>
    var pattern = /[ABCEFGHJKLMNPRSTVXY][0-9][ABCEFGHJKLMNPRSTVWXYZ][0-9][ABCEFGHJKLMNPRSTVWXYZ][0-9]/,
    $result = $("#result");
      $("#phoneNum").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
                var curchr = this.value.length;
                var curval = $(this).val();
                if (curchr == 3 && e.which != 8 && e.which != 0) {
                    $(this).val(curval + "-");
                } else if (curchr == 7 && e.which != 8 && e.which != 0) {
                    $(this).val(curval + "-");
                }
                $(this).attr('maxlength', '12');
            });
      $("#buisness_num").keypress(function (e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
                var curchr = this.value.length;
                var curval = $(this).val();
                if (curchr == 3 && e.which != 8 && e.which != 0) {
                    $(this).val(curval + "-");
                } else if (curchr == 7 && e.which != 8 && e.which != 0) {
                    $(this).val(curval + "-");
                }
                $(this).attr('maxlength', '12');
            });
    $('#postal_code').keyup(function(){
      var val = this.value
      if(!val.match(pattern)){
       document.getElementById("postal_code").style.border = "1px solid red";
      } else {
       document.getElementById("postal_code").style.border = "1px solid green";
      }
    });
</script>
<?php include 'footer.php' ?>

