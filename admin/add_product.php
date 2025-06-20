<?php
// Kết nối đến cơ sở dữ liệu
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin từ form
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Xử lý hình ảnh
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $image_name = time() . '_' . $image['name'];
        $image_tmp_name = $image['tmp_name'];
        move_uploaded_file($image_tmp_name, "uploads/" . $image_name);
    } else {
        $image_name = ''; // Nếu không có hình ảnh
    }

    // Thêm sản phẩm vào cơ sở dữ liệu
    $query = "INSERT INTO products (product_name, price, description, image, created_at) 
              VALUES (:product_name, :price, :description, :image, NOW())";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image_name);

    if ($stmt->execute()) {
        header("Location: products.php");
        exit();
    } else {
        echo "Lỗi khi thêm sản phẩm.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
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
        <h1>Thêm Sản Phẩm</h1>

        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Tên Sản Phẩm</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="description">Mô Tả</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Hình Ảnh</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="submit-btn">Thêm Sản Phẩm</button>
        </form>
    </div>
</body>
</html>
