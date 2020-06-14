<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Aggregator - Sign up</title>
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
                            <div class="card-body">
                                <form action="/action_page.php">
                                  <div class="form-group">
                                    <input type="text" placeholder="Full Name" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <input type="email" placeholder="Email Address" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" placeholder="Password" class="form-control" id="pwd">
                                    <span style="font-size: 12px; display: none;">Your password must be at least 8 character and must contain numbers, lowercase and uppercase letters.</span>
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox"> <span style="font-size: 12px;">By click this, I agree to the <a href="#">Terms and Conditions</a></span>
                                    </label>
                                  </div>
                                  <center><button type="submit" class="btn btn-info" style="background: #28863e; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign up</button></center>
                                </form>
                                <br>
                                <center><a href="signin.php" class="btn btn-default text-success" style="color: #28863e; padding-right: 20%; padding-left: 20%; border-radius: 2px;">Sign in</a></center>
                            </div>
                            <div class="card-footer">
                                <p class="text-dark text-center" style="font-size: 12px;">or sign up with</p>
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