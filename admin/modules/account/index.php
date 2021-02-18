<?php require_once __DIR__. "/../../layouts/header.php";?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tài khoản admin
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách admin
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
                                            <th>Tài khoản</th>
                                            <th>Họ tên</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($account))
                                            {
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $stt; ?></td>      
                                                <td><?php echo $row['user_name']; ?></td>
                                                <td><?php echo $row['ho_ten']; ?></td>
                                                <td><?php echo $row['dien_thoai']; ?></td>
                                                <td><?php echo $row['dia_chi']; ?></td>
                                                <td class="center" style="width: 12%">
                                                    <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $row['id_account'];?>"> <i class="fa fa-edit"></i> Sửa</a>
                                                    <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $row['id_account'];?>"> <i class="fa fa-times"></i> Xoá</a>
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

                                    