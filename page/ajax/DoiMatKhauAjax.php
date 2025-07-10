<?php
session_start();
$servername = "mysql1003.site4now.net";
$username = "abb9a8_tanthin";
$password = "@ThInH0302";
$dbname = "db_abb9a8_tanthin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
	
if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
mysqli_query($conn,"set names utf8");

$ktTonTai="SELECT * FROM thanhvien WHERE TenDangNhap='".$_POST["tendangnhap"]."' and MatKhau='".$_POST["matkhaucu"]."'";
$truyvanktTonTai=mysqli_query($conn,$ktTonTai);
if(mysqli_num_rows($truyvanktTonTai) > 0)
{
    $thaydoiMatKhau="UPDATE thanhvien SET MatKhau='".$_POST["matkhaumoi"]."' WHERE TenDangNhap='".$_POST["tendangnhap"]."'";
    if(mysqli_query($conn,$thaydoiMatKhau))
        echo "Đổi mật khẩu thành công";
    else
        echo "Xảy ra lỗi";
}
else
{
    echo "Mật khẩu không chính xác" ;
}

?>
