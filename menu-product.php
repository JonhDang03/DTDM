<?php require_once __DIR__. "/layouts/header.php";?> 
<?php 
    $menu_product = mysqli_query($conn,"SELECT * FROM menu mn INNER JOIN product pd ON pd.id_menu = mn.id_menu WHERE mn.id_menu = '".$_GET['id_menu']."'");
?>  
    
                <div class="wrap-sp">
                    <div class="sp-c">
                        <div class="left-sp">
                            <h2 class="center-title"><?php echo $row['name_menu']; ?></h2>
                        </div>
                        <div class="box">
                            <div class="item">
                                <?php
                                    while ($row = mysqli_fetch_assoc($menu_product))
                                    {
                                ?>
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
                                <?php
                                    }
                                ?> 
                            </div>
                            
                        </div>
                    </div> <!--end-dung-cu-->
                </div>
            </div><!--all-sp-->
                </div><!-- end - wrap-3 -->
                
            </div> <!--end-sp-nb-->
        </div>
    
    </div><!--end-main-->
<?php require_once __DIR__. "/layouts/footer.php";?>