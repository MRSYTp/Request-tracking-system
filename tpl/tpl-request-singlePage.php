
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="<?= TRACK_URL ?>/assets/images/favicon.ico" type="image/ico"/>
    <title>single Page</title>

    <!-- Bootstrap -->
    <link href="<?= TRACK_URL ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>/vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= TRACK_URL ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= TRACK_URL ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?= TRACK_URL ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= TRACK_URL ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href=".<?= TRACK_URL ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    

    <!-- Custom Theme Style -->
    <link href="<?= TRACK_URL ?>/assets/css/custom.min.css" rel="stylesheet">
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col hidden-print menu_fixed">
            <div class="left_col scroll-view menu_fixed">
                <div class="navbar nav_title" style="border: 0;">
                    <p class="site_title"><i class="fa fa-fire"></i> <span>Tracking Panel</span></p>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= TRACK_URL?>assets/images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>خوش آمدید</span>
                        <h2><?= $_SESSION['admin'] ?> </h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>عمومی</h3>
                        <ul class="nav side-menu">
                            <li><a href="<?= site_url('adm-panel.php')?>"><i class="fa fa-table"></i> صفحه درخواست ها </a></li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="تنظیمات">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="تمام صفحه" onclick="toggleFullScreen();">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="قفل" class="lock_btn">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="خروج" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

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
                                <img src="<?= TRACK_URL ?>assets/images/user.png" alt=""><?= $_SESSION['admin'] ?> 
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?= site_url('request-singlePage.php?action=logout')?>"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
                            </ul>
                        </li>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- /header content -->
        
<!-- page content -->
<div class="right_col" role="main">

    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>صفحه تک درخواست</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="product-image">
                                <img src="<?= is_null($image_path) ? site_url('assets/images/image-not-found.jpg') : $image_path ?>" alt="..."/>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                            <h3 class="prod_title"><?= $request->title; ?></h3>

                            <p><?= $request->content; ?></p>
                            <br/>

                            <div class="">
                                <h4 style="display: inline-block;">الویت درخواست :</h4>
                                <strong><?= PriorityProblem[$request->priority] ;?></strong>
                            </div>
                            <br/>

                            <div class="">
                                <h4 style="display: inline-block; ">دسته بتدی درخواست :</h4>
                                <strong ><?= CategoryProblem[$request->category] ;?></strong>
                            </div>
                            <br/>

                            <div class="">
                                <h4 style="display: inline-block; "> وضعیت درخواست :</h4>
                                <strong class="<?= $request->status == 1 ? 'red' :'green'?>"><?= $request->status == 1 ? 'بسته' :'باز'?></strong>
                            </div>
                            <br/>
                            <div class="">
                                <div class="product_price">
                                    <h2 class="price"><?= $user->username; ?></h2>
                                    <span class="price-tax"> ایمیل کاربر : <?= $user->email; ?> </span>
                                    <br>
                                </div>
                            </div>

                            <div class="">
                                <?php if ($request->status == 0) : ?>
                                <button type="button" id="closeRequest" class="btn btn-default btn-lg" onclick="return confirm('مطمعنی میخوای درخواست رو ببندی؟\n');"> بستن درخواست</button>
                                <?php endif; ?>
                                <?php if ($request->status == 0 && !is_null($file_path)) : ?>
                                <a href="<?= $file_path ?>" download><button type="button" class="btn btn-default btn-lg">دانلود فایل پیوستی</button></a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

        <!-- footer content -->
        <footer class="hidden-print">
            <div class="pull-left"> 
                created By  <a href="https://www.linkedin.com/in/mohammadreza-salehi-5681a2339/">Mohammadreza salehi</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?= TRACK_URL ?>/vendors/jquery/dist/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('button#closeRequest').click(function(){
            $.ajax({
                        url: "<?= TRACK_URL . 'process/statusToggle.php' ?>",
                        method: "POST",
                        data: { reqid: <?= $_GET['reqID'] ?> },
                        success: function(response) {
                            if (response = 1) {
                                location.reload();
                                const userResponse = confirm('درخواست بسته شد و به کاربر هم ایمیل شد.\nمیخوای به صفحه درخواست ها برگردی؟');

                                if (userResponse) {
                                    window.location.href = '<?= site_url('adm-panel.php')?>'
                                }
                            }
                        },
                        error: function() {
                            alert("مشکلی در ارتباط با سرور وجود دارد.");
                        }
                    });
        });
    });
</script>
<!-- Bootstrap -->
<script src="<?= TRACK_URL ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= TRACK_URL ?>/assets/js/custom.min.js"></script>


</body>
</html>
