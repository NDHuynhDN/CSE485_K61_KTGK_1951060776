<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Thêm thông tin nhân viên</h1>
<form action="process_insert.php" method="post">
        
        <table>
            <tr>
                <td>Mã nhân viên</td> 
                <td><input type="text" name="ma_nv"></td>
            </tr>
            <tr>
                <td>Họ và tên</td> 
                <td><input type="text" name="ho_ten"></td>
            </tr>
            <tr>
                <td>Chức vụ</td> 
                <td><input type="text" name="chuc_vu"></td>
            </tr>
            <tr>
                <td>Phòng ban</td> 
                <td><input type="text" name="phongban"></td>
            </tr>
            <tr>
                <td>Lương</td> 
                <td><input type="text" name="luong"></td>
            </tr>
            <tr>
                <td>Ngày vào làm</td> 
                <td><input type="text" name="ngayvaolam"></td>
            </tr>
        </table>
        <button>Thêm</button>
    </form>
</body>
</html>