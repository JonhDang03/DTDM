<!-- Đăng nhập -->
<?php 
    include("connect.php"); 
    session_start();
?>
<?php
    if(isset($_POST["dangnhap"]))
    {
        $username= $_POST["username"];
        $password =md5( $_POST["password"]);
        //lam sach thong tin
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="")
        {
            echo "Không được để trống!";
            
        }
        else
        {
            $sql = "select * from user where user_name = '$username' and password = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
                echo 'Tên đăng nhập hoặc mật khẩu không đúng !';
            }
            else
            {
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
              
                // chuyển hướng trang web tới một trang index.php
               
                header('Location: ../index.php');
            }
        }
    }

?>
<!-- End - Đăng nhập -->
<!-- Đăng ký -->
<?php
        if(isset($_POST['dangky']))
        {   
            $dk_query = mysqli_query($conn,"SELECT * FROM user ");
            $dk_items  = mysqli_fetch_array($dk_query);
            
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $xnpassword=md5($_POST['xnpassword']);
            $hoten=$_POST['hoten'];
            $diachi=$_POST['diachi'];
            $phone=$_POST['phone'];
            $ngaysinh=$_POST['ngaysinh'];
            $gioitinh =$_POST['gioitinh'];
            $gmail =$_POST['gmail'];
            if(!$hoten || !$username || !$password || !$xnpassword || !$phone || !$gmail)
            {
                
                echo 'Vui lòng nhập thông tin đầy đủ!<a href="javascript: history.go(-1)">Trở lại</a>';
                exit;
            }
            else
            {
                if ($dk_items['user_name'] == "$username")
                {
                    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
                else
                {
                    if("is_integer($phone)" == false)
                    {
                        echo 'Số điện thoại nhập không đúng!<a href="javascript: history.go(-1)">Trở lại</a>';
                        exit;
                    }
                    else
                    {
                        if($password == $xnpassword)
                        {
                        $insert =mysqli_query($conn,"INSERT INTO user (user_name, password,hoten,diachi,phone,ngaysinh,gioitinh,gmail) VALUE ('".$username."','".$password."','".$hoten."','".$diachi."','".$phone."','".$ngaysinh."','".$gioitinh."','".$gmail."')");
                        echo "Đăng ký thành công!";
                        }
                        else
                        {
                            echo 'Xác nhận mật khẩu không trùng khớp!';
                        }
                    }
                }
            }
            
            
        }
    ?>
<!-- End đăng ký -->