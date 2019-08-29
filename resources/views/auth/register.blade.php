<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Advait Data Labs">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">
            <img src="/app-assets/images/logo/logo-dark-mirage.png" alt="branding logo">
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Market Announcements Dashboard</span></h6>
        </div>
        <div class="card-content">  
          <div class="card-body">
            <form class="form-horizontal form-simple" action="{{ route('register') }}" method="POST" novalidate>
              @csrf
              <div class="col-md-12">
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input id="name" type="text" class="form-control form-control-lg input-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                  <div class="form-control-position">
                      <i class="ft-user"></i>
                  </div>
                </fieldset>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-12">
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input id="username" type="text" class="form-control form-control-lg input-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="User Name" required autocomplete="name">
                  <div class="form-control-position">
                      <i class="la la-caret-square-o-right"></i>
                  </div>
                </fieldset>
                @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-12">
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input id="email" type="email" class="form-control form-control-lg input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required autocomplete="email">
                  <div class="form-control-position">
                      <i class="ft-mail"></i>
                  </div>
                </fieldset>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-12">
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input id="password" type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter Password" required autocomplete="new-password">
                  <div class="form-control-position">
                      <i class="la la-key"></i>
                  </div>
                </fieldset>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-12">
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input id="password-confirm" type="password" class="form-control form-control-lg input-lg" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                  <div class="form-control-position">
                      <i class="la la-check"></i>
                  </div>
                </fieldset>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
              </div>
            </form>
          </div>
          <p class="text-center">Already have an account ? <a href="/login" class="card-link">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/forms/form-login-register.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>