<?php require_once __DIR__. "/../../layouts/header.php";?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        //Bước 1: Tạo thư mục lưu file
                        $error = array();
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
                        // Kiểm tra kiểu file hợp lệ
                        $type_file = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
                        $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
                        $tensp = $_POST['tensp'];
                        $mieuta = $_POST['mieuta'];
                        $gia = $_POST['gia'];
                        $id_menu = $_POST['id_menu'];
                        $xuatxu = $_POST['xuatxu'];
                        $noidung = $_POST['noidung'];
                        $tinh_trang = $_POST['tinh_trang'];
                        if (!in_array(strtolower($type_file), $type_fileAllow)) {
                            $error['fileUpload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                        }
                        //Kiểm tra kích thước file
                        $size_file = $_FILES['fileUpload']['size'];
                        if ($size_file > 5242880) {
                            $error['fileUpload'] = "File bạn chọn không được quá 5MB";
                        }
                    //
                        if (empty($error)) {
                            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                                $upload_query = mysqli_query($conn,"INSERT INTO product (id_product, name_product, slug, describe_product, noi_dung, price_product, image_product, id_menu, xuatxu, tinh_trang) VALUES (NULL,N'".$tensp."', NULL,N'".$mieuta."',N'".$noidung."','".$gia."','".$target_file."',N'".$id_menu."',N'".$xuatxu."',N'".$tinh_trang."') ");
                                echo "Bạn đã upload sản phẩm thành công";
                                $flag = true;

                            } else {
                                echo "File bạn vừa upload gặp sự cố";
                            }
                        }
                    }
                ?>
                  
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="form_upload" method="POST" enctype="multipart/form-data">
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Tên sản phẩm</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='tensp' placeholder="Tên sản phẩm">
                            </div>
                            Chọn hình ảnh:<input type="file" name="fileUpload"  id="fileUpload" size="20" class="upload_logo" id="add_">
                        </div>
                        
                        <div class="row row-login">
                            <p>Miêu tả: <textarea cols="20" rows="5" name="mieuta" class="mt" id="add_"></textarea> </p><br/>
                            <p style="width: 150px; float: left; padding-right: 20px;" >Giá: <input type="text" name="gia" size="5" class="gia" id="add_"></p>
                            
                            <p style="width: 300px; float: left; padding-right: 20px;" >Thuộc menu:
                                <select name="id_menu" class="tmn" id="add_">
                                    <option value="">--chọn--</option>
                                    <?php 
                                        foreach($menu as $row ){
                                        echo "
                                            <option value=".$row['id_menu'].">".$row['name_menu']."</option>";
                                         }
                                    ?>
                                </select>
                            </p>
                            <p style="width: 300px; float: left; padding-right: 20px;" >Xuất xứ: <input type="text" name="xuatxu" size="15" class="xx" id="add_"></p>
                            <div>
                                <p style="width: 300px; float: left; padding-right: 20px;" >Tình trạng:
                                    <input type="radio" name="tinh_trang" value="Còn hàng"> Còn hàng </input>
                                    <input type="radio" name="tinh_trang" value="Hết hàng"> Hết hàng </input>
                                </p>
                            </div>
                            <p style="width: 100%; float: left;">Nội dung: <textarea name="noidung" id="editor1" rows="10" cols="80"></textarea></p>
                            <script>    CKEDITOR.replace( 'editor1' );</script>
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
<?php require_once __DIR__. "/../../layouts/footer.php";?>