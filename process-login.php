<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','dhtl_danhba');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // $email = htmlspecialchars($email)
        // $sql = "SELECT * FROM db_nguoidung WHERE email = ? OR tendangnhap = ?";
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_nguoidung WHERE email = '$email' AND matkhau='$pass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        // $stmt = mysqli_prepare($conn, $sql);
        // mysqli_stmt_bind_param($stmt,"ss",$email,$user);
        // mysqli_stmt_bind_param($stmt, "s", $user);
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $email;
            header("location: admin.php"); //Chuyển hướng về Trang quản trị
        
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // $result = mysqli_query($conn,$sql);
        // if(mysqli_num_rows($result) > 0){
        //     $row = mysqli_fetch_assoc($result);
        //     $pass_hash = $row['matkhau'];
        //     if(password_verify($pass, $pass_hash)){
        //         $_SESSION['isLoginOK'] = $email;
        //         header("location: admin.php"); //Chuyển hướng về Trang quản trị
        //     }
        //     else{
        //         $error = "MK không chính xác";
        //         header("location: login.php?error = $error");

        //     }
        // }else{
        //     $error = "Email không tồn tại";
        //     header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        // }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>