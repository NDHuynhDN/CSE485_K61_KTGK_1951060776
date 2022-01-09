<?php
    if(!isset($_POST['btnSignUp'])){
        header("location:signup.php");
    }
    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass1=$_POST['txtPass'];
    $pass2=$_POST['txtRPass'];

    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql1 = "SELECT * FROM db_nguoidung WHERE tendangnhap='$user' OR email ='$email'";
    
    $result1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1) > 0){
            // CẤP THẺ LÀM VIỆC
            $error = "Username or Email is existed";
            header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }else{
            // $pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
            $sql2 = "INSERT INTO db_nguoidung (tendangnhap,email,matkhau) VALUES ('$user','$email','$pass')";
            $result2 = mysqli_query($conn,$sql2);
            if($result2 == true){
                
                header("location:login.php");
            }
            else{
                $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
                header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
            }
            
        }
    mysqli_close($conn); 
?>