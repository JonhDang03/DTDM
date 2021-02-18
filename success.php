<?php require_once __DIR__. "/layouts/header.php";?>
<?php
        session_start();
        $khachhang = mysqli_query($conn,"SELECT * FROM user WHERE user_name ='".$_SESSION['username']."'");
        $items = mysqli_fetch_array($khachhang);
    ?>
    <div class="form-order">
        <div class="tile-login">Đặt hàng</div>
        <form action='' method='POST'>
        <?php
	    	if(isset($_POST['dathang']) && isset($_SESSION['username']) && isset($_SESSION['cart']) )
			{
				$sum_all = 0;
				$sum_sp = 0;
				$hoten=$_POST['ho_ten'];
	            $diachi=$_POST['dia_chi'];
	            $phone=$_POST['phone'];
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
						$insert = mysqli_query($conn,"INSERT INTO don_hang (id_user, ho_ten, phone_dh, dia_chi, id_product, so_luong, tong_tien) VALUES (N'".$items['id_user']."',N'".$hoten."',N'".$phone."',N'".$diachi."',N'".$rows['id_product']."',N'".$_SESSION['cart'][$rows['id_product']]."',N'".$rows['price_product']*$_SESSION['cart'][$rows['id_product']]."')");
		
					}
					echo '	<div class="thongbao">
					        	<h3>Bạn đã đặt hàng thành công!<br></h3>
					        	<p>Chúng tôi sẽ liên hệ trực tiếp với quý khách sớm nhất. Cảm ơn quý khách đã tin tưởng women. Mong quý khách có một ngày vui vẻ.</p>
					        	<p>Mọi thắc mắc xin liên hệ <span style="color: red;">0987654321</span></p>
					        </div>';
					unset($_SESSION['cart']);
				}
				else{
					echo '	<div class="thongbao">
					        	<h3 style="color: red;">Bạn đã đặt hàng không thành công!<br></h3>
					        	<p>Hãy chắc chắn bạn đã có sản phẩm trong giỏ hàng. Mong quý khách có một ngày vui vẻ.</p>
					        	<p>Mọi thắc mắc xin liên hệ <span style="color: red;">0987654321</span></p>
					        </div>';
				}
			} 
		?>
        </form>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php";?>
