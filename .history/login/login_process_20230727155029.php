
<?php
$servername = "localhost"; // Tên máy chủ MySQL, thường là localhost nếu bạn đang chạy trên cùng máy tính.
$username = "root"; // Tên người dùng MySQL.
$password = ""; // Mật khẩu của người dùng MySQL.
$dbname = "du_an_1"; // Tên cơ sở dữ liệu MySQL mà bạn muốn kết nối.

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

?>

<?php
require_once('../database/config.php');
// login_process.php

// Kiểm tra xem người dùng đã nhấn nút "Login" chưa
if (isset($_POST['login'])) {
    // Lấy dữ liệu đăng nhập từ form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    // Kết nối đến cơ sở dữ liệu (cần điền thông tin kết nối của bạn ở đây)
    // $conn = mysqli_connect("host", "username", "password", "database");

    // Kiểm tra thông tin đăng nhập của người dùng trong cơ sở dữ liệu
    $sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công
        // Lưu thông tin đăng nhập vào session hoặc cookie nếu cần thiết
        // Chuyển hướng người dùng đến trang dashboard hoặc trang chính
        header("Location: dashboard.php");
        exit();
    } else {
        // Thông tin đăng nhập không hợp lệ
        // Hiển thị thông báo lỗi hoặc chuyển hướng người dùng đến trang đăng nhập lại
        header("Location: login.php?error=invalid_login");
        exit();
    }

    // Đóng kết nối
    mysqli_close($conn);
}
