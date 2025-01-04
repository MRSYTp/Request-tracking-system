<?php require 'bootstrap/init.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404</title>

    <!-- Bootstrap -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= TRACK_URL ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= TRACK_URL ?>vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= TRACK_URL ?>assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>با عرض پوزش ما نمی توانیم این صفحه را پیدا کنیم</h2>
              <p>این صفحه که شما به دنبال آن هستید وجود ندارد <a href="<?= site_url()?>">گزارش مشکل؟</a>
              </p>

            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= TRACK_URL ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= TRACK_URL ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= TRACK_URL ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= TRACK_URL ?>vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= TRACK_URL ?>assets/js/custom.min.js"></script>
  </body>
</html>
