<?php

$ma = $_POST['ma'];
$ten = $_POST['ten'];
$chuc_vu = $_POST['chucvu'];
$phongban = $_POST['phongban'];
$luong = $_POST['luong'];
$ngayvaolam = $_POST['don_vi'];

$conn = mysqli_connect ('localhost','root','','1951060776_employees');
$sql = "update nhanvien
set hovaten = '$ten',
chucvu = '$chuc_vu',
phongban = '$phongban',
luong = '$luong'
ngayvaolam = '$ngayvaolam'
where
manv = $ma ";

mysqli_query($conn, $sql);
$loi = mysqli_error($conn);
echo $loi;
mysqli_close($conn);

echo '<a href="admin.php">Quay lại</a>';