<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Daewoo Express</title>
  <meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
  <meta name="keywords"
    content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="hencework" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- vector map CSS -->
  <link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"
    type="text/css" />



  <!-- Custom CSS -->
  <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--Preloader-->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!--/Preloader-->

  <div class="wrapper pa-0">
    <header class="sp-header">
      <div class="sp-logo-wrap pull-left">
        <a href="index.html">
          <img class="brand-img mr-10" src="logo.png" alt="brand" />
          <span class="brand-text">Daewoo Express</span>
        </a>
      </div>
      <div class="form-group mb-0 pull-right">
        <span class="inline-block pr-10">Don't have an account?</span>
        <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{URL('register')}}">Sign Up</a>
      </div>
      <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
      <div class="container-fluid">
        <!-- Row -->
        <div class="table-struct full-width full-height">
          <div class="table-cell vertical-align-middle auth-form-wrap">
            <div class="auth-form  ml-auto mr-auto no-float">
              <div class="row">
                <div class="col-sm-12 col-xs-12">
                  <div class="mb-30">
                    <h3 class="text-center txt-dark mb-10">Sign in to Daewoo Express</h3>
                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                  </div>
                  <div class="form-wrap">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <div class="form-group">
                        <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                        <input type="email" class="form-control" required="" id="exampleInputEmail_2"
                          placeholder="Enter email" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                        <input type="password" class="form-control" required="" id="exampleInputpwd_2"
                          placeholder="Enter pwd" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-info btn-rounded">sign in</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Row -->
      </div>

    </div>
    <!-- /Main Content -->

  </div>
  <!-- /#wrapper -->

  <!-- JavaScript -->

  <!-- jQuery -->
  <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

  <!-- Slimscroll JavaScript -->
  <script src="dist/js/jquery.slimscroll.js"></script>

  <!-- Init JavaScript -->
  <script src="dist/js/init.js"></script>
</body>

</html>