<!doctype html>
<html lang="en">

<head>
  <title>PT Bidzaksana  Logistik Indonesia</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="assets_app/css/bootstrap.min.css">
  <title>app container</title>

  <!-- Datatables core css -->
  <link href="assets_app/plugins/datatables.net-bs4/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- Datatables extensions css -->
  <link href="assets_app/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="assets_app/plugins/datatables.net-colreorder-bs4/colreorder.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!--fontawesome-->
  <link rel="stylesheet" href="assets_app/css/all.min.css">

  <!-- App css -->
  <link href="assets_app/css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="assets_app/css/app.min.css" rel="stylesheet" type="text/css" />
  <style>
    body {
      font-family: Roboto, sans-serif;
      font-size: .6rem;
      font-weight: 100;
      line-height: 0;
      color: #5e6773;
      text-align: left;
    }

    bootstra_custom table td,
    .ta ble th {
      padding: .4rem;
      vertical-align: top;
      border-top: 1px solid #e9eef2;
    }

    .table .thead-light th {
      color: #0b0b0b;
      background-color: #65e2e81c;
      border-color: #e9eef2;
    }

    btn,
    .btn-sm {
      padding: 5px 18px;
      font-size: .7875rem;
      line-height: 1.5;
      border-radius: 10px;
    }

    .btn-primary {
      color: #10100e;
      background-color: #00aaff45;
      border-color: #00aaff38;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #46b0a6;
      border-color: #f3f13f42;
    }

    #wrapper .sidebar {
      width: 240px;
      height: 100%;
      float: left;
      background-color: #fcf9f9;
      position: fixed;
      left: 0;
      overflow-y: auto;
      -webkit-transition: all .3s ease-in-out;
      transition: all .3s ease-in-out;
    }

    .sidebar .nav>li>a:hover {
      background-color: #eff60e;
    }

    sidebar-minified .sidebar .nav li:hover>a,
    .sidebar-minified .sidebar .nav li:hover>a>.title {
      color: #0af;
      background-color: #f0f717;
    }

    .sidebar .submenu>li>a:focus,
    .sidebar .submenu>li>a:hover {
      background-color: #f0ec10;
    }

    primary:focus {
      color: #fff;
      background-color: #e9df44;
      border-color: #e9df44;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075), 0 0 0 .2rem rgba(38, 183, 255, .5);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075), 0 0 0 .2rem rgba(255, 252, 38, 0.5);
    }

    .btn-toggle-minified {
      display: block;
      margin: 20px auto 30px auto;
      background: #303030;
      text-align: center;
      font-size: 16px;
      color: #929598;
      outline: 0;
      border: 1px solid #89def1;
      padding: 4px 12px;
      border-radius: 10px;
    }

    .btn-toggle-minified {
      display: block;
      margin: 20px auto 30px auto;
      background: #8de4e9;
      text-align: center;
      font-size: 16px;
      color: #020f1d;
      outline: 0;
      border: 1px solid #89def1;
      padding: 4px 12px;
      border-radius: 10px;
    }

    .sidebar .nav>li>a.active:hover {
      background-color: #faf72d;
    }
  </style>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets_app/images/favicon.ico">
