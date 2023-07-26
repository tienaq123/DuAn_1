<?php
require_once('./function.php');
$conn = connectToDatabase();


// Kiểm tra nếu người dùng muốn xóa sản phẩm
if (isset($_GET['action']) && $_GET['action'] === 'delete_product') {
    // Xử lý xóa sản phẩm
    // ...

    // Sau khi xóa thành công, chuyển hướng về trang danh sách sản phẩm
    header("Location: product_list.php");
    exit();
}

// Kiểm tra nếu người dùng muốn xóa danh mục
if (isset($_GET['action']) && $_GET['action'] === 'delete_category') {
    // Xử lý xóa danh mục
    // ...

    // Sau khi xóa thành công, chuyển hướng về trang danh sách danh mục
    header("Location: category_list.php");
    exit();
}
