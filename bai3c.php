<?php
require 'bai3a.php';

$pheptinh = $_POST['pheptinh'];
$so1 = (float)$_POST['so1'];
$so2 = (float)$_POST['so2'];

switch ($pheptinh) {
    case "cong":
        $ketqua = tong($so1, $so2);
        $tenPhepTinh = "Cộng";
        break;
    case "tru":
        $ketqua = hieu($so1, $so2);
        $tenPhepTinh = "Trừ";
        break;
    case "nhan":
        $ketqua = tich($so1, $so2);
        $tenPhepTinh = "Nhân";
        break;
    case "chia":
        $ketqua = thuong($so1, $so2);
        $tenPhepTinh = "Chia";
        break;
    default:
        $ketqua = "Không xác định";
        $tenPhepTinh = "";
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kết quả</title>
</head>
<body>
    <h2 style="color:blue; text-align:center;">PHÉP TÍNH TRÊN HAI SỐ</h2>
    <p style="color:brown;">Chọn phép tính: <b><?php echo $tenPhepTinh; ?></b></p>
    <p style="color:blue;">Số 1: <input type="text" value="<?php echo $so1; ?>"></p>
    <p style="color:blue;">Số 2: <input type="text" value="<?php echo $so2; ?>"></p>
    <p style="color:blue;">Kết quả: <input type="text" value="<?php echo $ketqua; ?>"></p>
    <a href="bai3b.php" style="color:purple;">Quay lại trang trước</a>
</body>
</html>
