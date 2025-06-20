<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <link rel="stylesheet" href="../css/acc.css">
</head>
<body>
<header>
        <div class="container-header">
            <div class="row-flex">
                <!-- Navigation Menu -->
                <nav class="header-nav">
                    <ul>
                        <li><a href="/main/index.php">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                    </ul>
                </nav>
                <!-- Logo -->
                <div class="header-logo">
                    <img src="/main/asset/image/logo.webp" alt="logo">
                </div>

                <!-- Right Section: Search, Login, Bag -->
                <div class="header-right">
                    <a href="#" class="search">search</a>
                    <a href="/main/checkout.php" class="bag">bag </a>
                </div>
            </div>
        </div>
    </header>
<div class="acc-container">
        <h1>CÀI ĐẶT LẠI MẬT KHẨU</h1>
        <p class="ptext">MẬT KHẨU MỚI SẼ ĐƯỢC GỬI VỀ EMAIL CỦA BẠN.</p>
        <form id="forgotPasswordForm" action="forgot_password.php" method="POST">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <button type="submit" id="sendButton">Gửi</button>
        </form>
        <div class="links">
            <a href="login.php">Bỏ qua</a>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>

<?php
// Xử lý logic quên mật khẩu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Logic gửi email (giả lập, có thể kết hợp với dịch vụ email thực)
    echo "<script>alert('Mật khẩu mới đã được gửi đến $email. Vui lòng kiểm tra hộp thư của bạn!');</script>";
}
?>