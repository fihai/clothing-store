document.querySelectorAll('.quantity-btn').forEach((btn, index) => {
    btn.addEventListener('click', (event) => {
        const quantity = event.target.parentElement.querySelector('span');
        let current = parseInt(quantity.textContent);
        if (btn.textContent === "+" && current < 99) {
            quantity.textContent = current + 1;
        } else if (btn.textContent === "-" && current > 1) {
            quantity.textContent = current - 1;
        }
    });
});
// Lưu kích thước đã chọn (chỉ một kích thước)
let selectedSize = null; 
const cartItems = [];

// Chọn hoặc bỏ chọn kích thước
function toggleSize(button) {
    const size = button.dataset.size;

    // Nếu kích thước đã chọn là kích thước đang được nhấn, thì bỏ chọn
    if (selectedSize === size) {
        selectedSize = null;
        button.classList.remove('selected');
    } else {
        // Bỏ chọn kích thước trước đó (nếu có)
        if (selectedSize) {
            document.querySelectorAll('.size-button').forEach(btn => {
                if (btn.dataset.size === selectedSize) {
                    btn.classList.remove('selected');
                }
            });
        }
        // Gán kích thước mới và thêm lớp 'selected'
        selectedSize = size;
        button.classList.add('selected');
    }

    console.log("Selected Size:", selectedSize);
}

// Thêm sản phẩm vào giỏ hàng
function addToCart() {
    if (!selectedSize) {
        alert("Vui lòng chọn một kích thước.");
        return;
    }

    // Lưu thông tin sản phẩm vào giỏ hàng
    const product = {
        name: "“WHENEVER” BASIC LOGO EMBROIDERED T-SHIRT / BLACK",
        price: 350000,
        size: selectedSize
    };

    cartItems.push(product);
    updateCart();
    alert(`Bạn đã thêm vào giỏ hàng với kích thước: ${selectedSize}`);

    // Reset lựa chọn kích thước
    selectedSize = null;
    document.querySelectorAll('.size-button').forEach(button => button.classList.remove('selected'));
}

// Cập nhật giỏ hàng
function updateCart() {
    const cartContainer = document.getElementById('cart-container');
    const cartItemsContainer = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');

    // Hiển thị giỏ hàng nếu có sản phẩm
    if (cartItems.length > 0) {
        cartContainer.style.display = 'block';
        cartItemsContainer.innerHTML = '';

        let totalPrice = 0;

        // Hiển thị từng sản phẩm trong giỏ hàng
        cartItems.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');

            const itemText = document.createElement('span');
            itemText.textContent = `${item.name} - ${item.size} - ${item.price.toLocaleString()}₫`;

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Xóa';
            removeButton.classList.add('remove-button');
            removeButton.onclick = () => removeFromCart(index);

            cartItem.appendChild(itemText);
            cartItem.appendChild(removeButton);
            cartItemsContainer.appendChild(cartItem);

            // Cộng giá sản phẩm vào tổng tiền
            totalPrice += item.price;
        });

        // Cập nhật tổng tiền
        totalPriceElement.textContent = `${totalPrice.toLocaleString()}₫`;
    } else {
        cartContainer.style.display = 'none';
    }
}

// Đóng giỏ hàng
document.getElementById("close-cart-button").addEventListener("click", () => {
    const cartContainer = document.getElementById('cart-container');
    cartContainer.style.display = 'none';
});


// Xóa sản phẩm khỏi giỏ hàng
function removeFromCart(index) {
    cartItems.splice(index, 1);
    updateCart();
}
document.querySelector('.bag').addEventListener('click', (event) => {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
    document.getElementById('cart-container').style.display = 'block'; // Hiện giỏ hàng
});


document.getElementById("checkout-button").addEventListener("click", () => {
    window.location.href = "checkout.php"; // Đường dẫn đến trang thanh toán
});
