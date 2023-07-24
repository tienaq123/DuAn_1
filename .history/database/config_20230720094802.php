
<?php 
    $servername = "localhost"; // Tên máy chủ MySQL, thường là localhost nếu bạn đang chạy trên cùng máy tính.
    $username = "your_username"; // Tên người dùng MySQL.
    $password = "your_password"; // Mật khẩu của người dùng MySQL.
    $dbname = "your_database"; // Tên cơ sở dữ liệu MySQL mà bạn muốn kết nối.

    // Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

?>