<?php require_once __DIR__. "/layouts/header.php";?>
<div class="login-user">
    <div class="form-login">
        <div class="tile-login">Đăng ký</div>
        <form action="libraries/function.php" method="POST">
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Tài khoản</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='username' placeholder="Tài khoản">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Mật khẩu</label>
                </div>
                <div class="col-75">
                    <input type="password" id="fname" name="password" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Nhập lại mật khẩu</label>
                </div>
                <div class="col-75">
                    <input type="password" id="fname" name="xnpassword" placeholder="Mật khẩu">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Họ tên</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='hoten' placeholder="Họ tên">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Địa chỉ</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='diachi' placeholder="Địa chỉ">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Số điện thoại</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='phone' placeholder="Số điện thoại">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Ngày sinh</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='ngaysinh' placeholder="Ngày sinh">
                </div>
            </div>
            <div class="row row-login">
                <div class="col-25">
                <label for="country">Giới tính</label>
                </div>
                <div class="col-75">
                  <select id="country" name="gioitinh">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                  </select>
                </div>
              </div>
            <div class="row row-login">
                <div class="col-25">
                    <label class="label-login" for="fname">Gmail</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name='gmail' placeholder="Gmail">
                </div>
            </div>
            <div class="row input-sm row-login">
                <input type="submit" name="dangky" value="Đăng ký">
                <input type="reset" name="reset" value="Nhập lại" />
            </div>
        </form>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php";?>