<?php session_start();
    require_once __DIR__. "../../libraries/database.php";
    
 ?>
<?php
    ini_set("display_errors","0");
?>
<?php

 // so san pham da add vao cart
    $prd = 0;
    if(isset($_SESSION['cart']))
    {
        $prd = count($_SESSION['cart']);
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WOMEN</title>
<link rel="shortcut icon" type="image/icon-logo" href="img/women.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="public/frontend/css/style.css" rel="stylesheet" />
<link href="public/frontend/css/style-single.css" rel="stylesheet" />
<link href="public/frontend/css/next-single.css" rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>
	
<body>
    <div class="header">
        <div class="header-top">
            <div class="ship">Free ship đơn hàng từ <span style="color: red;"> 200k</span></div>
            <div class="account">
                <nav>
                    <ul class="ac-right">
                        <!-- <li><a href="login.php">Đăng nhập</a></li>
                        <li><a href="register.php">Đăng ký</a></li> -->
                        <li>
                        <?php 
                           if (isset($_SESSION['username']) && $_SESSION['username']){
                               echo '<a href="info.php">Xin chào '.$_SESSION['username']."</a>";
                               echo '<li><a href="logout.php">Đăng Xuất</a></li>';
                           }
                           else{
                               echo "<li><a href='login.php'>Đăng nhập</a></li>
                                    <li><a href='register.php'>Đăng ký</a></li>";
                           }
                        ?>

                        </li>
                    </ul>
                </nav>
            </div>
        </div><!---header-top--->
        <div class="header-bottom">
            <div class="wrap">
                <div class="logo">
                    <a href="#"><img height="91px" src="img/logo.png" alt="women"/></a>
                </div>
                <div class="search">
                    <input type="text" class="search-form" name="s" placeholder="Nhập khóa tìm kiếm của bạn" />
                    <button class="search-button" value="Search" name="s" type="submit">
                        <i class="fa fa-search"></i>
                    </button>	
                </div>
                <div class="call">
                    <img class="phone" src="img/phone.png"/>
                    <h3>Liên hệ ngay</h3>
                    <span>0123-456-789</span>
                </div>
            </div>
        </div><!---header-bottom--->
        
        
    </div> <!---header--->
    <div class="main">
        <div class="container">
            <div class="menu">
                <nav>
                    <ul class="mega-menu">
                        <li class="active"><a href="index.php">TRANG CHỦ</a></li>
                        <li>
                            <a href="product.php?id=1">SON MÔI</a>
                            <div class="drodown-menu">
                                <div class="mega-menu-list">
                                    <ul>
                                        <?php
                                            foreach($menu_son as $row ){
                                            echo "
                                                <li><a href='menu-product.php?id_menu=".$row['id_menu']."'>".$row['name_menu']."</a></li>";
                                             }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="product.php?id=2">PHẤN TRANG ĐIỂM</a>
                            
                            <div class="drodown-menu">
                                <div class="mega-menu-list">
                                    <ul>
                                        <?php
                                            foreach($menu_phan as $row ){
                                            echo "
                                                <li><a href='menu-product.php?id_menu=".$row['id_menu']."'>".$row['name_menu']."</a></li>";
                                             }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="product.php?id=3">DỤNG CỤ TRANG ĐIỂM</a>
                           
                            <div class="drodown-menu">
                                <div class="mega-menu-list">
                                    <ul>
                                        <?php
                                            foreach($menu_dc as $row ){
                                            echo "
                                                <li><a href='menu-product.php?id_menu=".$row['id_menu']."'>".$row['name_menu']."</a></li>";
                                             }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="active"><a href="about.php">GIỚI THIỆU</a></li>
                    </ul>
                </nav>
                <div class="shopping-cart-out">
                    <div class="shopping-cart">
                        <a class="shop-link" href="order.php" title="Bạn đã chọn">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                            <b>Giỏ hàng</b>
                            <span class="sp"><?php echo $prd; ?></span>
                        </a>
                    </div>
                </div>  
            </div> <!---menu--->