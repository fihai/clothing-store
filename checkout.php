<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thanh Toán</title>
    <link rel="stylesheet" href="asset/css/checkout.css">
    
</head>
<body>

    <div class="checkout-container">
        
        <!-- Thông tin khách hàng -->
        <div class="customer-info">
        <ul class="carts">
		    <li class="carts-item"><a href="/main/product.php">Giỏ hàng</a></li>							
		    <li class="carts-item">| Thông tin vận chuyển</li>
		</ul>
            <h2>Thông tin thanh toán</h2>
            <form id="checkoutForm">
                <p class="section-content-text">Bạn đã có tài khoản?<a class="login_check" href="asset/account/login.php">Đăng nhập</a></p>
                <input type="name" name="name" placeholder="Họ và tên" required>
                <input type="email" name="email" placeholder="Email" required>

                <input type="phone" name="phone" placeholder="Điện thoại" required>

                <!-- Địa chỉ giao hàng -->
                <h3>Giao hàng</h3>
                <input type="address" name="address" placeholder="Địa chỉ" required>
                <div>
                    <select id="province" onchange="loadDistricts()">
                        <option value="">Chọn tỉnh/thành phố</option>
                    </select>
                    <select id="district" onchange="loadWards()">
                        <option value="">Chọn quận/huyện</option>
                    </select>
                    <select id="ward">
                        <option value="">Chọn phường/xã</option>
                    </select>
                </div>
                
            </form>
        </div>

        <!-- Thông tin giỏ hàng -->
        <div class="cart-summary">
            <h2>Giỏ hàng</h2>
            <div class="cart-item">
                <img src="asset/image/1.png" alt="Product">
                <div class="item-info">
                    <p>"WHENEVER" TANK TOP / BLACK</p>
                    <p>Size M</p>
                    <p>350,000₫</p>
                </div>
            </div>
            <div class="total">
                <p>Tạm tính: 350,000₫</p>
                <p>Phí ship: 0₫</p>
                <h3>Tổng tiền: <span id="totalPrice">350,000₫</span></h3>
            </div>
            <button id="placeOrderBtn">Đặt hàng</button>
        </div>
    </div>
<script src="asset/js/checkout.js"></script>
<script src="asset/js/apiprovince.js"></script>

</body>
</html>