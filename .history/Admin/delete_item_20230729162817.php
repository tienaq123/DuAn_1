<?php
require_once('./function.php');
$conn = connectToDatabase();


// Kiểm tra nếu người dùng muốn xóa sản phẩm
if (isset($_GET['action']) && $_GET['action'] === 'delete_product') {
    // Lấy giá trị product_id từ phương thức POST
    $product_id = $_POST['product_id'];

    // Cập nhật cột deleted thành 1 để đánh dấu sản phẩm đã bị xóa
    $sql = "UPDATE Product SET deleted = 1 WHERE id = '$product_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: product-list.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


// Kiểm tra nếu người dùng muốn xóa danh mục
if (isset($_GET['action']) && $_GET['action'] === 'delete_category') {
    // Lấy giá trị category_id từ phương thức POST
    $category_id = $_POST['category_id'];

    // Cập nhật cột deleted thành 1 để đánh dấu category đã bị xóa
    $sql = "UPDATE Category SET deleted = 1 WHERE id = '$category_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: category.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}


// Kiểm tra nếu người dùng muốn xóa user
if (isset($_GET['action']) && $_GET['action'] === 'delete_user') {
    // Lấy giá trị user_id từ phương thức POST
    $user_id = $_POST['user_id'];

    // Cập nhật cột deleted thành 1 để đánh dấu category đã bị xóa
    $sql = "UPDATE User SET deleted = 1 WHERE id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: user.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
