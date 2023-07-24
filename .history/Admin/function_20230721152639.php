<?php
// Kết nối tới database (có thể chuyển phần kết nối vào một file riêng nếu muốn)
function connectToDatabase() {
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

    return $conn;
}

// Hàm hiển thị danh sách sản phẩm
function displayProducts($conn) {
    $sql = "SELECT * FROM Product";
    $result = mysqli_query($conn, $sql);

    // Xử lý dữ liệu và hiển thị sản phẩm
    // ...
}

// Hàm thêm sản phẩm mới
function addProduct($conn, $category_id, $title, $price, $old_price, $thumbnail, $description) {
    $sql = "INSERT INTO Product (category_id, title, price, old_price, thumbnail, description) 
            VALUES ('$category_id', '$title', '$price', '$old_price', '$thumbnail', '$description')";

    if (mysqli_query($conn, $sql)) {
        // Thêm thành công
        return true;
    } else {
        // Có lỗi xảy ra
        return false;
    }
}

// Hàm sửa thông tin sản phẩm
function editProduct($conn, $product_id, $category_id, $title, $price, $old_price, $thumbnail, $description) {
    $sql = "UPDATE Product SET category_id='$category_id', title='$title', price='$price', old_price='$old_price', 
            thumbnail='$thumbnail', description='$description' WHERE id='$product_id'";

    if (mysqli_query($conn, $sql)) {
        // Sửa thành công
        return true;
    } else {
        // Có lỗi xảy ra
        return false;
    }
}

// Hàm xóa sản phẩm
function deleteProduct($conn, $product_id) {
    $sql = "DELETE FROM Product WHERE id = $product_id";

    if (mysqli_query($conn, $sql)) {
        // Xóa thành công
        return true;
    } else {
        // Có lỗi xảy ra
        return false;
    }
}

// Các chức năng khác (nếu cần)
