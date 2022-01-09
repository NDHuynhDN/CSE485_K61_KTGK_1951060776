<?php
$ma_nhan_vien = $_POST['ma_nv'];
$ten = $_POST['ho_ten'];
$chuc_vu = $_POST['chuc_vu'];
$phong_ban = $_POST['phongban'];
$luong = $_POST['luong'];
$ngay_lam = $_POST['ngayvaolam'];




$conn = mysqli_connect ('localhost','root','','1951060776_employees');

$sql = "insert into nhanvien(manv, hovaten, chucvu, phongban, luong, ngayvaolam)
values('$ma_nhan_vien','$ten', '$chuc_vu', '$phong_ban', '$luong', '$ngay_lam')";

mysqli_query($conn, $sql);
$loi = mysqli_error($conn);
echo $loi;
mysqli_close($conn);

echo '<a href="admin.php">Quay lại</a>';