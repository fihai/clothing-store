<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            text-align: center;
            border-bottom: 2px solid #ddd;
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .cart-header h1 {
            font-size: 28px;
            margin: 0;
            color: #333;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .cart-item-info {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .cart-item-details {
            margin-left: 15px;
        }

        .cart-item-details p {
            margin: 5px 0;
            font-size: 16px;
        }

        .cart-item-actions {
            display: flex;
            align-items: center;
        }

        .cart-item-actions button {
            background-color: #b71c1c;
            color: white;
            border: none;
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .cart-item-actions button:hover {
            background-color: #8a1717;
        }

        .subtotal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .subtotal p {
            margin: 0;
        }

        .checkout-btn {
            background-color: #b71c1c;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            float: right;
        }

        .checkout-btn:hover {
            background-color: #8a1717;
        }

        .empty-cart {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cart-header">
            <h1>Giỏ Hàng Của Bạn</h1>
        </div>

        <div id="cart-items">
            <!-- Các sản phẩm sẽ được thêm vào đây bằng JavaScript -->
        </div>/-strong/-heart:>:o:-((:-h <div class="subtotal" id="subtotal-container" style="display: none;">
            <p>Tổng cộng:</p>
            <p id="subtotal">0 VND</p>
        </div>
        <button class="checkout-btn" id="checkout-btn" style="display: none;">Thanh Toán</button>

        <p class="empty-cart" id="empty-message">Giỏ hàng của bạn đang trống!</p>
    </div>

    <!-- Link đến file cart.js -->
    <script src="cart.js"></script>
</body>
</html>