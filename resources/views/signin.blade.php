<?php
    if(isset($_POST['signin_btn'])){
        header("Location: client");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Aggregator - Sign in</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link type='text/css' href="css/jquery-ui.min.css" rel="stylesheet">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <div id="banner">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        
                    </div>
                    <div class="col-md-4">
                        <a class="navbar-brand" style="color: #083e9e; font-size: 24px; margin: 1% 1%;" href="/"><b><i class="fa fa-database"></i> <em>A</em>ggregator</b></a>

                        <div class="card" id="signup_card" style="padding-top: 6%;">
                            @include('include.messages')
                            <span id="display" class="text-danger text-center" style="display: none;"></span>
                            <div class="card-body">
                                <form action="/signin" method="POST" id="signinForm">
                                    {{ csrf_field() }}
                                  <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                                  </div>
                                  <center>
                                    <button type="submit" name="signin_btn" class="btn btn-success" style="background: #30c57b; border-color: #30c57b; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign in</button>
                                    &nbsp;<img id="loading" src="/img/spinner.gif" class="img-fluid" style="width: 10%; margin-top: -2.5%; display: none;">
                                  </center>
                                </form>
                                <br>
                                <center><a href="/signup" class="btn btn-default text-success" style="color: #30c57b; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign up</a></center>
                            </div>
                            <div class="card-footer">
                                <p class="text-dark text-center" style="font-size: 12px;">or sign in with</p>
                                <center>
                                    <button type="submit" class="btn btn-outline-info btn-sm"><i class="fa fa-twitter"></i> Twitter</button>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-google"></i> Google</button>&nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-facebook"></i> Facebook</button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        let signinForm = $("#signinForm");
        signinForm.submit(function(e){
            e.preventDefault();

            let email = $("#email").val();
            let password = $("#password").val();

            if(email=="" || password==""){
                $("#display").html("All fields required").show("slide").delay("1000");
                signinForm.effect("shake", "slow");
            }else{
                $("#display").hide();
                $("#loading").show().delay("1000");

                $.ajax({
                    type: "POST",
                    url: "/signin",
                    data: signinForm.serialize(),
                    async: true,
                    dataType: 'json',
                    success: function(response){
                        $("#loading").hide();
                        if(response.status == "success"){
                            window.location.assign('/dashboard');
                        } else if(response.status == "error"){
                            $("#display").html(response.message).show();
                        }else{
                            $('#display').html(response.errors[0]).show();
                        }
                    }
                });
            }
        });
    })
</script>