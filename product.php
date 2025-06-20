<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="asset/css/product.css">
</head>
<body>
    <header>
        <div class="container-header">
            <div class="row-flex">
                <!-- Navigation Menu -->
                <nav class="header-nav">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="shop-all.php">Sản phẩm</a></li>
                    </ul>
                </nav>
                <!-- Logo -->
                <div class="header-logo">
                    <img src="asset/image/logo.webp" alt="logo">
                </div>

                <!-- Right Section: Search, Login, Bag -->
                <div class="header-right">
                    <a href="#" class="search">search</a>
                    <a href="asset/account/login.php" class="login">log in</a>
                    <a href="checkout.php" class="bag">bag </a>
                </div>
            </div>
        </div>
    </header>
    <div class="product-container">
        <!-- Hình ảnh sản phẩm -->
        <div class="product-image">
            <img id="main-image" src="asset/image/1.png" alt="Product Image">

            <!-- Hình ảnh sản phẩm phụ -->
            <div class="product-thumbnails">
                <img src="asset/image/1.png" alt="Thumbnail 1" onclick="changeImage(this)">
                <img src="asset/image/1.1.png" alt="Thumbnail 1" onclick="changeImage(this)">
                <img src="asset/image/bangsize.png" alt="Thumbnail 2" onclick="changeImage(this)">
            </div>
        </div>

        <!-- Thông tin sản phẩm -->
        <div class="product-info sticky">
            <h1>“WHENEVER” BASIC LOGO EMBROIDERED T-SHIRT / BLACK</h1>
            <p class="product-price">350,000₫</p>

            <!-- Lựa chọn kích thước -->
            <div class="product-size">
                <h3>KÍCH THƯỚC</h3>
                <div class="size-options">
                    <button class="size-button" data-size="SIZE:S" onclick="toggleSize(this)">SIZE S</button>
                    <button class="size-button" data-size="SIZE:M" onclick="toggleSize(this)">SIZE M</button>
                    <button class="size-button" data-size="SIZE:L" onclick="toggleSize(this)">SIZE L</button>
                    
                </div>
            </div>


            <!-- Nút "add to cart" -->
            <button class="add-to-cart" onclick="addToCart()">add to cart</button>

            <!-- Mô tả sản phẩm -->
            <div class="product-description">
                <h3>MÔ TẢ SẢN PHẨM</h3>
                <p>CHẤT LIỆU: COTTON - 250GSM</p>
                <p>COLOR: WHITE / BLACK</p>
                <p>KIỂU DÁNG: BOXY, OVERSIZED FIT</p>
                <p>DETAILS: THÊU LOGO MẶT SAU</p>
                <p>ĐÃ XỬ LÝ VẢI, XỬ LÝ CO RÚT KHUYẾN KHÍCH KHÁCH MUA VỀ DÙNG LUÔN.</p>
            </div>
        </div>
    </div>

<!-- Phần hiển thị giỏ hàng -->
<div id="cart-container" class="cart-container">
    <h2>Giỏ Hàng</h2>
    <div id="cart-items"></div>
    <div class="cart-total">
        <span>Tổng tiền:</span>
        <span id="total-price">0₫</span>
    </div>
    <button id="close-cart-button">Đóng giỏ hàng</button>
    <button  id="checkout-button" class="checkout-button">Thanh toán</button>
</div>
<!--newproduct -->
<section class="new-products">
    <div class="row-gird">
        <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="container">
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>
        <div class="row-grid row-grid-new-product ">
            <div class="new-product-item">
                <img src="asset/image/1.png" alt="">
                <div class="product-info">
                    <p class="custom-title">“Whenever” Basic Logo Embroidered T-Shirt / White</p>
                    <p class="price">50,000<sup>d</sup></p>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>
        <div class="subscribe">
                <h3>Join the Whenever Atelier Club</h3>
                <form method="POST" action="">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe →</button>
                </form>
                <?php
                // PHP logic to handle subscription
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
                    $email = htmlspecialchars($_POST['email']);
                    echo "<p>Thank you for subscribing, $email!</p>";
                }
                ?>
        </div>

            <div class="info-section">
                <div>
                    <h4>Thông Tin</h4>
                    <a href="#">Liên hệ</a><br>
                    <a href="#">Trang chủ</a><br>
                    <a href="#">Sản phẩm</a>
                </div>

                <div>
                    <h4>Sản phẩm</h4>
                    <a href="#">Tees</a><br>
                    <a href="#">Hoodie/Sweater</a><br>
                    <a href="#">Jacket</a><br>
                    <a href="#">Bottoms</a><br>
                    <a href="#">Accessories</a>
                </div>
        </div>
    </footer>
<script>
    
        // Thay đổi hình ảnh chính khi nhấp vào hình ảnh phụ
        function changeImage(element) {
            const mainImage = document.getElementById('main-image');
            mainImage.src = element.src;
        }
</script>
<script src="/main/asset/js/cart.js"></script>
</body>
</html>