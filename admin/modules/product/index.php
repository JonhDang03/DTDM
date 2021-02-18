<?php require_once __DIR__. "/../../layouts/header.php";?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sản phẩm
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách sản phẩm
                            <div class="link-create" style="float: right;">
                                <a href="add.php">Thêm mới</a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Giá</th>
                                            <th>Tình trạng</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($product))
                                            {
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $stt; ?></td>      
                                                <td><?php echo $row['name_product']; ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="<?php echo $row['image_product']; ?>"/> </td>
                                                <td><?php echo $row['price_product']; ?></td>
                                                <td><?php echo $row['tinh_trang']; ?></td>
                                                <td class="center" style="width: 12%">
                                                    <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $row['id_product'];?>"> <i class="fa fa-edit"></i> Sửa</a>
                                                    <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $row['id_product'];?>"> <i class="fa fa-times"></i> Xoá</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $stt++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    </div>
        <!-- /#page-wrapper -->
<?php require_once __DIR__. "/../../layouts/footer.php";?>

