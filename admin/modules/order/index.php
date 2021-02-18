<?php require_once __DIR__. "/../../layouts/header.php";?>
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Đơn hàng
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách đơn hàng
                            <div class="link-create" style="float: right;">
                                
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên tài khoản</th>
                                            <th>Họ tên</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Sản phẩm</th>
                                            <th>Ảnh</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($dl_don_hang))
                                            {
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $stt; ?></td>  
                                                <td><?php echo $row['user_name']; ?></td>
                                                <td><?php echo $row['ho_ten']; ?></td>
                                                <td><?php echo $row['phone_dh']; ?></td>
                                                <td><?php echo $row['dia_chi']; ?></td>    
                                                <td><?php echo $row['so_luong']; ?></td>
                                                <td><?php echo $row['tong_tien']; ?></td>
                                                <td><?php echo $row['ngay_dat_hang']; ?></td>
                                                <td><?php echo $row['name_product']; ?></td>
                                                <td><img style="width: 50px; height: 50px;" src="/women/admin/modules/product/<?php echo $row['image_product']; ?>"/> </td>
                                                <td class="center" style="width: 12%">
                                                    <a class="btn btn-xs btn-info" href=""></i> Duyệt</a>
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

