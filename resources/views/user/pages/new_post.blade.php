<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aggregator - New Post</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-plus"></i> Add Media Account <i class="fa fa-database"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <h4 style="margin-bottom: -3% !important;">
                        <center><a href="{{url('twitter_login')}}" class="btn btn-info"><i class="fa fa-twitter"></i> Add Twitter</a></center>
                      </h4>
                    </a>
                  </li>
                  <!-- end message -->
                  <li><!-- start message -->
                    <a href="#">
                      <h4 style="margin-bottom: -3% !important;">
                        <center><a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i> Add Facebook</a></center>
                      </h4>
                    </a>
                  </li>
                  <li><!-- start message -->
                    <a href="#">
                      <h4 style="margin-bottom: -3% !important;">
                        <center><a href="#" class="btn btn-primary"><i class="fa fa-linkedin"></i> Add Linkedin</a></center>
                      </h4>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
              <span class="hidden-xs">{{auth()->user()->fullname}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}

                <p>
                  {{auth()->user()->fullname}}
                  <small>Member since {{auth()->user()->created_at}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              {{-- <li class="user-body">
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
              </li> --}}
              <!-- Menu Footer-->
              <li class="user-footer">
                {{-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> --}}
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
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
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Post</h3>
            </div>
            <div class="box-body">
              <form method="POST" action="{{ route('post.tweet') }}" enctype="multipart/form-data" role="form">
                {{ csrf_field() }}

                @if(count($errors))
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br/>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- checkbox -->
                {{-- <div class="form-group">
                  <label for="" style="margin-bottom: 0; font-size: 16px;"><i class="fa fa-share"></i> Post to</label>
                  <div class="checkbox">
                    <label class="text-info">
                      <input type="checkbox">
                      <i  class="fa fa-twitter"></i> Twitter
                    </label>
                  </div>

                  <div class="checkbox">
                    <label class="text-primary">
                      <input type="checkbox">
                      <i  class="fa fa-facebook"></i> Facebook
                    </label>
                  </div>

                  <div class="checkbox">
                    <label class="text-primary">
                      <input type="checkbox">
                      <i  class="fa fa-linkedin"></i> Linkedin
                    </label>
                  </div>
                </div> --}}

                <!-- textarea -->
                <div class="form-group">
                  <label style="font-size: 16px;"><i class="fa fa-text-height"></i> Text</label>
                  <textarea style="resize: none;" name="post_text" class="form-control" rows="3" placeholder="Enter your text and links"></textarea>
                </div>
                
                <div class="form-group">
                  <label style="font-size: 16px;" for="exampleInputFile"><i class="fa fa-image"></i> Media</label>
                  <input type="file" name="images[]" multiple id="exampleInputFile">
                </div>

                <button type="submit" class="btn btn-primary">Post Now</button>                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <footer class="main-footer text-center">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="/"><em>A</em>ggregator</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
