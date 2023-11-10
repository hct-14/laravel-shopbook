const userToggle = document.querySelector('.user-toggle');

// Lấy tham chiếu đến phần tài khoản của người dùng
const userAccount = document.querySelector('.user-account');

// Bắt đầu theo dõi sự kiện bấm vào nút "Tài Khoản"
userToggle.addEventListener('click', (event) => {
    // Ngăn chặn sự kiện mặc định (tránh việc chuyển đổi trang)
    event.preventDefault();

    // Kiểm tra trạng thái hiển thị của phần tài khoản
    if (userAccount.style.display === 'block') {
        // Đã hiển thị, nên ẩn nó đi
        userAccount.style.display = 'none';
    } else {
        // Chưa hiển thị, nên hiển thị nó
        userAccount.style.display = 'block';
    }
});
