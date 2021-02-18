<?php require_once __DIR__. "/../../layouts/header.php";?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh mục con
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách danh mục
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
                                            <th>Tên danh mục</th>
                                            <th>Danh mục cha</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($dl_menu))
                                            {
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $stt; ?></td>      
                                                <td><?php echo $row['name_menu']; ?></td>
                                                <td><?php echo $row['name_type']; ?></td>
                                                <td class="center" style="width: 12%">
                                                    <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $row['id_menu'];?>"> <i class="fa fa-edit"></i> Sửa</a>
                                                    <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $row['id_menu'];?>"> <i class="fa fa-times"></i> Xoá</a>
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

                                    