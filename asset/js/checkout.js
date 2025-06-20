document.getElementById("placeOrderBtn").addEventListener("click", function (e) {
    e.preventDefault(); // Ngăn chặn hành động mặc định (chuyển trang ngay lập tức)

    const form = document.getElementById("checkoutForm");

    // Lấy tất cả các input và select cần kiểm tra
    const inputs = form.querySelectorAll("input[required], select[required]");

    let isValid = true;

    // Xóa tất cả thông báo lỗi trước đó
    form.querySelectorAll(".error-message").forEach((msg) => msg.remove());

    inputs.forEach((input) => {
        if (!input.value.trim()) {
            isValid = false;

            // Tạo và hiển thị thông báo lỗi
            const errorMessage = document.createElement("div");
            errorMessage.className = "error-message";
            errorMessage.textContent = `${input.placeholder || "Thông tin"} không được để trống`;
            errorMessage.style.color = "red";
            errorMessage.style.fontSize = "0.9rem";

            // Kiểm tra nếu thông báo lỗi đã tồn tại
            if (!input.nextElementSibling || !input.nextElementSibling.classList.contains("error-message")) {
                input.insertAdjacentElement("afterend", errorMessage);
            }
        }
    });

    if (isValid) {
        // Nếu tất cả các trường hợp lệ
        alert("Đặt hàng thành công!");
        window.location.href = "order-success.php";
    }
});
