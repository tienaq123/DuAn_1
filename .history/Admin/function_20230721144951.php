<?php

// Hàm kết nối đến cơ sở dữ liệu
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

// Hàm lấy danh sách các danh mục từ bảng Category
function getAllCategories() {
    $conn = connectToDatabase();

    // Chuẩn bị truy vấn SQL để lấy tất cả danh mục từ bảng Category
    $sql = "SELECT * FROM Category";

    // Thực thi truy vấn
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có dữ liệu trả về hay không
    if (mysqli_num_rows($result) > 0) {
        // Dùng mảng để lưu các danh mục
        $categories = array();

        // Lặp qua từng dòng dữ liệu và lưu vào mảng
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }

        // Giải phóng bộ nhớ
        mysqli_free_result($result);

        // Đóng kết nối database
        mysqli_close($conn);

        return $categories;
    } else {
        // Nếu không có danh mục nào thì trả về null
        return null;
    }
}

// Hàm thêm danh mục mới vào bảng Category
function addCategory($name) {
    $conn = connectToDatabase();

    // Chuẩn bị truy vấn SQL để thêm danh mục mới vào bảng Category
    $sql = "INSERT INTO Category (name) VALUES ('$name')";

    // Thực thi truy vấn
    if (mysqli_query($conn, $sql)) {
        // Đóng kết nối database
        mysqli_close($conn);

        return true;
    } else {
        // Nếu có lỗi xảy ra thì trả về false
        return false;
    }
}

// Hàm xóa danh mục khỏi bảng Category
function deleteCategory($category_id) {
    $conn = connectToDatabase();

    // Chuẩn bị truy vấn SQL để xóa danh mục từ bảng Category
    $sql = "DELETE FROM Category WHERE id = $category_id";

    // Thực thi truy vấn
    if (mysqli_query($conn, $sql)) {
        // Đóng kết nối database
        mysqli_close($conn);

        return true;
    } else {
        // Nếu có lỗi xảy ra thì trả về false
        return false;
    }
}
