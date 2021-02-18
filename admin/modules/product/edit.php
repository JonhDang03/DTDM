<?php require_once __DIR__. "/../../layouts/header.php";
$id=$_GET['id'];
$ud_product = mysqli_query($conn,"SELECT * FROM product WHERE id_product =".$id);  
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa sản phẩm
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="form_upload" method="POST" enctype="multipart/form-data">
                        <div class="row row-login">
                            <?php
                                while ($row = mysqli_fetch_assoc($ud_product))
                                {
                            ?>
                            <div class="col-25">
                                <label class="label-login" for="fname">Tên sản phẩm</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='tensp' value="<?php echo $row['name_product']; ?>" placeholder="Tên sản phẩm">
                            </div>
                            Chọn hình ảnh:<input type="file" name="fileUpload" value="<?php echo $row['image_product']; ?>" id="fileUpload" size="20" class="upload_logo" id="add_">
                        </div>
                        
                        <div class="row row-login">
                            <p>Miêu tả: <textarea cols="20" rows="5" name="mieuta" value="<?php echo $row['describe_product']; ?>" class="mt" id="add_"></textarea> </p><br/>
                            <p style="width: 150px; float: left; padding-right: 20px;" >Giá: <input type="text" name="gia" size="5" class="gia" id="add_"></p>
                            
                            <p style="width: 300px; float: left; padding-right: 20px;" >Thuộc menu:
                                <select name="id_menu" class="tmn" id="add_">
                                    <option value="<?php echo $row['id_menu']; ?>">--chọn--</option>
                                    <?php 
                                        foreach($menu as $row ){
                                        echo "
                                            <option value=".$row['id_menu'].">".$row['name_menu']."</option>";
                                         }
                                    ?>
                                </select>
                            </p>
                            <p style="width: 300px; float: left; padding-right: 20px;" >Xuất xứ: <input type="text" name="xuatxu" value="<?php echo $row['xuatxu']; ?>" size="15" class="xx" id="add_"></p>
                            <div>
                                <p style="width: 300px; float: left; padding-right: 20px;" >Tình trạng:
                                    <input type="radio" name="tinh_trang" value="Còn hàng"> Còn hàng </input>
                                    <input type="radio" name="tinh_trang" value="Hết hàng"> Hết hàng </input>
                                </p>
                            </div>
                            <p style="width: 100%; float: left;">Nội dung: <textarea name="noidung" value="<?php echo $row['noidung']; ?>" id="editor1" rows="10" cols="80"></textarea></p>
                            <script>    CKEDITOR.replace( 'editor1' );</script>
                            <?php
                                }
                            ?>
                        </div>
                            <div class="row input-sm row-login">
                                <input type="submit" name="creater-sp" value="Cập nhật" class="upload">
                                <input type="reset" name="reset" value="Nhập lại" />
                            </div>      
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <?php
            if (isset($_POST['update-dm'])){
                $sql_update = "UPDATE `menu` SET name_menu ='".$_POST['name_menu']."', id_type = '".$_POST['id_type']."' WHERE id_menu ='".$_GET['id']."'"; 
                $conn->query($sql_update);
                
            }
        ?>
<?php require_once __DIR__. "/../../layouts/footer.php";?>