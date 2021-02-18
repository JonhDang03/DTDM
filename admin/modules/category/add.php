<?php require_once __DIR__. "/../../layouts/header.php";?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới danh mục
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="../../libraries/function.php" method="post" name="form_logo" enctype="multipart/form-data">
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Tên danh mục</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='name_menu' placeholder="Tên danh mục">
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Danh mục cha</label>
                            </div>
                            <div class="col-75">
                                <select name="id_type" class="tmn" id="add_">
                                    <option value="">--chọn--</option>
                                    <?php 
                                        foreach($type as $row ){
                                        echo "
                                            <option value=".$row['id_type'].">".$row['name_type']."</option>";
                                         }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row input-sm row-login">
                                <input type="submit" name="create-dm" value="Cập nhật" class="upload">
                                <input type="reset" name="reset" value="Nhập lại" />
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
<?php require_once __DIR__. "/../../layouts/footer.php";?>