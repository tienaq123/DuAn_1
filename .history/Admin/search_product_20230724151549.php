<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<?php
// Kết nối đến cơ sở dữ liệu và kiểm tra kết nối
// include "db_connection.php";

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Thực hiện truy vấn SQL để tìm kiếm sản phẩm với từ khóa
    $sql = "SELECT p.*, c.name AS category_name FROM Product p
         INNER JOIN Category c ON p.category_id = c.id
         WHERE p.title LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có sản phẩm nào tìm thấy hay không
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Hiển thị thông tin sản phẩm tìm thấy
            echo '<tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">';
            // Hiển thị thông tin sản phẩm ở đây
            // ...
            echo '</tr>';
        }
    } else {
        // Hiển thị thông báo nếu không có sản phẩm nào tìm thấy
        echo '<tr><td colspan="7">Không có sản phẩm phù hợp.</td></tr>';
    }
}
