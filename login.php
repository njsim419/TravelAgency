<?php include "header.php"; ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

    </head>
    <style>
    .form-group{
        padding:1%;
    }
    </style>
    <body>
        <div class="container" style="margin-top:3%;">
            <div class="row">
                <div class="col-sm-0 col-md-3">
                </div>
                <div class="col-sm-12 col-md-6">
                <div class="alert alert-info" style="display:none;"></div>
                        <form id="login" action="/task/login.php" method="post">
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group float-right">
                                <a href="register.php" class="btn btn-secondary" role="button"><i class="fas fa-plus"></i> Create Account</a>
                                <button type="submit" name="button" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                            </div>
                        </form>
                   
                </div>
                <div class="col-sm-0 col-md-3">
                </div>
         
        </div>
         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
         <script>
            $("#login").submit(function(e) {
                e.preventDefault();
                var userEmail = $("#email").val();
                var userPass = $("#password").val();
                if(userEmail == '' || userPass ==''){ //Checks to see if the email or password or both fields are empty.
                    $(".alert-info").css("display", "block");
                    $(".alert-info").text("Error: Email Address and or password not provided.");
                } 
                else
                 {
                    $.post("task/login.php", { //Sends the information as a post request to register.php in the task folder.
                        email: userEmail,
                        pass: userPass,
                }, function(data) 
                {
                    var result = $.trim(data);
                    $(".alert-info").css("display", "block");
                    if(result === "Login"){ //Checks if the login was authorized.
                        $(".alert-info").text("You've logged in!");
                          window.history.back();
                    }else{
                        $(".alert-info").text(data);
                    }
                   

                });
       
                    }
                });
           
    </script>
    </body>


</html>