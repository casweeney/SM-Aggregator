<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aggregator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b><i class="fa fa-database"></i> <em>A</em>G</b></span>
      <span class="logo-lg"><b><i class="fa fa-database"></i> <em>A</em>ggregator</b></span>
    </a>
    
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active">
          <a href="/dashboard">
            <i class="fa fa-comments"></i> <span>Streams</span>
          </a>
        </li>

        <li>
          <a href="/publisher">
            <i class="fa fa-send"></i> <span>Publisher</span>
          </a>
        </li>

        <li>
          <a href="/new_post">
            <i class="fa fa-plus"></i> <span>New Post</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        {{-- Twitter Tweets --}}
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background: #fff;">
            <div class="inner" style="padding-left: 0;">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-center"><img src="/img/twitter.png" width="25" alt=""> <b>Tweets</b> <span style="font-size: 12px; color: #aaa;">thecodingcas</span></h4>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    I am currently showing @iMAG_Official how the twitter API works
                  </p>
                  <code>11 hours ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    My account has been verified. Thanks
                  </p>
                  <code>1 day ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    This tweet is coming from an awesome script using PHP and Twitter API developed by @thecodingcas
                  </p>
                  <code>2 days ago</code>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>

        {{-- Twitter Mentions --}}
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background: #fff;">
            <div class="inner" style="padding-left: 0;">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-center"><img src="/img/twitter.png" width="25" alt=""> <b>Mentions</b> <span style="font-size: 12px; color: #aaa;">thecodingcas</span></h4>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    I am currently showing @iMAG_Official how the twitter API works
                  </p>
                  <code>11 hours ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    I am currently showing @iMAG_Official how the twitter API works
                  </p>
                  <code>11 hours ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @thecodingcas</a></p>
                  <p>
                    I am currently showing @iMAG_Official how the twitter API works
                  </p>
                  <code>11 hours ago</code>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
        

        {{-- Facebook Page Posts --}}
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background: #fff;">
            <div class="inner" style="padding-left: 0;">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-center"><img src="/img/fpage.jpg" width="25" alt=""> <b>My Posts</b> <span style="font-size: 12px; color: #aaa;">Toxaswift</span></h4>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/6.png" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <a href="#">Toxaswift</a><br>
                  <code>Jan 18, 2017</code>
                </div>
                <div class="col-md-12" style="padding: 20px;">
                  <img src="/img/fb.jpg" class="img-responsive img-thumbnail" alt="">
                  <p>
                    I am currently showing @iMAG_Official how the twitter API works
                  </p>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>


        {{-- Linkedin Posts --}}
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background: #fff;">
            <div class="inner" style="padding-left: 0;">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-center"><img src="/img/linkedin.png" width="25" alt=""> <b>My Updates</b> <span style="font-size: 12px; color: #aaa;">Casweeney Ojukwu</span></h4>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/avatar.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @casweeney-ojukwu-93274a137</a></p>
                  <p>
                    I can also schedule my post using this amazing platform
                  </p>
                  <code>5 days ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/avatar.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @casweeney-ojukwu-93274a137</a></p>
                  <p>
                    So I came across a platform where you can make a post from an entry and it will be posted across multiple social media accounts at once
                  </p>
                  <code>6 days ago</code>
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                  <img src="/img/avatar.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <p><a href="#">Casweeney Ojukwu @casweeney-ojukwu-93274a137</a></p>
                  <p>
                    Today I made my School Management App https://lnkd.in/gp8cnUw Open Source on Github after listening to a podcast on CMOS with @unicodeveloper
                  </p>
                  <code>May 29</code>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="/"><em>A</em>ggregator</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
