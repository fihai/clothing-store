<?php
// Kết nối đến cơ sở dữ liệu
include 'db.php';

// Kiểm tra nếu có id của sản phẩm được truyền vào
if (!isset($_GET['id'])) {
    echo "ID sản phẩm không hợp lệ!";
    exit();
}

$product_id = $_GET['id'];

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$query = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $product_id);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "Sản phẩm không tồn tại!";
    exit();
}

// Xử lý khi form được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Cập nhật thông tin sản phẩm
    $update_query = "UPDATE products SET product_name = :product_name, price = :price, description = :description WHERE id = :id";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bindParam(':product_name', $product_name);
    $update_stmt->bindParam(':price', $price);
    $update_stmt->bindParam(':description', $description);
    $update_stmt->bindParam(':id', $product_id);
    $update_stmt->execute();

    // Chuyển hướng về trang danh sách sản phẩm
    header('Location: products.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
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
        <h1>Sửa Sản Phẩm</h1>

        <form action="" method="POST" class="product-form">
            <div class="form-group">
                <label for="product_name">Tên Sản Phẩm</label>
                <input type="text" id="product_name" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required>
            </div>

            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Mô Tả</label>
                <textarea id="description" name="description" rows="5" required><?php echo htmlspecialchars($product['description']); ?></textarea>
            </div>

            <button type="submit" class="submit-btn">Cập Nhật Sản Phẩm</button>
        </form>
    </div>
</body>
</html>
