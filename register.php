<?php include "header.php"; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Register</title>
    </head>
    <style>
    .form-group{
        padding:1%;
    }
    </style>
    <body>
        <div class="container" style="margin-top:1%;">
            <div class="row">
                <div class="col-sm-0 col-md-3">
                </div>
                <div class="col-sm-12 col-md-6">
                <div class="alert alert-info" style="display:none;"></div>
                      <div class="result"></div>
                        <form id="register" action="task/register.php" method="post">
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" name="button" class="btn btn-success"><i class="fas fa-plus"></i> Create Account</button>
                            </div>
                        </form>
                   
                </div>
                <div class="col-sm-0 col-md-3">
                </div>
         
        </div>
   
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
         <script>
            $("#register").submit(function(e) {
                e.preventDefault();
                var userEmail = $("#email").val();
                var userPass = $("#password").val();
                if(userEmail == '' || userPass ==''){ //Checks to see if the email or password or both fields are empty.
                    $(".alert-info").css("display", "block");
                    $(".alert-info").text("Error: Email Address and or password not provided.");
                } 
                else
                 {
                    $.post("task/register.php", { //Sends the information as a post request to register.php in the task folder.
                        email: userEmail,
                        pass: userPass,
                }, function(data) 
                {
                    var result = $.trim(data);
                    $(".alert-info").css("display", "block");
                    if(result === "Account created"){
                        $(".alert-info").text("Your account has been created, you can now login.");
                    }else{
                        $(".alert-info").text(data);
                    }
                   

                });
       
                    }
                });
           
    </script>

    </body>

</html>
