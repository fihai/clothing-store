const sliderItems = document.querySelectorAll('.slider-item');
let currentIndex = 0;

// Hàm hiển thị slide với hiệu ứng fade
function showSlide(index) {
    // Ẩn tất cả các slide
    sliderItems.forEach((item, i) => {
        if (i === index) {
            item.style.opacity = '1'; // Hiển thị slide hiện tại
            item.style.zIndex = '1'; // Đưa slide lên trên cùng
        } else {
            item.style.opacity = '0'; // Ẩn các slide khác
            item.style.zIndex = '0'; // Đưa các slide xuống dưới
        }
    });
}

// Hàm chuyển sang slide tiếp theo
function nextSlide() {
    currentIndex = (currentIndex + 1) % sliderItems.length;
    showSlide(currentIndex);
}

// Khởi tạo slide đầu tiên
showSlide(currentIndex);

// Chuyển slide tự động mỗi 3 giây
setInterval(nextSlide, 4000);
