<?php 
    session_start();
    if (!isset($_SESSION['admin'])){
        header("location: /women/admin/login.php");
    }
    require_once __DIR__. "../../libraries/database.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hệ quản trị</title>
    <link rel="shortcut icon" type="image/icon-logo" href="img/women.png">
    <!-- Core CSS - Include with every page -->
    <link href="/women/public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/women/public/admin/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="/women/public/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/women/public/admin/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="/women/public/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/women/public/admin/css/sb-admin.css" rel="stylesheet">
    <!-- css add -->
    <link href="/women/public/admin
    /css/style.css" rel="stylesheet" />
    <!-- ckeditor -->
    <script type="text/javascript" src="/women/admin/ckeditor/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">
                    <?php 
                           if (isset($_SESSION['username']) && $_SESSION['username']){
                               echo 'Xin chào '.$_SESSION['username']."<br/>";
                           }
                        ?>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Tài khoản</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/women/admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/women/admin/index.php"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/women/admin/modules/account/index.php">Admin</a>
                                </li>
                                <li>
                                    <a href="/women/admin/modules/user/index.php">User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comment fa-fw"></i> Tin tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/#">Danh mục</a>
                                </li>
                                <li>
                                    <a href="#">Tin tức</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Danh mục sản phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/women/admin/modules/product/add.php">Thêm sản phẩm</a>
                                </li>
                                <li>
                                    <a href="/women/admin/modules/product/index.php">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="#">Nhà cung cấp</a>
                                </li>
                                <li>
                                    <a href="/women/admin/modules/category/index.php">Danh mục</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Đơn hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/women/admin/modules/order/index.php">Danh sách</a>
                                </li>
                                <li>
                                    <a href="#">Đơn hàng chưa duyệt</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý chung<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="#">Foooter</a>
                                </li>
                                <li>
                                    <a href="#">Menu</a>
                                </li>
                                <li>
                                    <a href="#">Slide</a>
                                </li>
                                <li>
                                    <a href="/#">Phản hồi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>