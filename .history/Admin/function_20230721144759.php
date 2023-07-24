
<?php


function getAllCategories()
{
    // Lấy tất cả danh mục từ bảng Category
    $sql = "SELECT * FROM Category";
    // Thực thi truy vấn
    $result = mysqli_query($conn, $sql);
}

function addCategory($name)
{
    // Thêm danh mục mới vào bảng Category
    if (isset($_POST['add_category'])) {
        // Kiểm tra kết nối
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
        // Trích xuất dữ liệu từ trường nhập liệu
        $name = $_POST['category_name'];
        // Chuẩn bị truy vấn SQL để thêm danh mục vào bảng Category
        $sql = "INSERT INTO Category (name) VALUES ('$name')";
        // Thực thi truy vấn
        if (mysqli_query($conn, $sql)) {
            // Nếu thêm thành công, bạn có thể thêm mã xử lý để hiển thị thông báo hoặc chuyển hướng người dùng
            echo "Thêm danh mục thành công!";
            // Hoặc chuyển hướng về trang danh mục sau khi thêm thành công
            // header("Location: http://localhost/Duan1/Admin/category.php");
        } else {
            // Nếu có lỗi xảy ra trong quá trình thêm, bạn có thể hiển thị thông báo hoặc xử lý lỗi ở đây
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
}

function updateCategory($id, $name)
{
    // Cập nhật thông tin danh mục trong bảng Category
    // ...
}

function deleteCategory($id)
{
    // Xóa danh mục khỏi bảng Category
    // ...
}

?>