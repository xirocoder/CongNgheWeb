<?php
session_start();

// Kiểm tra nếu chưa có danh sách sản phẩm
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200],
        ['id' => 3, 'name' => 'Product 3', 'price' => 300],
    ];
}

// Lấy danh sách sản phẩm
$products = $_SESSION['products'];
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Danh sách sản phẩm</h2>
    <a href="addProduct.php" class="btn btn-primary mb-3">Thêm sản phẩm</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td>
                        <a href="editProduct.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="deleteProduct.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>


          
        </tbody>
    </table>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
