<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng nhập</title>

    <!-- Core CSS - Include with every page -->
    <link href="/women/public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/women/public/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/women/public/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action='libraries/function.php' method='POST'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" id="fname" placeholder="Tài khoản" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="fname" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Nhớ mật khẩu
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="dangnhap" value="Đăng nhập">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="/women/public/admin/js/jquery-1.10.2.js"></script>
    <script src="/women/public/admin/js/bootstrap.min.js"></script>
    <script src="/women/public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="/women/public/admin/js/sb-admin.js"></script>

</body>

</html>