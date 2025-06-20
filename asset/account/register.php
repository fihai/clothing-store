<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Tài Khoản</title>
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
        <h1>TẠO TÀI KHOẢN</h1>
        <form id="registerForm" action="register.php" method="POST">
            <div class="form-group">
                <input type="text" id="first_name" name="first_name" placeholder="Tên" required>
            </div>
            <div class="form-group">
                <input type="text" id="last_name" name="last_name" placeholder="Họ" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <button type="submit" id="registerButton">Đăng ký</button>
        </form>
        <div class="links">
            <a href="/main/index.php">TRỞ VỀ</a> 
        </div>
    </div>
    <script src="js/acc-js.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<script>alert('Đăng ký thành công! Chào mừng $firstName $lastName');</script>";
}
?>