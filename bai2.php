<?php
// Tạo dữ liệu mẫu
$books = [];
for ($i = 1; $i <= 100; $i++) {
    $books[] = [
        'title' => "Tensach$i",
        'content' => "Noidung$i"
    ];
}

// Số sách mỗi trang
$perPage = 10;

// Xác định trang hiện tại (mặc định là 1), lọc an toàn
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
if (!$page || $page < 1) {
    $page = 1;
}

// Tính vị trí bắt đầu
$start = ($page - 1) * $perPage;

// Lấy danh sách sách cho trang hiện tại
$currentBooks = array_slice($books, $start, $perPage);

// Tính tổng số trang
$totalPages = ceil(count($books) / $perPage);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sách</title>
</head>
<body>
<table border="1" cellpadding="5">
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>
    <?php foreach ($currentBooks as $index => $book): 
        $stt = $start + $index + 1; ?>
        <tr>
            <td><?= $stt ?></td>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['content']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<p>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i ?>">Trang <?= $i ?></a>
    <?php endfor; ?>
</p>
</body>
</html>