</head>


  <body>
    <!-- WRAPPER -->
    <div id="wrapper">

      <!-- NAVBAR -->
      <nav class="navbar navbar-expand fixed-top">
        <div class="navbar-brand d-none d-lg-block">
          <a href="index.html">
            <img src="assets_app/images/logo-white.jpeg" alt="Klorofil Pro Logo" class="img-fluid logo" style="width: 200px; height: 50px;">
          </a>
        </div>

        <div class="container-fluid p-0">
          <button id="tour-fullwidth" type="button" class="btn btn-default btn-toggle-fullwidth"><i class="ti-menu"></i></button>
          <form class="form-inline search-form mr-auto d-none d-sm-block">
            <div class="input-group">
              <input type="text" value="" class="form-control" placeholder="Search dashboard...">
              <div class="input-group-append">
                <button type="button" class="btn"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
          <div id="navbar-menu">
            <ul class="nav navbar-nav align-items-center">
              <li class="nav-item">
                <a href="#" class="dropdown-toggle btn-toggle-rightsidebar">
                  <i class="ti-layout-sidebar-right"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                  <i class="ti-bell"></i>
                  <span class="badge bg-danger">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right notifications">
                  <li class="dropdown-item">You have 5 new notifications</li>
                  <li class="dropdown-item">
                    <a href="#" class="notification-item">
                      <i class="fa fa-hdd-o custom-bg-red"></i>
                      <p><span class="text">System space is almost full</span> <span class="timestamp">11 minutes ago</span></p>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#" class="notification-item">
                      <i class="fa fa-tasks custom-bg-yellow"></i>
                      <p><span class="text">You have 9 unfinished tasks</span> <span class="timestamp">20 minutes ago</span></p>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#" class="notification-item">
                      <i class="fa fa-book custom-bg-green2"></i>
                      <p><span class="text">Monthly report is available</span> <span class="timestamp">1 hour ago</span></p>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#" class="notification-item">
                      <i class="fa fa-bullhorn custom-bg-purple"></i>
                      <p><span class="text">Weekly meeting in 1 hour</span> <span class="timestamp">2 hours ago</span></p>
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#" class="notification-item">
                      <i class="fa fa-check custom-bg-green"></i>
                      <p><span class="text">Your request has been approved</span> <span class="timestamp">3 days ago</span></p>
                    </a>
                  </li>
                  <li class="dropdown-item"><a href="#" class="more">See all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="sr-only">Help</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
                  <li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
                  <li><a href="#"><i class="ti-lock"></i> Security</a></li>
                  <li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="" class="user-picture" alt="Avatar">
                  <span>{{ session('fullname', 'Unknown') }}</span> <!-- Menampilkan nama pengguna atau 'Unknown' -->
                </a>
                <ul class="dropdown-menu dropdown-menu-right logged-user-menu">
                  <li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
                  <li><a href="appviews-inbox.html"><i class="ti-email"></i> <span>Message</span></a></li>
                  <li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
                  <li><a href="{{route('logout')}}"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                </ul>
              </li>


            </ul>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->

      <!-- LEFT SIDEBAR -->
      <div id="sidebar-nav" class="sidebar">
        <nav>
          <ul class="nav" id="sidebar-nav-menu">
            <li class="menu-group">Menu</li>
            <li><a href="" class="active"><i class="ti-dashboard"></i> <span class="title">Dashboard</span></a></li>
            <li><a href="" class=""><i class="ti-unlock"></i> <span class="title">Login</span></a></li>
            <!-- App Cargo -->
            <li class="panel">
              <a href="#subLayoutsParkir" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="false" class="">
                <i class="ti-car"></i>
                <span class="title">B-Tracking </span>
                <i class="icon-submenu ti-angle-left"></i>
              </a>
              <div id="subLayoutsParkir" class="collapse show">
                <ul class="submenu">
                    <li><a href="" class=""><i class="ti-wallet"></i>Quality Control</a></li>
                    <li><a href="" class=""><i class="ti-truck"></i> EIR IN</a></li>
                    <li><a href="" class=""><i class="ti-layout-grid3"></i>Payment </a></li>
                    <li><a href="" class=""><i class="ti-id-badge"></i> Bon Bongkar</a></li>
                  <li><a href="{{url('/delivery_order ')}}" class=""><i class="ti-home"></i> Delivery <Optg></Optg>Orders</a></li>
                  <li><a href="{{url('/bon_muat')}}" class=""><i class="ti-home"></i>Bon Muat</a></li>
                  <li><a href="layout-topnav.html" class=""><i class="ti-truck"></i> EIR OUT</a></li>
                  <li><a href="{{url('/driver')}}" class=""><i class="ti-home"></i>Driver</a></li>
                  <li><a href="layout-topnav.html" class=""><i class="ti-truck"></i> EIR IN</a></li>
                  <li><a href="{{'/ms_estimate_of_repair'}}" class=""><i class="ti-bar-chart"></i>MS Estimate Repair</a></li>
                  <li><a href="{{'/EOR_IN'}}" class=""><i class="ti-timer"></i>EOR_IN</a></li>
                  <li><a href="" class=""><i class="ti-wallet"></i>Switch Dms</a></li>
                </ul>
              </div>
            </li>

            <li class="panel">
              <a href="#subLayoutsForward" data-toggle="collapse" data-parent="#sidebar-nav-menu" aria-expanded="" class="">
                <i class="ti-layout"></i>
                <span class="title">App Setting </span>
                <i class="icon-submenu ti-angle-left"></i>
              </a>
              <div id="subLayoutsForward" class="collapse show">
                <ul class="submenu">
                <li><a href="{{url('/shipping')}}" class=""><i class="ti-briefcase"></i>Shipping</a></li>
                  <li><a href="{{url('/tarif_EOR')}}" class=""><i class="ti-briefcase"></i> Tarif EOR </a></li>
                  <li><a href="{{url('/tarif_lolo')}}" class=""><i class="ti-briefcase"></i> Tarif LOLO </a></li>
                  <li><a href="{{url('/repair_tarif_item')}}" class=""><i class="ti-briefcase"></i> Tarif Repair Item </a></li>
                  <li><a href="{{url('/consignee')}}" class=""><i class="ti-briefcase"></i> Consignee </a></li>
                  <li><a href="layout-fullwidth.html" class=""><i class="ti-archive"></i>Vehicle</a></li>
                  <li><a href="{{url('/depo')}}" class=""><i class="ti-bell"></i> Depo</a></li>
                  <li><a href="layout-grid.html"><i class="ti-folder"></i>Payment Type</a></li>
                  <li><a href="{{url('/pelayaran')}}" class=""><i class="ti-home"></i>Pelayaran</a></li>
                  <li><a href="" class=""><i class="ti-user"></i> Surveyor</a></li>
                  <li><a href="layout-default.html" class=""><i class="ti-headphone"></i> user</a></li>
                  <li><a href="layout-minified.html" class=""><i class="ti-map-alt"></i> Container</a></li>
                  <li><a href="{{url('/location')}}" class=""><i class="ti-map-alt"></i> Location</a></li>
                  <li><a href="{{url('/driver')}}" class=""><i class="ti-map-alt"></i> Driver</a></li>
                </ul>
              </div>
            </li>


          </ul>
          <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
        </nav>
      </div>
      <div class="main-content">
        @yield('content')
      </div>
      <!-- END LEFT SIDEBAR -->

    </div>

    <!-- Vendor -->
    <script src="assets_app/js/vendor.min.js"></script>

    <!-- Datables Core -->
    <script src="assets_app/plugins/datatables.net/jquery.dataTables.min.js"></script>
    <script src="assets_app/plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>

    <!-- Datables Extension -->
    <script src="assets_app/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets_app/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets_app/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets_app/plugins/jszip/jszip.min.js"></script>
    <script src="assets_app/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets_app/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets_app/plugins/datatables.net-buttons-bs4/buttons.bootstrap4.min.js"></script>
    <script src="assets_app/plugins/datatables.net-colreorder/dataTables.colReorder.min.js"></script>
    <script src="assets_app/plugins/datatables.net-colreorder-bs4/colReorder.bootstrap4.min.js"></script>

    <!-- Datatables Init -->
    <script src="assets_app/js/pages/tables-dynamic.init.js"></script>

    <!-- App -->
    <script src="assets_app/js/app.min.js"></script>
  </body>

</html>
