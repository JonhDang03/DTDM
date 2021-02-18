<?php require_once __DIR__. "/layouts/header.php";?>

<div class="login-user">
    <div class="form-login">
        <div class="tile-login">Đăng nhập</div>
        <form action='libraries/function.php' method='POST'>
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
                <input type="checkbox" id="remb" name="remember" value="remember">
                <label>Nhớ mật khẩu</label>
                <div style="float: right;"><a href="#">Quên mật khẩu</a></div>
            </div>
            <div class="row input-sm row-login">
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </div>
        </form>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php";?>
