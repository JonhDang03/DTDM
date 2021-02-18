<?php require_once __DIR__. "/layouts/header.php";?>
                <?php //cap nhat lai gia khi nhap vao so luong
                    if(isset($_POST['update_cart']))
                    {
                        foreach($_POST['quantity'] as $id => $prd)//prd la gia tri nhap vao.moi id tuong ung voi so luong nhap vao
                        {
                            if(($prd == 0) and (is_numeric($prd)))//nhap vao =0 thi xoa san pham do di
                            {
                                unset($_SESSION['cart'][$id]);
                            }
                            elseif(($prd > 0) and (is_numeric($prd)))//nhap vao so luong >0  thi tiep tuc tinh
                            {
                                $_SESSION['cart'][$id] = $prd;
                            }
                        }
                    }
                ?>          
<div class="login-user">
    <div class="form-order">
        <div class="tile-login">Giỏ hàng</div>
        
        <form action='' method='POST'>
            <table class="table-order">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th style="width: 30%;">Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                    <?php
                        $stt = 1;
                        $sum_all = 0;
                        $sum_sp = 0;
                        if($_SESSION['cart'] != NULL)
                        {
                            foreach($_SESSION['cart'] as $id =>$prd)
                            {
                                $arr_id[] = $id;
                            }
                            $str_id = implode(',',$arr_id);
                            $item_query = "SELECT * FROM  product WHERE id_product IN ($str_id) ORDER BY id_product ASC";
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
                        <td>
                            <div class="buttons_added">
                                <input onclick="var result = document.getElementById('quantity[<?php echo $rows['id_product']; ?>]'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" class="minus is-form" type="button" value="-">
                                <input id='quantity[<?php echo $rows['id_product']; ?>]' class="input-qty" type="number" min='1' name='quantity[<?php echo $rows['id_product']; ?>]' type='text' value='<?php echo $_SESSION['cart'][$rows['id_product']]; ?>' />
                                <input onclick="var result = document.getElementById('quantity[<?php echo $rows['id_product']; ?>]'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="plus is-form" type="button" value="+">
                            </div>
                        </td>
                        <td><?php echo number_format($rows['price_product']*$_SESSION['cart'][$rows['id_product']]); ?>.000 đ</td>
                        <td class="center" style="width: 12%">
                             <a class="btn-danger" href="delete-cart.php?id=<?php echo $rows['id_product'];?>"> <i class="fa fa-times"></i> Xoá</a>
                        </td>
                    </tr>
                </tbody>
                    <?php
                        $stt++;
                        $sum_all += $rows['price_product']*$_SESSION['cart'][$rows['id_product']];
                        $sum_sp += $_SESSION['cart'][$rows['id_product']];
                                }
                            }
                            else{
                                echo "<tbody><tr><td>Chưa có sản phẩm nào trong giỏ hàng</td></tr></tbody>";
                            }
                    ?>
            </table>
            <div class="row input-sm row-login">
                <input type="submit" name="update_cart" value="Cập nhật">
            </div>
        </form>
    </div>
    <?php
        session_start();
        $khachhang = mysqli_query($conn,"SELECT * FROM user WHERE user_name ='".$_SESSION['username']."'");
        $items = mysqli_fetch_array($khachhang);
    ?>
    <div class="form-order">
        <div class="tile-login">Đặt hàng</div>
        <form action='success.php' method='POST'>
            <table class="table-order">
                <thead>
                    <tr>
                        <th style="width: 50%;">Thông tin</th>
                        <th>Hoá đơn</th>
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
                        <td>
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;">Tổng sản phẩm</th>
                                        <th style="width: 50%;">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $sum_sp; ?></td>
                                        <td><?php echo $sum_all; ?>.000 đ</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input type="radio" id="remb" name="remember" value="remember"> Thanh toán khi nhận hàng</label>
                                        </td>
                                        <td>
                                            <label><input type="radio" id="remb" name="remember" value="remember"> Thanh toán bằng thẻ</label>
                                        </td>
                                    </tr>
                                    <tr class="tr-hoadon">
                                        <td>
                                            <label><b>Vận chuyển</b></label>
                                            <label><b>Tổng tiền</b></label>
                                        </td>
                                        <td>
                                            <label>30.000 đ</label>
                                            <label><?php echo $sum_all+30 ; ?>.000 đ</label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row input-sm row-login">
                <input type="submit" name="dathang" value="Đặt hàng">
            </div>
        </form>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php";?>
