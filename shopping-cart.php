<?php require_once __DIR__. "/layouts/header.php";?>
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


<script>	
	$(document).ready(function() {
		function goBack(){
				window.history.back();
			}

	});
	
</script>
    
        <div class="cart_div">
            <a href="san-pham/shopping-cart.php" class="cart_top">
            	<span class="count"><?php echo $prd; ?></span><!--end count-->
    			<span class="tit">Giỏ hàng</span><!--end tit-->
                    
    		</a>
            <div class="quick_cart">
			    <?php //cap nhat lai gia khi nhap vao so luong
			        if(isset($_POST['update_cart']))
			        {
			            foreach($_POST['num'] as $id => $prd)//prd la gia tri nhap vao.moi id tuong ung voi so luong nhap vao
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
						<form method="post">
						    <div class="cart_oder">
						            <ul class="top_cart">
						                <li class="sp">SẢN PHẨM </li>
						                <li class="dg">ĐƠN GIÁ</li>
						                <li class="sl">SỐ LƯỢNG</li>
						                <li class="tt">THÀNH TIỀN</li>
						            </ul>
						            <?php
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
						            $item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');
						            while ($rows = mysqli_fetch_array($item_result))
						            {
						    ?>
						            <ul class="bottom_cart">
						                <li class="sp">
						                    <img src="../images/<?php echo $rows['image_product']; ?>" class="cartImg">
						                    <b class="Cart_title_pro"><?php echo $rows['name_product']; ?></b>
						                    <div class="delete_Cart"><a href="san-pham/delcart.php?id=<?php echo $rows['id_product']; ?>" class="del_sp">Bỏ sản phẩm</a></div>
						                    
						                </li>
						             <li class="dg"><?php echo number_format($rows['price_product']);?> VNĐ</li>
						            <li class="sl"> <input type="text" name ="num[<?php echo $rows['id_product']; ?>]" value="<?php echo $_SESSION['cart'][$rows['id_product']]; ?>" size="3" class="capnhatCartTxt"/></li>
						            <li class="tt"><?php echo number_format($rows['price_product']*$_SESSION['cart'][$rows['id_product']]); ?> VNĐ</li>
						            </ul>
						            
						    <?php			
						            }
						        }
						    ?>
						    
						    <div class="go_shopping">
						    	<input type="submit" name="update_cart" value="Cập nhật giỏ hàng" class="cap_nhat_cart"/>
						    	<a href="san-pham/shopping-cart.php" class="goa_shopping">CHUYỂN TỚI TRANG ĐẶT HÀNG</a></div>
						    </div><!--end cart_order-->
						</form>
            </div><!--End Quick-->
        </div><!--end cart_div-->
		<div class="navigation">

		</div>
		<?php //cap nhat lai gia khi nhap vao so luong
			if(isset($_POST['update_cart']))
			{
				foreach($_POST['num'] as $id => $prd)//prd la gia tri nhap vao.moi id tuong ung voi so luong nhap vao
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
		<form method="post">
			<div class="main-shopping">
				<p class="cart_info"><?php if($_SESSION['cart'] != NULL) {echo "Thông tin chi tiết giỏ hàng!";} else{echo"Hiện tại bạn chưa có sản phẩm nào!";} ?></p>
				<div class="cart_oder">
			    	<ul class="top_cart">
			        	<li class="sp">SẢN PHẨM </li>
			            <li class="dg">ĐƠN GIÁ</li>
			            <li class="sl">SỐ LƯỢNG</li>
			            <li class="tt">THÀNH TIỀN</li>
			        </ul>
					
					<?php
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
							$item_result = mysqli_query($conn,$item_query) or die ('Cannot select table!');
							while ($rows = mysqli_fetch_array($item_result))
							{
					?>
					<!--SHOW CART-->
				
			        <ul class="bottom_cart">
			        	<li class="sp">
			            	<a><img src="../images/<?php echo $rows['image_product']; ?>" class="cartImg"></a>
			                <a class="Cart_title_pro"><?php echo $rows['name_product']; ?></a>
			                <div class="delete_Cart"><a href="delcart.php?id=<?php echo $rows['id_product']; ?>">Bỏ sản phẩm</a></div>
			            </li>
			            <li class="dg"><?php echo number_format($rows['price_product']);?> VNĐ</li>
			            <li class="sl"> <input type="text" name ="num[<?php echo $rows['id_product']; ?>]" value="<?php echo $_SESSION['cart'][$rows['id_product']]; ?>" size="3" class="capnhatCartTxt"/></li>
			            <li class="tt"><?php echo number_format($rows['price_product']*$_SESSION['cart'][$rows['id_product']]); ?> VNĐ</li>
			        </ul>	
					<?php
					$sum_all += $rows['price_product']*$_SESSION['cart'][$rows['id_product']];
					$sum_sp += $_SESSION['cart'][$rows['id_product']];
							}
						}
					?>
			    </div><!--end cart_oder-->

				<p class="update_cart">
					<input type="submit" name="update_cart" value="Cập nhật giỏ hàng" class="cap_nhat_cart"/>
				    <!--<input type="button" name="dat_hang" value="Đặt hàng" class="dat_hang"/>-->
				   	<?php
				    	if(isset($_SESSION['username']))
						{
							echo '<a href="../admin/set_cart.php" class="dat_hang" style="display:block;">Đặt hàng</a>';
							echo '<a href="#login-box" id="dat_hang" class="login-window" style="display:none;">Đặt hàng</a>';
						}
						else
						{
							echo '<a href="../admin/set_cart.php" class="dat_hang" style="display:none;">Đặt hàng</a>';
							echo '<a href="#login-box" id="dat_hang" class="login-window" style="display:block;">Đặt hàng</a>';
						}
					?>

				    
				</p><!--end update-cart--->

				<p class="sum_money">Tổng sản phẩm:<strong class="sum_sp"><?php echo $sum_sp; ?></strong><br/>Tổng tiền:<strong class="sum_sp"><?php echo number_format($sum_all); ?> VNĐ</strong></p>

				<a href="javascript:history.go(-1)" class="back_page"> Tiếp tục mua hàng</a>

				<a href="delcart.php?id=0" class="delete_all">Xóa giỏ hàng</a>
			</div><!--end main shopping--> 
		</form>

<div class="clear10px"></div>
    	
<?php require_once __DIR__. "/layouts/footer.php";?>
  