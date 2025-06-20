<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
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
        <h1>Danh Sách Đơn Hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Ngày Đặt</th>
                    <th>Trạng Thái</th>
                    <th>Chi Tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stmt = $conn->prepare("SELECT * FROM orders");
                    $stmt->execute();
                    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($orders as $order) {
                        echo "<tr>
                                <td>{$order['id']}</td>
                                <td>{$order['customer_name']}</td>
                                <td>{$order['email']}</td>
                                <td>{$order['address']}</td>
                                <td>{$order['order_date']}</td>
                                <td>{$order['status']}</td>
                                <td><a href='order_detail.php?id={$order['id']}'>Xem</a></td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
