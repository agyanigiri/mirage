<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Crypto Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/charts/chartisty.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/fonts/simple-line-icons/style.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="{{ url('announcements/sgx') }}"><img class="brand-logo" alt="modern admin logo" src="/app-assets/images/logo/logo.png">
                <h3 class="brand-text">Mirage</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1">Hello,<span class="user-name text-bold-700">{{ Auth::user()->name }}</span></span><span class="avatar avatar-online"><img src="/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i class="ft-power"></i>{{ __(' Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="index.html"><i class="la la-bullhorn"></i><span class="menu-title" data-i18n="nav.dash.main">Announcements</span><!--span class="badge badge badge-info badge-pill float-right mr-2">3</span--></a>
            <ul class="menu-content">
              <li class="active"><a class="menu-item" href="{{ url('announcements/sgx') }}" >SGX</a>
              </li>
              <li><a class="menu-item" href="{{ url('announcements/sgx') }}" data-i18n="nav.dash.crypto">Bursa Malaysia</a>
              </li>
              <li><a class="menu-item" href="{{ url('announcements/sgx') }}" data-i18n="nav.dash.sales">HKEX</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="row">
            <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="media align-items-stretch">
                          <div class="bg-warning p-2 media-middle rounded-left">
                              <i class="la la-bullhorn font-large-2 text-white"></i>
                          </div>
                          <div class="media-body p-2">
                              <h4>Financial Statements</h4>
                              <span>Financial Statements and Related Announcement::Full Yearly Results</span>
                          </div>
                          <div class="media-right pt-1 media-middle">
                              <ul class="list-inline clearfix">
                                  <li class="border-right-blue-grey border-right-lighten-2 pr-2">
                                      <h1 class="warning text-bold-400">11,479</h1>
                                      <span class="blue-grey darken-1"><i class="la la-caret-up"></i> Total</span>
                                  </li>
                                  <li class="px-2">
                                      <h1 class="warning text-bold-400">18</h1>
                                      <span class="blue-grey darken-1"><i class="la la-caret-down"></i> Today</span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-xl-5 col-12 px-2">
                <div class="row">
                  <div class="card">
                    <div class="card-header pb-1">
                        <h4 class="card-title font-medium-3">Twentyfirst Century Management ... - 
                          <font size="1" color="#888888"><strong>SMALLCAP</strong></font>
                          <br><br>
                          <font color="#aa1111">Sector - NBFC</font>
                        </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show pt-0">
                      <div class="card-body">
                        <div class="row pl-1">
                          <p>Twentyfirst Century Management Services Limited is a non-banking financial institution which provides services ranging from ... <a style="color: #0000ff">Read More</a>
                        </div>
                        <div class="row">
                          <div class="col-8 p-1">
                            <p class="card-text">1Y Price Trend</p>
                            <div id="line-chart" class="height-150"></div>
                          </div>
                          <div class="col-2 px-0" style="display: flex; align-items: center">
                            <p class="card-text">52W H<br/><font size="4"><strong>190.54</strong></font></p>
                          </div>
                          <div class="col-2 px-0" style="display: flex; align-items: center">
                            <p class="card-text">52W L<br/><font size="4"><strong>163.89</strong></font></p>
                          </div>
                        </div>
                        <div class="row pl-1">
                          <div class="col-3 px-0">
                            <p class="card-text">1M Return<br/><font size="5" color="#ff0000"><strong>-2.70%</strong></font></p>
                          </div>
                          <div class="col-3 px-0">
                            <p class="card-text">1Y Return<br/><font size="5" color="#00ff00"><strong>15.21%</strong></font></p>
                          </div>
                          <div class="col-2">
                          </div>
                          <div class="col-1 px-0">
                            <p class="card-text">Beta<br/><font size="4"><strong>-</strong></font></p>
                          </div>
                          <div class="col-1 px-0">
                            <p class="card-text">PE<br/><font size="4"><strong>-</strong></font></p>
                          </div>
                          <div class="col-2 px-0">
                            <p class="card-text">Div. Yld.<br/><font size="4"><strong>-</strong></font></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Historical Financial Statements</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Security Name</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2019-07-02 17:50:36</td>
                                        <td><i class="cc BTC-alt"></i>GUOAN INTERNATIONAL LIMITED</td>
                                        <td>General Announcement::Monthly Return of Equity Issuer on Movements in Securities</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:51:45</td>
                                        <td><i class="cc BTC-alt"></i>CAPITALAND LIMITED</td>
                                        <td>General Announcement::Ascendas India Trust: Tokyo non-deal roadshow (4 July 2019)</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:52:11</td>
                                        <td><i class="cc BTC-alt"></i>DARCO WATER TECHNOLOGIES LTD</td>
                                        <td>General Announcement::Subscription Agreement for Subscription of Shares in Darco Infraco Vietnam Water Pte Ltd</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:55:11</td>
                                        <td><i class="cc BTC-alt"></i>MULTIPLE</td>
                                        <td>Warrants - Listing Confirmation::Listing of Daily Leverage Certificates</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 18:02:03</td>
                                        <td><i class="cc BTC-alt"></i>BHG RETAIL REIT</td>
                                        <td>Disclosure of Interest/ Changes in Interest of Trustee-Manager/ Responsible Person::Disclosure of Interest/ Changes in Interest of Trustee-Manager/ Responsible Person</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 18:02:56</td>
                                        <td><i class="cc BTC-alt"></i>OVERSEA-CHINESE BANKING CORP</td>
                                        <td>Share Buy Back - Daily Share Buy-Back Notice::Daily Share Buy-Back Notice</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-7 col-12 px-2">
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Announcement Details</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-content collapse show">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-xl-6 col-lg-12 mb-2">
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                  <th>Action</th>
                                  <th>Live</th>
                                  <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td class="text-middle">Collapse</td>
                                  <td>
                                    <a data-action="collapse" class="btn btn-sm btn-outline-primary">Collapse</a>
                                  </td>
                                  <td> In Card Header, " <i class="ft-minus"></i> " sign given. when you click on this icon, card will be collapsed and change it's sign to " <i class="la la-plus"></i> "</td>
                                </tr>
                                <tr>
                                  <td class="text-middle">Reload</td>
                                  <td>
                                    <a data-action="reload" class="btn btn-sm btn-outline-primary">Refresh</a>
                                  </td>
                                  <td>In Card Header, " <i class="ft-rotate-cw"></i> " sign given. Click this icon when you want to reload/reset your card</td>
                                </tr>
                                <tr>
                                  <td class="text-middle">Expand</td>
                                  <td>
                                    <a data-action="expand" class="btn btn-sm btn-outline-primary">Toggle</a>
                                  </td>
                                  <td> In Card Header, " <i class="ft-maximize"></i> " sign given.It is used to set card in fullscreen &amp; icon changes to " <i class="ft-minimize"></i> "</td>
                                </tr>
                                <tr>
                                  <td class="text-middle">Close</td>
                                  <td>
                                    <a data-action="close" class="btn btn-sm btn-outline-primary">Remove</a>
                                  </td>
                                  <td> In Card Header, " <i class="ft-x"></i> " sign given to remove card from this page.</td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-xl-6 col-lg-12">
                            <h4 class="card-title">Card Title</h4>
                            <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                            <p>Dessert jelly-o jelly dessert jujubes croissant. Marshmallow pudding pastry halvah dessert apple pie caramels bonbon toffee. Jelly beans brownie sweet bear claw biscuit. Marshmallow jelly gummies marzipan tootsie roll topping.</p>
                            <p>Cotton candy wafer powder bonbon topping. Sugar plum danish tootsie roll jelly tart icing bear claw. Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Financial Statements - NBFC</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Security Name</th>
                                        <th>Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2019-07-02 17:50:36</td>
                                        <td><i class="cc BTC-alt"></i>GUOAN INTERNATIONAL LIMITED</td>
                                        <td>General Announcement::Monthly Return of Equity Issuer on Movements in Securities</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:51:45</td>
                                        <td><i class="cc BTC-alt"></i>CAPITALAND LIMITED</td>
                                        <td>General Announcement::Ascendas India Trust: Tokyo non-deal roadshow (4 July 2019)</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:52:11</td>
                                        <td><i class="cc BTC-alt"></i>DARCO WATER TECHNOLOGIES LTD</td>
                                        <td>General Announcement::Subscription Agreement for Subscription of Shares in Darco Infraco Vietnam Water Pte Ltd</td>
                                    </tr>
                                    <tr>
                                        <td>2019-07-02 17:55:11</td>
                                        <td><i class="cc BTC-alt"></i>MULTIPLE</td>
                                        <td>Warrants - Listing Confirmation::Listing of Daily Leverage Certificates</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="card bg-twitter white">
                    <div class="card-content p-2">
                        <div class="card-body">
                            <div class="text-center mb-1">
                                <i class="la la-twitter font-large-3"></i>
                            </div>
                            <div class="tweet-slider carousel slide text-center" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12">
                <div class="card bg-facebook white">
                    <div class="card-content p-2">
                        <div class="card-body">
                            <div class="text-center mb-1">
                                <i class="la la-facebook font-large-3"></i>
                            </div>
                            <div class="fb-post-slider carousel slide text-center" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Are there #common-sense facts related to your business? Combine them with a great photo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12">
                <div class="card bg-linkedin white">
                    <div class="card-content p-2">
                        <div class="card-body">
                            <div class="text-center mb-1">
                                <i class="la la-linkedin font-large-3"></i>
                            </div>
                            <div class="linkedin-post-slider carousel slide text-center" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p>Congratulations to Rob Jones in accounting for winning our #NFL football pool!</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p>Are there #common-sense facts related to your business? Combine them with a great photo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent News from other sources - Twentyfirst Century Management</h3>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="recent-buyers" class="media-list">
                        <a href="#" class="media border-0">
                            <div class="media-left pr-1">
                                <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                    <i></i>
                                </span>
                            </div>
                            <div class="media-body w-100">
                                <h4 class="list-group-item-heading">Kristopher Candy</h4>
                                <p>BSNL and MTNL have already rented out 13,051 and 392 mobile tower sites, respectively, to private telecom service providers. Powergrid owns and operates about 1,45,400 circuit kms of transmission lines, GAIL owns over 11,500-km of natural gas pipelines in the country.</p>
                            </div>
                        </a>
                        <a href="#" class="media border-0">
                            <div class="media-left pr-1">
                                <span class="avatar avatar-md avatar-away"><img class="media-object rounded-circle" src="/app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                    <i></i>
                                </span>
                            </div>
                            <div class="media-body w-100">
                                <h6 class="list-group-item-heading">Lawrence Fowler</h6>
                                <p>BSNL and MTNL have already rented out 13,051 and 392 mobile tower sites, respectively, to private telecom service providers. Powergrid owns and operates about 1,45,400 circuit kms of transmission lines, GAIL owns over 11,500-km of natural gas pipelines in the country.</p>
                            </div>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/charts/chartist.min.js"></script>
    
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/charts/chartist/line/liney.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>