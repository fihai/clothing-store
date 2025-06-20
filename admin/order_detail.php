<?php
// Kết nối đến cơ sở dữ liệu
include 'db.php';

// Kiểm tra xem có id đơn hàng không
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Truy vấn thông tin đơn hàng
    $query = "SELECT * FROM orders WHERE id = :order_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $order = $stmt->fetch(PDO::FETCH_ASSOC);

    // Truy vấn sản phẩm trong đơn hàng
    $query = "SELECT p.product_name, p.price, op.quantity 
              FROM order_products op 
              JOIN products p ON op.product_id = p.id 
              WHERE op.order_id = :order_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $order_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Không có đơn hàng nào.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
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
        <h1>Chi Tiết Đơn Hàng #<?php echo $order['id']; ?></h1>
        <p><strong>Người Mua:</strong> <?php echo $order['customer_name']; ?></p>
        <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
        <p><strong>Địa Chỉ:</strong> <?php echo $order['address']; ?></p>
        <p><strong>Ngày Đặt:</strong> <?php echo $order['order_date']; ?></p>

        <h2>Sản Phẩm Đặt Mua</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_products as $product): ?>
                <tr>
                    <td><?php echo $product['product_name']; ?></td>
                    <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VND</td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td><?php echo number_format($product['price'] * $product['quantity'], 0, ',', '.'); ?> VND</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
