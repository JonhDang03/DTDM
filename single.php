<?php require_once __DIR__. "/layouts/header.php";?>   
<?php 
    $dl_product = mysqli_query($conn,"SELECT * FROM product pd INNER JOIN menu mn ON mn.id_menu = pd.id_menu INNER JOIN type_menu tm ON mn.id_type = tm.id_type WHERE id_product = '".$_GET['id']."' ");
?>   
<div class="sp-nb">
    <?php
        while ($row = mysqli_fetch_assoc($dl_product))
        {
    ?>
                <div class="wrap-3">
                    <div class="link-dan">
                
                        <div class="link">
                            <a href="index.php">TRANG CHỦ <span><i class="fa fa-caret-right"></i> </span> </a>
                            
                            <a href="#"> <?php echo $row['name_type']; ?> <span><i class="fa fa-caret-right"></i> </a>
                            <span> <?php echo $row['name_product']; ?> </span>
                        </div>
                        <div class="border"></div>
                    </div> <!--end-link dan-->
                    <div class="view-sp">
                        <div class="view-img">
                            <div class="img-sp">
                                <div class="mySlides">
                                    <div class="numbertext">1</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">4</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">5</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">6</div>
                                    <img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" >
                                </div>

                                <a class="prev1" onclick="plusSlides(-1)">❮</a>
                                <a class="next1" onclick="plusSlides(1)">❯</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="row">
                                    <div class="column">
                                      <img class="demo cursor" src="img/single/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
                                  </div>
                                  <div class="column">
                                      <img class="demo cursor" src="img/single/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
                                  </div>
                                  <div class="column">
                                      <img class="demo cursor" src="img/single/1.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
                                  </div>
                                  <div class="column">
                                      <img class="demo cursor" src="img/single/1.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
                                  </div>
                                  <div class="column">
                                      <img class="demo cursor" src="img/single/1.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
                                  </div>    
                                  <div class="column">
                                      <img class="demo cursor" src="img/single/1.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
                                  </div>
                              </div>
                            </div><!-- view-sp -->
                        </div><!-- view-img -->
                        <script type="text/javascript">
                            var slideIndex = 1;
                            showSlides(slideIndex);

                            function plusSlides(n) {
                              showSlides(slideIndex += n);
                            }

                            function currentSlide(n) {
                              showSlides(slideIndex = n);
                            }

                            function showSlides(n) {
                              var i;
                              var slides = document.getElementsByClassName("mySlides");
                              var dots = document.getElementsByClassName("demo");
                              var captionText = document.getElementById("caption");
                              if (n > slides.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = slides.length}
                                  for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                  }
                                  for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                  }
                                  slides[slideIndex-1].style.display = "block";
                                  dots[slideIndex-1].className += " active";
                                  captionText.innerHTML = dots[slideIndex-1].alt;
                                }
                        </script>
                        <!-- <div class="sp-c2">
                            <div class="product-image">
                                <div class="zoom-img">
                                    <a href="#"><img src="img/single/1.jpg" alt="son" /></a>
                                </div>
                                
                                <a href="#" class="new-box">new</a>
                            </div>
                            <div class="img-icon zoom-img">
                                <a href="#"><img src="img/single/2.jpg" alt="son" /></a>
                                <a href="#"><img src="img/single/2.jpg" alt="son" /></a>
                                <a href="#"><img src="img/single/2.jpg" alt="son" /></a>
                            </div>
                        </div>--> <!--end- view sp-c-->
                        <div class="gt">
                            <div class="name">
                                <p><b><?php echo $row['name_product']; ?></b></p>
                            </div>
                            <div class="price-1">
                                <span style="color: #777777; font-size: 20px;">Giá bán: </span>
                                <p><?php echo $row['price_product']; ?>.000đ</p>
                            </div>
                            <div class="gt-c">
                                <p><?php echo $row['describe_product']; ?></p>
                            </div>
                            <div class="buy-now">
                                <div class="amount">
                                    <p class="small-title"><b>Số lượng</b></p> 
                                    <div class="cart-quantity">
                                        <div class="buttons_added">
                                            <input onclick="var result = document.getElementById('quantity[<?php echo $rows['id_product']; ?>]'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" class="minus is-form" type="button" value="-">
                                            <input id='quantity[<?php echo $rows['id_product']; ?>]' class="input-qty" type="number" min='1' name='quantity[<?php echo $rows['id_product']; ?>]' type='text' value='<?php echo $_SESSION['cart'][$rows['id_product']]; ?>' />
                                            <input onclick="var result = document.getElementById('quantity[<?php echo $rows['id_product']; ?>]'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="plus is-form" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="buy">
                                    <a class="add-buy" title="Mua" href="add-cart.php?id=<?php echo $row['id_product'];?>"><button class="button">Đặt hàng</button></a>
                                </div>
                            </div>
                            <div class="tuvan">
                                <p>GỌI TƯ VẤN <b>0987.654.321</b></p>
                            </div>
                        </div> <!--end-gt-->
                        <div class="ckProduct">
                            <div class="titile">
                                CAM KẾT KHI MUA HÀNG TẠI <span>WOMEN.COM</span>
                                
                            </div><!--titile-->
                            <div class="deCk deCkTtct">
                                <span class="icon"></span><!--end icon-->
                                <span class="ttCK">Nhận hàng trong <b class="30p">30 phút</b> tại TP.Vinh (Thanh toán tiền mặt hoặc chuyển khoản)</span><!--end ttCK-->
                            </div><!--deCk deCkTtct-->
                            <div class="deCk deCkGhMpTq">
                                <span class="icon"></span><!--end icon-->
                                <span class="ttCK">Giao hàng miễn phí cho đơn hàng trên 200k</span><!--end ttCK-->
                            </div><!--Endd eCk deCkGhMpTq-->
                            
                            <div class="deCk deCkHln">
                                <span class="icon"></span><!--end icon-->
                                <span class="ttCK">Xem hàng tại nhà hài lòng mới thanh toán</span><!--end ttCK-->
                            </div><!--end deCk deCkHln-->
                            <div class="deCk deCkHlndt">
                                <span class="icon"></span><!--end icon-->
                                <span class="ttCK">Được đổi trả trong vòng 7 ngày với chính sách đặc biệt thuận lợi</span><!--end ttCK-->
                            </div><!--end deCk deCkHlndt-->
                            
                            <div class="deCk deCkTlnq">
                                <span class="icon"></span><!--end icon-->
                                <span class="ttCK">Nhận ngay mẫu thử miễn phí - Tích lũy nhận quà</span><!--end ttCK-->
                            </div><!--end deCk deCkTlnq-->
                        </div><!--end ckProduct-->
                        <div class="gt-ct">
                            <a class="ct" title="chi tiết" href="#"><button class="button2">Mô tả</button></a>
                            <div class="mt">
                                <?php echo $row['noi_dung']; ?>
                            </div>
                        </div><!--end-gt-ct-->

                    </div><!--end-view-sp-->
                    
                </div>
                
            </div> <!--end-sp-nb-->
        </div>
    <?php
         }
     ?>    
    </div><!--end-main-->
    <div class="all-sp">
        <div class="wrap-sp">
            <div class="sp-c">
                <div class="left-sp">
                    <h2 class="center-title">Sản phẩm liên quan</h2>
                </div>
                <div class="box">
                    <div class="item">
                        <div class="new-sp">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <div class="zoom-img">
                                        <a href="#"><img src="img/dungcu/dungcu1.jpg" alt="son" /></a>
                                    </div>
                                    
                                    <a href="#" class="new-box">new</a>
                                </div>
                                <div class="sp-info">
                                    <a href="#">Son hồng</a>
                                    <div class="price-box">
                                        <span class="price">100.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="new-sp">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <div class="zoom-img">
                                        <a href="#"><img src="img/dungcu/dungcu2.jpg" alt="son" /></a>
                                    </div>
                                    
                                    <a href="#" class="new-box">new</a>
                                </div>
                                <div class="sp-info">
                                    <a href="#">Son đỏ</a>
                                    <div class="price-box">
                                        <span class="price">150.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="item">
                        <div class="new-sp">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <div class="zoom-img">
                                        <a href="#"><img src="img/dungcu/dungcu3.jpg" alt="son" /></a>
                                    </div>
                                    
                                    <a href="#" class="new-box">new</a>
                                </div>
                                <div class="sp-info">
                                    <a href="#">Phấn trắng</a>
                                    <div class="price-box">
                                        <span class="price">100.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="new-sp">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <div class="zoom-img">
                                        <a href="#"><img src="img/dungcu/dungcu4.jpg" alt="son" /></a>
                                    </div>
                                    
                                    <a href="#" class="new-box">new</a>
                                </div>
                                <div class="sp-info">
                                    <a href="#">Phấn hồng</a>
                                    <div class="price-box">
                                        <span class="price">150.000đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--end-dung-cu-->
        </div>
    </div><!--all-sp-->
<?php require_once __DIR__. "/layouts/footer.php";?>