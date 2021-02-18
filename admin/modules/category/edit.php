<?php require_once __DIR__. "/../../layouts/header.php";
$id=$_GET['id'];
$ud_menu = mysqli_query($conn,"SELECT * FROM menu mn INNER JOIN type_menu tm ON mn.id_type = tm.id_type  where id_menu =".$id);  
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa danh mục
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post" name="form_logo" enctype="multipart/form-data">
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Tên danh mục</label>
                            </div>
                            <div class="col-75">
                                <?php
                                    while ($row = mysqli_fetch_assoc($ud_menu))
                                    {
                                ?>
                                <input type="text" id="" name='name_menu' value="<?php echo $row['name_menu']; ?>" placeholder="Tên danh mục">
                                <?php
                                    }
                                ?>
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
                                <input type="submit" name="update-dm" value="Cập nhật" class="upload">
                                <input type="reset" name="reset" value="Nhập lại" />
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