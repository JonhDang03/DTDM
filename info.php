<?php require_once __DIR__. "/layouts/header.php";?>
<div class="login-user">
    <?php
        session_start();
        $khachhang = mysqli_query($conn,"SELECT * FROM user WHERE user_name ='".$_SESSION['username']."'");
        $items = mysqli_fetch_array($khachhang);
    ?>
    <?php
            if(isset($_POST['update_info']) )
            {
                $hoten=$_POST['ho_ten'];
                $diachi=$_POST['dia_chi'];
                $phone=$_POST['phone'];
                $gmail=$_POST['gmail'];
                
                    $insert = mysqli_query($conn,"INSERT INTO user (hoten, phone, diachi, gmail) VALUES (,N'".$hoten."',N'".$phone."',N'".$diachi."',N'".$gmail."')");
        
                    
                    echo '  <div class="thongbao">
                                <h3>Bạn đã cập nhật thành công!<br></h3>
                                <p>Cảm ơn quý khách đã tin tưởng women. Mong quý khách có một ngày vui vẻ.</p>
                                <p>Mọi thắc mắc xin liên hệ <span style="color: red;">0987654321</span></p>
                            </div>';
            } 
        ?>
    <div class="form-order">
        <div class="tile-login">Thông tin cá nhân</div>
        <form action='' method='POST'>
            <table class="table-order">
                <thead>
                    <tr>
                        <th style="width: 50%;">Thông tin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-25">
                                    <label class="" for="fname">Họ tên</label>
                                </div>
                                <div class="col-75" style="width: 60%;">
                                    <input type="text" id="fname" name='ho_ten' placeholder="Họ tên" value="<?php echo $items['hoten']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="" for="fname">Gmail</label>
                                </div>
                                <div class="col-75" style="width: 60%;">
                                    <input type="text" id="fname" name='gmail' placeholder="Gmail" value="<?php echo $items['gmail']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="" for="fname">Địa chỉ</label>
                                </div>
                                <div class="col-75" style="width: 60%;">
                                    <input type="text" id="fname" name='dia_chi' placeholder="Địa chỉ" value="<?php echo $items['diachi']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="" for="fname">Số điện thoại</label>
                                </div>
                                <div class="col-75" style="width: 60%;">
                                    <input type="text" id="fname" name='phone' placeholder="Số điện thoại" value="<?php echo $items['phone']; ?>">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row input-sm row-login">
                <input type="submit" name="update_info" value="Cập nhật">
            </div>
        </form>
    </div>
</div>
<div class="form-order">
        <div class="tile-login">Đơn hàng</div>
        
        <form action='' method='POST'>
            <table class="table-order">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th style="width: 30%;">Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                    <?php
                            $item_query = "SELECT * FROM  don_hang dh INNER JOIN user us ON dh.id_user = us.id_user INNER JOIN product pd ON pd.id_product = dh.id_product WHERE us.user_name = '".$_SESSION['username']."'";
                            $item_result = mysqli_query($conn,$item_query) or die ('Không thể kết nối!');
                            while ($rows = mysqli_fetch_array($item_result))
                            {
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $rows['name_product']; ?></td>
                        <td><img style="width: 70px; height: 70px;" src="/women/admin/modules/product/<?php echo $rows['image_product']; ?>" alt="son" /></td>
                        <td> <?php echo $rows['price_product']; ?>.000 đ</td>
                        <td><?php echo $rows['so_luong']; ?></td>
                        <td><?php echo $rows['ngay_dat_hang']; ?></td>
                        <td><?php echo $rows['tong_tien']; ?></td>
                        <td class="center" style="width: 12%">
                             <a class="btn-danger" href="delete.php?id=<?php echo $rows['id_hd'];?>"> <i class="fa fa-times"></i> Xoá</a>
                        </td>
                    </tr>
                </tbody>
                    <?php
                        $stt++;
                        }  
                    ?>
            </table>
            <div class="row input-sm row-login">
                <a href="order.php"><input type="submit" name="" value="Cập nhật"></a>
            </div>
        </form>
    </div>
<?php require_once __DIR__. "/layouts/footer.php";?>
