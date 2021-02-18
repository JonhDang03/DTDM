<!-- Đăng nhập -->
<?php 
    include("connect.php");
    session_start();
?>
<?php
    if(isset($_POST["dangnhap"]))
    {
        $username= $_POST["username"];
        $password = $_POST["password"];
        //lam sach thong tin
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="")
        {
           header('Location: ../index.php');
        }
        else
        {
            $sql = "select * from account where user_name = '$username' and password = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
                echo 'Tên đăng nhập hoặc mật khẩu không đúng !';
            }
            else
            {
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['admin'] = $username;
              
                // chuyển hướng trang web tới một trang index.php
               
                header('Location: ../index.php');
            }
        }
    }

?>
<!-- End - Đăng nhập -->
<!-- Thêm sản phẩm -->    
<?php
    if(isset($_POST['create-sp']))// neu bien create-sp ton tai	
		{
			
			if($_FILES['file']['name'] != NULL) //da chon file
			{
				if($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png" || $_FILES['file']['type'] == "image/gif")
				{
					if($_FILES['file']['size'] > 1048576 )
					{
						echo '<p class="uptc">File không được lớn hơn 1mb!</p>';
					}
					else
					{// file hợp lệ, tiến hành upload
						$path = "data/"; // file sẽ lưu vào thư mục data
						$tmp_name = $_FILES['file']['tmp_name'];
						$name = $_FILES['file']['name'];
						$type = $_FILES['file']['type']; 
						$size = $_FILES['file']['size']; 
						$tensp = $_POST['tensp'];
						$mieuta = $_POST['mieuta'];
						$gia = $_POST['gia'];
						$id_menu = $_POST['id_menu'];
						$xuatxu = $_POST['xuatxu'];
						$noiddung = $_POST['noidung'];
						// Upload file
						move_uploaded_file($tmp_name,$path.$name);
						echo '<p class="uptc">';
						echo "File đã được upload thành công! <br />";
						echo "Tên file : ".$tensp."<br />";
						echo "Tên file : ".$name."<br />";
						echo "Kiểu file : ".$type."<br />";
						echo "File size : ".$size;
						echo '</p>';
						$upload_query =mysqli_query($conn,"INSERT INTO product(name_product,describe_product,noi_dung,price_product,image_product,id_menu,xuatxu,tinh_trang) VALUES(N'".$tensp."',N'".$mieuta."',N'".$noidung."','".$gia."','".$name."',N'".$id_menu."',N'".$xuatxu."') ");

                        header("Location: ../modules/product/index.php");
					}
				}
				else
				{
					echo '<p class="uptc">Kiểu file không hợp lệ!</p>';
				}
			}
			else
			{
				echo '<p class="uptc">THÔNG BÁO: Bạn chưa chọn tệp hình ảnh!</p>';
			}
		}
?>
<?php
                   if(isset($_FILES['image'])){
                      $errors= array();
                      $file_name = $_FILES['image']['name'];
                      $file_size = $_FILES['image']['size'];
                      $file_tmp = $_FILES['image']['tmp_name'];
                      $file_type = $_FILES['image']['type'];
                      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                       
                      $expensions= array("jpeg","jpg","png");
                       
                      if(in_array($file_ext,$expensions)=== false){
                         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                      }
                       
                      if($file_size > 2097152) {
                         $errors[]='Kích thước file không được lớn hơn 2MB';
                      }
                       
                      if(empty($errors)==true) {
                         move_uploaded_file($file_tmp,"images/".$file_name);
                         echo "Success";
                      }else{
                         print_r($errors);
                      }
                   }
                ?>
                <form action = "" method = "POST" enctype = "multipart/form-data">
                         <input type = "file" name = "image" />
                         <input type = "submit"/>
                             
                         <ul>
                            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
                            <li>File size: <?php echo $_FILES['image']['size'];  ?>
                            <li>File type: <?php echo $_FILES['image']['type'] ?>
                         </ul>
                             
                      </form>
<!-- Thêm danh mục -->
<?php
        if(isset($_POST['create-dm']))
        {   
            $dk_query = mysqli_query($conn,"SELECT * FROM menu");
            $dk_items  = mysqli_fetch_array($dk_query);
            
            /*$id_useful=$_POST['id_useful'];*/
            $name_menu= $_POST['name_menu'];
            $id_type =$_POST['id_type'];
            if(!$name_menu)
            {
                
                echo 'Vui lòng nhập tên danh mục<a href="javascript: history.go(-1)">Trở lại</a>';
                exit;
            }
            else
            {
                if ($dk_items['name_menu'] == "$name_menu")
                {
                    echo "Danh mục đã tồn tại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
                else
                {
                    $insert =mysqli_query($conn,"INSERT INTO menu (id_menu,name_menu, id_type) VALUE (NULL,'".$name_menu."','".$id_type."')");
                    header("Location: ../modules/category/index.php");
                }
            }     
        }
?>
<!-- End Thêm danh mục -->
<!-- Update danh mục -->
<?php
    if(isset($_POST['update-dm']))
        {   
            $dk_query = mysqli_query($conn,"SELECT * FROM menu");
            $dk_items  = mysqli_fetch_array($dk_query);
            

            $name_menu= $_POST['name_menu'];
            $id_type =$_POST['id_type'];
            if(!$name_menu)
            {
                
                echo 'Vui lòng nhập tên danh mục<a href="javascript: history.go(-1)">Trở lại</a>';
                exit;
            }
            else
            {
                if ($dk_items['name_menu'] == "$name_menu")
                {
                    echo "Danh mục đã tồn tại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
                else
                {
                    $upload_query =mysqli_query($conn,"UPDATE menu SET name_menu = N'".$name_menu."', id_type = '".$id_type."') WHERE id_menu=".$id);
                    header("Location: ../modules/category/index.php");
                }
            }     
        }
?>
<!-- Thêm danh mục -->
<?php
        if(isset($_POST['create-ac']))
        {   
            $dk_query = mysqli_query($conn,"SELECT * FROM account");
            $dk_items  = mysqli_fetch_array($dk_query);
            
            /*$id_useful=$_POST['id_useful'];*/
            $username= $_POST['user_name'];
            $password= md5( $_POST["password"]);
            $hoten= $_POST['ho_ten'];
            $dienthoai= $_POST['dien_thoai'];
            $gioitinh= $_POST['gioi_tinh'];
            $diachi= $_POST['dia_chi'];
            if(!$username)
            {
                
                echo 'Vui lòng nhập tên tài khoản<a href="javascript: history.go(-1)">Trở lại</a>';
                exit;
            }
            else
            {
                if ($dk_items['user_name'] == "$username")
                {
                    echo "Tên tài khoản đã tồn tại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
                else
                {
                    $insert =mysqli_query($conn,"INSERT INTO account (id_account, user_name, password, ho_ten, dien_thoai, gioi_tinh, dia_chi) VALUE (NULL,'".$username."','".$password."','".$hoten."','".$dienthoai."','".$gioitinh."','".$diachi."')");
                    header("Location: ../modules/account/index.php");
                }
            }     
        }
?>
<!-- End Thêm danh mục -->