<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="processUpdate.php" method="post">
    <?php 
        $ma = $_GET['id'];
        $conn = mysqli_connect('localhost','root','','1951060776_employees');

        $sql = "select * from nhanvien where ma_nhanvien = '$ma'";
        $result = mysqli_query($conn, $sql);
        $each = mysqli_fetch_array($result);
    ?>
        <table>
            <input type="hidden" name="ma" value="<?php echo $each['manv']?>">
            <tr>
                <td>Họ và tên</td> 
                <td><input type="text" name="ten" value="<?php echo $each['hovaten']?>"></td>
            </tr>
            <tr>
                <td>Chức vụ</td> 
                <td><input type="text" name="chuc_vu" value="<?php echo $each['chucvu']?>"></td>
            </tr>
            <tr>
                <td>Phòng ban</td> 
                <td><input type="text" name="so_may_ban" value="<?php echo $each['phongban']?>"></td>
            </tr>
            <tr>
                <td>Lương</td> 
                <td><input type="text" name="so_di_dong" value="<?php echo $each['luong']?>"></td>
            </tr>
            <tr>
                <td>Ngày vào làm</td> 
                <td><input type="text" name="ngayvaolam" value="<?php echo $each['ngayvaolam']?>"></td>
            </tr>
            <tr>
                <td>Tên đơn vị</td> 
                <td><input type="text" name="don_vi" value="<?php echo $each['ma_donvi']?>"></td>
            </tr>
        </table>
        <button>Sửa</button>
</body>
</html>