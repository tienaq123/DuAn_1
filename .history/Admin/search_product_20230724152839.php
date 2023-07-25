<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<?php
// Kết nối đến cơ sở dữ liệu và kiểm tra kết nối
// include "db_connection.php";
require_once('./function.php');
$conn = connectToDatabase();
include "././database/config.php";

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Thực hiện truy vấn SQL để tìm kiếm sản phẩm với từ khóa
    $sql = "SELECT * FROM Product WHERE title LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);

    // Hiển thị danh sách sản phẩm tìm thấy
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Hiển thị thông tin sản phẩm ở đây
            echo "<div>" . $row['title'] . "</div>";
        }
    } else {
        // Hiển thị thông báo nếu không có sản phẩm nào tìm thấy
        echo "Không có sản phẩm nào phù hợp.";
    }
}
?>
