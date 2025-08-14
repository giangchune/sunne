<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHÉP TÍNH TRÊN HAI SỐ</title>
</head>
<body>
    <form action="bai3c.php" method="post">
        <h2 style="color:blue; text-align:center;">PHÉP TÍNH TRÊN HAI SỐ</h2>
        <p style="color:brown;">
            Chọn phép tính:
            <input type="radio" name="pheptinh" value="cong">Cộng
            <input type="radio" name="pheptinh" value="tru">Trừ
            <input type="radio" name="pheptinh" value="nhan">Nhân
            <input type="radio" name="pheptinh" value="chia">Chia
        </p>
        <p style="color:blue;">Số thứ nhất: <input type="text" name="so1"></p>
        <p style="color:blue;">Số thứ nhì: <input type="text" name="so2"></p>
        <input type="submit" value="Tính">
    </form>
</body>
</html>
