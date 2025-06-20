<?php
// Kết nối đến cơ sở dữ liệu
include 'db.php';

// Kiểm tra nếu có id của sản phẩm được truyền vào
if (!isset($_GET['id'])) {
    echo "ID sản phẩm không hợp lệ!";
    exit();
}

$product_id = $_GET['id'];

// Xóa sản phẩm từ cơ sở dữ liệu
$query = "DELETE FROM products WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $product_id);
$stmt->execute();

// Chuyển hướng về trang danh sách sản phẩm
header('Location: products.php');
exit();
?>
