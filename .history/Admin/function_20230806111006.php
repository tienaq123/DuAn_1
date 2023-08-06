<?php
ob_start();
function connectToDatabase()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "du_an_1";

    // Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    return $conn;
}

// Hàm hiển thị danh sách sản phẩm
function displayProducts($conn)
{
    $sql = "SELECT * FROM Product";
    $result = mysqli_query($conn, $sql);
}

// Hàm thêm sản phẩm mới
function addProduct($conn, $productData)
{
    $title = $productData['product_name'];
    $description = $productData['description'];
    $price = $productData['price'];
    $old_price = round($price * 0.2);
    $thumbnail = $productData['thumbnail'];
    $category_id = $productData['category'];
    $created_at = date('Y-m-d H:i:s');
    $sql = "INSERT INTO Product (title, description, price, old_price, thumbnail, category_id, created_at) VALUES ('$title', '$description', '$price', '$old_price', '$thumbnail', $category_id, '$created_at')";
    if (mysqli_query($conn, $sql)) {
        header("Location: product-list.php");
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}




// Hàm sửa thông tin sản phẩm
function editProduct($conn, $product_id, $category_id, $title, $price, $old_price, $thumbnail, $description)
{
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
