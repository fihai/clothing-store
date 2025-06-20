document.addEventListener('DOMContentLoaded', function () {
    // Hiệu ứng hover cho các sản phẩm trong bảng
    const rows = document.querySelectorAll('table tbody tr');
    rows.forEach(row => {
        row.addEventListener('mouseenter', function () {
            this.style.backgroundColor = '#f0f0f0';
        });
        row.addEventListener('mouseleave', function () {
            this.style.backgroundColor = '';
        });
    });
});
