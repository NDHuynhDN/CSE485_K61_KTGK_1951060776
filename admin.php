<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    require "template/header.php";
?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Quản lý nhân viên</h5>
        <div>
            <button class="btn btn-primary"><a href="form_insert.php" style="display: block; color: white">Thêm</a></button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Phòng ban</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Ngày vào làm</th>    
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                //Bước 01: Kết nối Database Server
                    $conn = mysqli_connect ('localhost','root','','1951060776_employees');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                //Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM nhanvien";
                    $result = mysqli_query($conn,$sql);
                //Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>           
                            <tr>
                                <th scope="row"><?php echo $row['manv']; ?></th>
                                <td><?php echo $row['hovaten']; ?></td>
                                <td><?php echo $row['chucvu']; ?></td>                                
                                <td><?php echo $row['phongban']; ?></td>
                                <td><?php echo $row['luong']; ?></td>
                                <td><?php echo $row['ngayvaolam']; ?></td>
                                <td><a href="formUpdate.php?id=<?php echo $row['manv']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="deleteEmployee.php?id=<?php echo $row['manv']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                ?>                               
            </tbody>
        </table>
    </div>    
</main>

<?php
    include("template/footer.php");
?>