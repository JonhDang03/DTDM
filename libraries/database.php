<?php 
    /*require_once __DIR__. "connect.php";*/
    include("connect.php");
    $sql1 = "SELECT * FROM type_menu" ;
    $type = $conn->query($sql1);
    $sql2 = "SELECT * FROM menu" ;
    $menu = $conn->query($sql2);
    $sql = "SELECT * FROM menu WHERE id_type = 1" ;
    $menu_son = $conn->query($sql);
    $sql = "SELECT * FROM menu WHERE id_type = 2" ;
    $menu_phan = $conn->query($sql);
    $sql = "SELECT * FROM menu WHERE id_type = 3" ;
    $menu_dc = $conn->query($sql);
    /*---------Kết nối bảng dữ liệu--------*/
    $dl_menu = mysqli_query($conn,"SELECT * FROM menu mn INNER JOIN type_menu tm ON mn.id_type = tm.id_type ORDER BY id_menu ");  
    $dl_product_1 = mysqli_query($conn,"SELECT * FROM product pd INNER JOIN menu mn ON mn.id_menu = pd.id_menu INNER JOIN type_menu tm ON mn.id_type = tm.id_type WHERE tm.id_type = 1 ORDER BY id_product DESC");  
    $dl_product_2 = mysqli_query($conn,"SELECT * FROM product pd INNER JOIN menu mn ON mn.id_menu = pd.id_menu INNER JOIN type_menu tm ON mn.id_type = tm.id_type WHERE tm.id_type = 2 ORDER BY id_product DESC");       
    $dl_product_3 = mysqli_query($conn,"SELECT * FROM product pd INNER JOIN menu mn ON mn.id_menu = pd.id_menu INNER JOIN type_menu tm ON mn.id_type = tm.id_type WHERE tm.id_type = 3 ORDER BY id_product DESC");
    $dl_product_4 = mysqli_query($conn,"SELECT * FROM product pd INNER JOIN menu mn ON mn.id_menu = pd.id_menu INNER JOIN type_menu tm ON mn.id_type = tm.id_type WHERE tm.id_type = 3 ORDER BY id_product ASC");
?>
                    