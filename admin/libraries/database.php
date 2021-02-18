<!-- đặt tên biến -->
<?php 
    /*require_once __DIR__. "connect.php";*/
    include("connect.php");
    $sql1 = "SELECT * FROM type_menu" ;
    $type = $conn->query($sql1);
    $sql2 = "SELECT * FROM menu" ;
    $menu = $conn->query($sql2);
    $sql = "SELECT * FROM product ORDER BY id_product DESC" ;
    $product = $conn->query($sql);
    $sql = "SELECT * FROM user" ;
    $user = $conn->query($sql);
    $sql = "SELECT * FROM account" ;
    $account = $conn->query($sql);
    $sql = "SELECT * FROM don_hang ORDER BY id_dh DESC" ;
    $don_hang = $conn->query($sql);
    /*---------Kết nối bảng dữ liệu--------*/
    $dl_menu = mysqli_query($conn,"SELECT * FROM menu mn INNER JOIN type_menu tm ON mn.id_type = tm.id_type ORDER BY id_menu ");  
    $dl_don_hang = mysqli_query($conn,"SELECT * FROM don_hang dh INNER JOIN user us ON dh.id_user = us.id_user INNER JOIN product pd ON pd.id_product = dh.id_product ");
           
?>