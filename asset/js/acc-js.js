// Kiểm tra form Login
document.getElementById('loginForm')?.addEventListener('submit', function(event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email || !password) {
        alert('Vui lòng điền đầy đủ thông tin!');
        event.preventDefault();
    }
});

// Kiểm tra form Register
document.getElementById('registerForm')?.addEventListener('submit', function(event) {
    const firstName = document.getElementById('first_name').value;
    const lastName = document.getElementById('last_name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!firstName || !lastName || !email || !password) {
        alert('Vui lòng điền đầy đủ thông tin!');
        event.preventDefault();
    }
});

// Kiểm tra form Forgot Password
document.getElementById('forgotPasswordForm')?.addEventListener('submit', function(event) {
    const email = document.getElementById('email').value;

    if (!email) {
        alert('Vui lòng nhập địa chỉ email!');
        event.preventDefault();
    }
});

