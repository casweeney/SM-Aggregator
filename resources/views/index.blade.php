<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Social Aggregator</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/animate.css" />
        <link href="main.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
        <!-- <link rel='shortcut icon' href='img/logo.jpg' /> -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        <!--Navigation-->
        <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top" style="padding-top: 0; padding-bottom: 0;">
            <div class="container">
                <a style="color: #083e9e; font-size: 24px; margin: 1% 1%;" class="navbar-brand" href="#"><b><i class="fa fa-database"></i> <em>A</em>ggregator</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto"><!--ml-auto pushes your nav items to the right at full width-->
                        <li class="nav-item"><a class="nav-link" href="#">Solutions</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="/signin">Login</a></li>
                        <li class="nav-item"><a style="background: #30c57b; color: #fff; border-color: #30c57b;" class="nav-link btn btn-outline-success" href="/signup">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="banner" class="pt-5 pt-md-3 pb-5 pb-md-3">
            <div class="lineOne "></div>
            <div class="lineTwo R"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="content">
                            <h1 class="caption">
                                Social is<br>
                                your superpower <br>
                                for sales
                            </h1>
                            <br>
                            <p class="caption-small">
                                Easily manage all your social media with and get results with<br> Aggregator.
                            </p>
                            <br>
                            <a style="background: #30c57b; padding: 12px 32px 15px 32px; border-color: #30c57b;" class="btn btn-success" href="/signup">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <center><img class="d-none d-md-block img-fluid" style="" src="img/svg14.svg"/></center>
                    </div>
                </div>
            </div>
            <div class="lineOne L"></div>
            <div class="lineTwo R"></div>
        </div>
        <div class="container-fluid">
            <div class="row jumbotron" style="background: #f8f9fc; padding-top: 6%; padding-bottom: 5%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h3 class="emp">Trusted by employees at 800+ of the Fortune 1000</h3>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <p class="lead text-center">
                                Discover what’s possible when you unite your social campaigns on one platform. Schedule and publish content to the right channels at the right time, track effectiveness in real time, and crank the volume on your top-performing content. 
                            </p>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="trust">
            <h2 class="">Light up your channels</h2>
            <p>
                Discover what’s possible when you unite your social campaigns on one platform. Schedule and publish content to the right channels at the right time, track effectiveness in real time, and crank the volume on your top-performing content. 
            </p>
        </div>

        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <center><img class="img-fluid" src="img/svg114.svg"></center>
                </div>
                <div class="col-md-6">
                    <div class="card text-white" style="background: #083e9e;">
                        <div class="card-body">
                            <h4 class="card-title">Plan</h4>
                            <p class="card-text">View and manage all your social content in a single collaborative calendar</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Create</h4>
                            <p class="card-text">Make it easy for your entire team to create beautiful, engaging posts for every social network</p>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body text-white" style="background: #083e9e;">
                            <h4 class="card-title">Schedule</h4>
                            <p class="card-text">Keep your social presence active 24/7 by automatically scheduling posts to fill the gaps in your calendar</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        

        <!--Footer-->
        <footer>
            <div class="container-fluid padding">
                <p class="text-center">&copy; <?php echo date('Y'); ?> <em>A</em>ggregator </p>
            </div>
        </footer>
    </body>
</html>
