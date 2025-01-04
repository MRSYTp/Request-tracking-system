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
    <title>Admin panel</title>

    <!-- Bootstrap -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= TRACK_URL ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?= TRACK_URL ?>assets/css/custom.min.css" rel="stylesheet">
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
                        <img src="<?= TRACK_URL ?>assets/images/user.png" alt="..." class="img-circle profile_img">
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
                            <li><a><i class="fa fa-table"></i> خانه <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">داشبورد</a></li>
                                    <li><a href="index2.html">داشبورد ۲</a></li>
                                    <li><a href="index3.html">داشبورد ۳</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> عناصر ظاهری <span
                                    class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="general_elements.html">عناصر عمومی</a></li>
                                </ul>
                            </li>

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
                                <li><a href="<?= site_url('adm-panel.php?action=logout')?>"><i class="fa fa-sign-out pull-right"></i> خروج</a></li>
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
    <div class="row top_tiles">
        <?php foreach(PriorityProblem as $key => $value)  :?>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-paper-plane"></i></div>
                    <div class="count"><?= $requestModel->getRequestCountByPriorityID($key); ?></div>
                    <h3> تعداد الویت <?= $value ?></h3>
                    <p class="count_bottom" style="display: inline;">
                     بسته ها :  
                        <i class="red"><?= $requestModel->getRequestCountByPriorityID($key,1);?></i> 
                    </p>
                     باز ها :   
                    <span class="count_bottom">
                        <i class="green"><?= $requestModel->getRequestCountByPriorityID($key,0);?></i> 
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-archive"></i></div>
                    <div class="count"><?= count($requestModel->getRequests());?></div>
                    <h3>تعداد کل</h3>
                    <p class="count_bottom" style="display: inline;">
                    بسته ها :  
                        <i class="red"><?= count($requestModel->getRequests(1));?></i> 
                    </p>
                    باز ها :  
                    <span class="count_bottom">
                        <i class="green"><?= count($requestModel->getRequests(0));?></i> 
                    </span>
                </div>
            </div>
    </div>
    <!-- <h3>تعداد درخواست های دسته بندی شده:</h3> -->
    <div class="row tile_count">
        <?php foreach(CategoryProblem as $key => $value): ?>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-paper-plane-o"></i> تعداد <?= $value ?> </span>
            <div class="count"><?= $requestModel->getRequestCountByCategoryID($key); ?></div>
            <span class="count_bottom">
            تعداد باز و بسته ها :  
                <i class="red"><?= $requestModel->getRequestCountByCategoryID($key,1); ?></i> 
            </span>
            |
            <span class="count_bottom">
                <i class="green"><?= $requestModel->getRequestCountByCategoryID($key,0); ?></i> 
            </span>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- /top tiles -->
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>طراحی جدول</h2>
                        <div class="holder-status pull-left">
                        <a href="<?=site_url('adm-panel.php?req=1')?>" class="btn btn-danger">بسته ها</a>
                        <a href="<?=site_url('adm-panel.php?req=0')?>" class="btn btn-success">باز ها</a>
                        <a href="<?=site_url('adm-panel.php')?>" class="btn btn-primary">همه</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">ایدی</th>
                                    <th class="column-title">عنوان</th>
                                    <th class="column-title">دسته بندی</th>
                                    <th class="column-title">الویت</th>
                                    <th class="column-title">وضعیت</th>
                                    <th class="column-title">فایل پیوستی</th>
                                    <th class="column-title">تاریخ ثبت</th>
                                    <th class="column-title no-link last"><span class="nobr">جزییات بیشتر</span>
                                    </th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach($Requests as $Request) : ?>
                                <tr class="even pointer">
                                    <td class="a-center"><?= $Request->id ?></td>
                                    <td class=" "><?= $Request->title ?></td>
                                    <td class=" "><?= CategoryProblem[$Request->category] ?></td>
                                    <td class=" "><?= PriorityProblem[$Request->priority] ?></td>
                                    <td class=" "><?= $Request->status == 1 ? 'بسته' : 'باز' ?></td>
                                    <td class=" "><i class="fa fa-<?= is_null($Request->attachment) ? 'times' : 'check' ?>"></i></td>
                                    <td class="a-right a-right "><?= verta($Request->created_at)->format('Y.m.d');?></td>
                                    <td class=" last"><a href="<?=site_url("request-singlePage.php?reqID={$Request->id}")?>">مشاهده</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
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
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->
<script src="<?= TRACK_URL ?>vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="<?= TRACK_URL ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= TRACK_URL ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= TRACK_URL ?>vendors/moment/min/moment.min.js"></script>
<script src="<?= TRACK_URL ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?= TRACK_URL ?>assets/js/custom.min.js"></script>


</body>
</html>
