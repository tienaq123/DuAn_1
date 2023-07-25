<?php
require_once('./function.php');
$conn = connectToDatabase();
?>

<div class="search-input relative">
    <input class="input h-[44px] w-full pl-14" type="text" id="searchKeyword" placeholder="Search by product name" />
    <button class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme" id="searchButton">
        <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Icon here -->
        </svg>
    </button>
</div>

<div id="searchResults">
    <!-- Danh sách sản phẩm tìm thấy sẽ được hiển thị ở đây -->
</div>

<script>
    // Lắng nghe sự kiện click vào nút tìm kiếm
    document.getElementById("searchButton").addEventListener("click", function() {
        // Lấy từ khóa tìm kiếm từ input
        var keyword = document.getElementById("searchKeyword").value;

        // Gửi yêu cầu tìm kiếm đến máy chủ bằng Ajax
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Khi máy chủ trả về kết quả tìm kiếm, hiển thị danh sách sản phẩm
                document.getElementById("searchResults").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "search_products.php?keyword=" + encodeURIComponent(keyword), true);
        xhttp.send();
    });
</script>

<?php
// Kết nối đến cơ sở dữ liệu và kiểm tra kết nối

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