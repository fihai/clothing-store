<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <img src="/main/main/asset/image/logo.webp" alt="logo">
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
        <h1>ĐĂNG NHẬP</h1>
        <form id="loginForm" action="login.php" method="POST">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" id="loginButton">Đăng nhập</button>
        </form>

        <div class="links">
            <a href="/main/index.php">TRỞ VỀ</a>
            <a href="register.php">ĐĂNG KÝ</a>
            <a href="forgot.php">QUÊN MẬT KHẨU?</a>
        </div>
    </div>
    <script src="asset/acc-js.js"></script>
</body>
</html>

<?php
// Xử lý dữ liệu từ form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Thay đổi logic này để kết nối database nếu cần
    if ($email === "test@example.com" && $password === "password123") {
        echo "<script>alert('Đăng nhập thành công!');</script>";
    } else {
        echo "<script>alert('Sai thông tin đăng nhập!');</script>";
    }
}
?>
