<?php
require_once('./function.php');
$conn = connectToDatabase();


// Kiểm tra nếu người dùng muốn xóa sản phẩm
if (isset($_GET['action']) && $_GET['action'] === 'delete_product') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kết nối tới cơ sở dữ liệu
        require_once "config.php";

        // Lấy product_id từ form
        $product_id = $_POST['product_id'];

        // Cập nhật cột deleted thành 1 để đánh dấu sản phẩm đã bị xóa
        $sql = "UPDATE Product SET deleted = 1 WHERE id = '$product_id'";

        if (mysqli_query($conn, $sql)) {
            // Nếu cập nhật thành công, chuyển hướng về trang danh sách sản phẩm
            header("Location: product-list.php");
            exit();
        } else {
            // Nếu có lỗi xảy ra trong quá trình cập nhật, hiển thị thông báo lỗi
            echo "Lỗi: " . mysqli_error($conn);
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
}

// Kiểm tra nếu người dùng muốn xóa danh mục
if (isset($_GET['action']) && $_GET['action'] === 'delete_category') {
    // Xử lý xóa danh mục
    // ...

    // Sau khi xóa thành công, chuyển hướng về trang danh sách danh mục
    header("Location: category_list.php");
    exit();
}
