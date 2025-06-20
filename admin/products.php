<?php
// Kết nối đến cơ sở dữ liệu
include 'db.php';

// Lấy danh sách sản phẩm
$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="orders.php">Đơn Hàng</a></li>
            <li><a href="products.php">Sản Phẩm</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Danh Sách Sản Phẩm</h1>
        <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Hình Ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Mô Tả</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td>
                    <?php if (!empty($product['image'])): ?>
                        <img src="uploads/<?php echo $product['image']; ?>" alt="Hình ảnh sản phẩm" width="100">
                    <?php else: ?>
                        <span>Không có hình ảnh</span>
                    <?php endif; ?>
                </td>
                <td><?php echo htmlspecialchars($product['product_name']); ?></td>
                <td><?php echo number_format($product['price'], 0, ',', '.') . ' VND'; ?></td>
                <td><?php echo htmlspecialchars($product['description']); ?></td>
                <td>
                    <a href="edit_product.php?id=<?php echo $product['id']; ?>">Sửa</a> |
                    <a href="delete_product.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        <br>
        <a href="add_product.php" class="add-btn">Thêm Sản Phẩm</a>
    </div>
</body>
</html>
