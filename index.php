<?php require_once __DIR__. "/layouts/header.php";?>
            <div class="main-slide">
                <div class="slide-content">
                    <img src="img/slide/slide2.jpg"/>

                </div>
                <div class="slide-right">
                    <img src="img/slide/slide5.jpg"/>
                </div>
            </div><!--end-slide-->
            <div class="all-sp">
                <div class="wrap-sp ">
                    <div class="sp-c">
                        <div class="left-sp">
                            <h2 class="left-title">SON MÔI</h2>
                            <a class="prev p1" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next n1" onclick="plusSlides(1, 0)">&#10095;</a>
                        </div><!-- left-sp -->
                        <div class="box swiper-container sl1">
                            <div class="swiper-wrapper">
                                <?php
                                    while ($row = mysqli_fetch_assoc($dl_product_1))
                                    {
                                ?>
                                <div class="item swiper-slide">
                                    <div class="box-sp1">
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
                                                        <span class="price"><?php echo $row['price_product']; ?>.000 đ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div><!-- end-box -->
                    </div> <!--end-son-->
                    </div>
                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                      <script>
                        var swiper = new Swiper('.sl1', {
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
                            nextEl: '.n1',
                            prevEl: '.p1',
                          },
                        });
                      </script>
                    <div class="sp-c">
                        <div class="left-sp">
                            <h2 class="left-title">Phấn trang điểm</h2>
                            <a class="prev p2" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next n2" onclick="plusSlides(1, 0)">&#10095;</a>
                        </div>
                        <div class="box swiper-container sl2">
                            <div class="swiper-wrapper">
                                <?php
                                    while ($row = mysqli_fetch_assoc($dl_product_2))
                                    {
                                ?>
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
                                                    <span class="price"><?php echo $row['price_product']; ?>.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div> <!--end-phan-->
                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                      <script>
                        var swiper = new Swiper('.sl2', {
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
                            nextEl: '.n2',
                            prevEl: '.p2',
                          },
                        });
                      </script>
            </div><!--all-sp-->
            <div class="main-slide">
                <div class="slide-content">
                    <img src="img/slide/slide-1.jpg"/>

                </div>
                <div class="slide-right">
                    <img src="img/slide/slide-2.jpg"/>
                </div>
        </div><!--end-slide-->
        <div class="all-sp">
            <div class="wrap-sp">
                <div class="sp-c">
                    <div class="left-sp">
                        <h2 class="center-title">Dụng cụ trang điểm</h2>
                        <a class="prev p3" onclick="plusSlides(-1, 0)">&#10094;</a>
                        <a class="next n3" onclick="plusSlides(1, 0)">&#10095;</a>
                    </div>
                    <div class="box swiper-container sl3">
                            <div class="swiper-wrapper">
                                <?php
                                    while ($row = mysqli_fetch_assoc($dl_product_3))
                                    {
                                ?>
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
                                                    <span class="price"><?php echo $row['price_product']; ?>.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                    </div>
                    <div class="box swiper-container sl3">
                        <div class="swiper-wrapper">
                                <?php
                                    while ($row = mysqli_fetch_assoc($dl_product_4))
                                    {
                                ?>
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
                                                    <span class="price"><?php echo $row['price_product']; ?>.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                    </div>
                </div> <!--end-dung-cu-->
            </div>
            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                        var swiper = new Swiper('.sl3', {
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
                            nextEl: '.n3',
                            prevEl: '.p3',
                          },
                        });
            </script>
        </div><!--all-sp-->
    </div><!--end-main-->
<?php require_once __DIR__. "/layouts/footer.php";?>
