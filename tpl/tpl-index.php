
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="../build/images/favicon.ico" type="image/ico"/>
    <title>Request Form</title>

    <!-- Bootstrap -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= TRACK_URL ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= TRACK_URL ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= TRACK_URL ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?= TRACK_URL ?>assets/css/custom.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>assets/css/helper.css" rel="stylesheet">
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- top navigation -->
        <div class="top_nav hidden-print">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="<?= TRACK_URL ?>assets/images/img.jpg" alt="">مرتضی کریمی
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">                               
                                <li><a href="<?= site_url('index.php?action=logout')?>"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->
        
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <!-- /top tiles -->
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <form class="form-horizontal form-label-left" method="post" action="<?= site_url('index.php')?>" enctype="multipart/form-data">

                            <span class="section">فرم مشکلات</span>
                            
  

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >عنوان<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"  name="title" placeholder="نمونه: مشکل ورود به حساب کاربری" required="" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">دسته‌بندی مشکل<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="category" class="form-control" required>
                                        <option value="">انتخاب کنید</option>
                                        <option value="1">مشکل فنی</option>
                                        <option value="2">مشکل حساب کاربری</option>
                                        <option value="3">مشکل امور مالی</option>
                                        <option value="4">مشکل در خرید</option>
                                        <option value="5">درخواست ویژگی جدید</option>
                                        <option value="6">سایر موارد</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">اولویت<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input type="radio" name="priority" value="3" required  class="flat" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> زیاد 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input type="radio" name="priority" value="2" required  class="flat" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>  متوسط
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label class="">
                                            <div class="iradio_flat-green" style="position: relative;"><input type="radio" name="priority" value="1" required  class="flat" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>  کم 
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">شرح مشکل<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" required="required" name="content" class="form-control col-md-7 col-xs-12" required minlength="20"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">فایل پیوست 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="attachment" name="attachment" accept=".jpg,.png,.pdf,.docx">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">انصراف</button>
                                    <button id="send" type="submit" class="btn btn-success">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- /page content -->
 
        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left">
                Gentelella - قالب پنل مدیریت بوت استرپ <a href="https://colorlib.com">Colorlib</a> | پارسی شده توسط <a
                    href="https://morteza-karimi.ir">مرتضی کریمی</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
<!-- bootstrap-progressbar -->
<script src="<?= TRACK_URL ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= TRACK_URL ?>vendors/iCheck/icheck.min.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="<?= TRACK_URL ?>vendors/moment/min/moment.min.js"></script>

<script src="<?= TRACK_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Chart.js -->
<script src="<?= TRACK_URL ?>vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="<?= TRACK_URL ?>vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- gauge.js -->
<script src="<?= TRACK_URL ?>vendors/gauge.js/dist/gauge.min.js"></script>
<!-- Skycons -->
<script src="<?= TRACK_URL ?>vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= TRACK_URL ?>vendors/Flot/jquery.flot.js"></script>
<script src="<?= TRACK_URL ?>vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= TRACK_URL ?>vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= TRACK_URL ?>vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= TRACK_URL ?>vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= TRACK_URL ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= TRACK_URL ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= TRACK_URL ?>vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= TRACK_URL ?>vendors/DateJS/build/production/date.min.js"></script>
<!-- JQVMap -->
<script src="<?= TRACK_URL ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= TRACK_URL ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= TRACK_URL ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= TRACK_URL ?>assets/js/custom.min.js"></script>


</body>
</html>
