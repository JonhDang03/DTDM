<?php require_once __DIR__. "/../../layouts/header.php";?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm mới admin
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="../../libraries/function.php" method="post" name="form_logo" enctype="multipart/form-data">
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Tên tài khoản</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='user_name' placeholder="Tên tài khoản">
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Mật khẩu</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='password' placeholder="Mật khẩu">
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Họ tên</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='ho_ten' placeholder="Họ tên">
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Số điện thoại</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='dien_thoai' placeholder="Số điện thoại">
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Giới tính</label>
                            </div>
                            <div class="col-75">
                                <input type="radio" name="gioi_tinh" value="nam"> Nam  </input>
                                <input type="radio" name="gioi_tinh" value="nữ"> Nữ  </input>
                            </div>     
                        </div>
                        <div class="row row-login">
                            <div class="col-25">
                                <label class="label-login" for="fname">Địa chỉ</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="add_" name='dia_chi' placeholder="Địa chỉ">
                            </div>     
                        </div>
                        <div class="row input-sm row-login">
                                <input type="submit" name="create-ac" value="Cập nhật" class="upload">
                                <input type="reset" name="reset" value="Nhập lại" />
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
<?php require_once __DIR__. "/../../layouts/footer.php";?>