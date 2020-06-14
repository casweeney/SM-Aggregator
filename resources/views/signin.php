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
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
                        <a class="navbar-brand" style="color: #184153; font-size: 24px; margin: 1% 1%;" href="index.php"><b><em>A</em>ggregator</b></a>

                        <div class="card" id="signup_card" style="padding-top: 6%;">
                            <img src="img/email.svg">
                            <div class="card-body">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="email" placeholder="Enter email address" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" placeholder="Choose password" class="form-control" id="pwd">
                                  </div>
                                  <center><button type="submit" name="signin_btn" class="btn btn-success" style="background: #28863e; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign in</button></center>
                                </form>
                                <br>
                                <center><a href="signup.php" class="btn btn-default text-success" style="color: #28863e; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign up</a></center>
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