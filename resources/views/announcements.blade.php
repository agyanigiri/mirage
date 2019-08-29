<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Advait Data Labs">
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="_slug" content="{{$market}}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" href="/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/colors/palette-gradient.css">
    <!--link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/cryptocoins/cryptocoins.css"-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END Custom CSS-->
    <script type="text/javascript" src="/app-assets/js/jquery-1.8.0.min.js"></script>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- fixed-top-->
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
          
          <section id="group-selection">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">SGX - Company Announcements</h3>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <!--li><a data-action="collapse"><i class="ft-minus"></i></a></li-->
                        <li><a data-action="refresh"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <!--li><a data-action="close"><i class="ft-x"></i></a></li-->
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                      <p>
                      </p>
                      <table id="announcements" class="table table-striped table-bordered dataex-aip-group">
                        <thead>
                          <tr>
                            <th>Date &amp; Time</th>
                            <th>Issuer Name</th>
                            <th>Security Name</th>
                            <th>Title</th>
                            <th>Category</th>
                          </tr>
                        </thead>
                        <!--tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td><i class="la la-copy"></i> <i class="la la-download"></i> <i class="la la-arrow-circle-o-right"></i></td>
                          </tr>
                        </tbody-->
                        <tfoot>
                          <tr>
                            <th>Date &amp; Time</th>
                            <th>Issuer Name</th>
                            <th>Security Name</th>
                            <th>Title</th>
                            <th>Category</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div id="blockUI" class="blockUI" style="display:none">
                    <div class="blockUI blockOverlay" style="z-index: 1000; border: none; margin: 0px; padding: 0px; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(255, 255, 255); opacity: 0.6; cursor: wait; position: absolute;"></div>
                    <div class="blockUI blockMsg blockElement" style="z-index: 1011; position: absolute; padding: 0px; margin: 0px; width: 30%; top: 400px; left: 374px; text-align: center; color: rgb(0, 0, 0); border: 0px; cursor: wait;">
                      <div class="ft-refresh-cw icon-spin font-medium-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="#" target="_blank">ADVAIT DATA LABS </a>, All rights reserved. </span></p>
    </footer>

    <script type="text/javascript">
      $(document).ready(function() {
        var table = $('#announcements').DataTable({
          "ajax": {
            "url": "{{ url('ajax') }}",
            "dataSrc": function ( json ) {
              for ( var i=0, ien=json.data.length ; i<ien ; i++ ) {
                console.log(json.data[i]);
                json.data[i]["title"] = '<a href="/sgx/details/'+json.data[i]["id"]+'">'+json.data[i]["title"]+'</a>';
              }
              return json.data;
            },
          },
          "columns": [
                { "data": "releasetime" },
                { "data": "issuer" },
                { "data": "security" },
                { "data": "title" },
                { "data": "category" }
          ],
          "init": function(settings, json) {
            document.getElementById("blockUI").style.display = "block";
          },
          "initComplete": function(settings, json) {
            document.getElementById("blockUI").style.display = "none";
          },
        });
        setInterval( function () {
          table.ajax.reload();
        }, 30000 );
      });
      $('a[data-action="refresh"]').on('click',function(){
          // getData();
      });
    </script>

    <!-- BEGIN VENDOR JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN DATATABLE JS-->
    <script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <!-- END DATATABLE JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-extensions-api.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>