<!doctype html>
<html lang="en">

<head>
  <title>PT Bidzaksana  Logistik Indonesia</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link
    href="assets_multi/js_plugin/bootstrap.min.css"
    rel="stylesheet"
    
  />

  <!-- FontAwesome untuk Ikon -->
  <link
    rel="stylesheet"
    href="assets_multi/js_plugin/all.css"
    
  />

  <!-- jQuery Script -->
  <script
    src="assets_multi/js_plugin/jquery-3.3.1.slim.min.js"
    
  ></script>

  <!-- Popper.js -->
  <script
    src="assets_multi/js_plugin/umd/popper.min.js"
  ></script>

  <!-- Bootstrap JavaScript -->
  <script
    src="assets_multi/js_plugin/bootstrap.min.js"
  ></script>

  <!-- jQuery Bootstable Plugin -->
  <script src="assets_multi/js_plugin/bootstable.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" href="assets_multi/js_plugin/jquery.dataTables.min.css" />

<!-- jQuery (pastikan sudah dimasukkan) -->


<!-- DataTables JS -->
<script src="assets_multi/js_plugin/jquery.dataTables.min.js"></script>

   <!-- Tambahkan Style untuk Background dan Responsivitas-->
    <style>
      body {
        background-color: #ffff;
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Hindari scroll horizontal pada body */
      }

      header {
        background-color: #000000;
      }

      /* Change the color of text in the th tags to black */
      th {
        color: black;
      }

      .container {
        width: 100%;
        margin: 0 auto;
      }

      /* Membuat tabel dapat di-scroll pada perangkat mobile */
      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling di iOS */
        width: 100%;
      }

      /* Tabel untuk perangkat mobile */
      .table {
        min-width: 1000px; /* Sesuaikan dengan lebar kolom yang ada */
      }
    </style>

    <!-- Tambahkan Style untuk Background dan Responsivitas-->
 
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets_multi/images/favicon.ico">
</head>

  <body>
    
      <div class="main-content">
        @yield('content')
      </div>
    
  </body>

</html>