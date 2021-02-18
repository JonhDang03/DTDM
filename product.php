<?php require_once __DIR__. "/layouts/header.php";?>   
<?php 
    $type_menu = mysqli_query($conn,"SELECT * FROM type_menu tm INNER JOIN menu mn ON tm.id_type = mn.id_type INNER JOIN product pd ON pd.id_menu = mn.id_menu WHERE tm.id_type = '".$_GET['id']."' ");
?> 
                    <div class="all-sp">
                        <?php
                            $stt=1;
                            while ($row = mysqli_fetch_assoc($type_menu))
                            {
                        ?>
                            <div class="wrap-sp">                            
                                <div class="sp-c">
                                    <div class="left-sp">
                                        <h2 class="center-title"><?php echo $row['name_menu']; ?></h2>
                                        <a class="prev p<?php echo $stt; ?>" onclick="plusSlides(-1, 0)">&#10094;</a>
                                        <a class="next n<?php echo $stt; ?>" onclick="plusSlides(1, 0)">&#10095;</a>
                                    </div>
                                    <div class="box swiper-container sl<?php echo $stt; ?>">
                                            <div class="swiper-wrapper">
                                                <div class="item swiper-slide">
                                                    <div class="new-sp">
                                                        <div class="single-product-item">
                                                            <div class="product-image">
                                                                <div class="zoom-img">
                                                                    <a href="single.php?id=<?php echo $row['id_product'];?>"><img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" alt="son" /></a>
                                                                </div>
                                                                
                                                                <a href="single.php?id=<?php echo $row['id_product'];?>" class="new-box">new</a>
                                                            </div>
                                                            <div class="sp-info">
                                                                <a href="single.php?id=<?php echo $row['id_product'];?>"><?php echo $row['name_product']; ?></a>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $row['price_product']; ?>.000đ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="box swiper-container sl<?php echo $stt; ?>">
                                            <div class="swiper-wrapper">
                                                <div class="item swiper-slide">
                                                    <div class="new-sp">
                                                        <div class="single-product-item">
                                                            <div class="product-image">
                                                                <div class="zoom-img">
                                                                    <a href="single.php?id=<?php echo $row['id_product'];?>"><img src="/women/admin/modules/product/<?php echo $row['image_product']; ?>" alt="son" /></a>
                                                                </div>
                                                                
                                                                <a href="single.php?id=<?php echo $row['id_product'];?>" class="new-box">new</a>
                                                            </div>
                                                            <div class="sp-info">
                                                                <a href="single.php?id=<?php echo $row['id_product'];?>"><?php echo $row['name_product']; ?></a>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $row['price_product']; ?>.000đ</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div> <!--spc-->
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                                <!-- Initialize Swiper -->
                                <script>
                                            var swiper = new Swiper('.sl<?php echo $stt; ?>', {
                                              slidesPerView: 2,
                                              spaceBetween: 20,
                                              slidesPerGroup: 2,
                                              loop: true,
                                              loopFillGroupWithBlank: true,
                                              pagination: {
                                                el: '.swiper-pagination',
                                                clickable: true,
                                              },
                                              navigation: {
                                                nextEl: '.n<?php echo $stt; ?>',
                                                prevEl: '.p<?php echo $stt; ?>',
                                              },
                                            });
                                </script>
                            </div>
                        <?php
                                $stt++;
                            }
                        ?> 
                    </div><!--all-sp-->
                    
                </div><!-- end - wrap-3 -->
                
            </div> <!--end-sp-nb-->
        </div>
        
    </div><!--end-main-->
<?php require_once __DIR__. "/layouts/footer.php";?>