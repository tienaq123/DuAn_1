<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<?php


if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];

  $sql = "SELECT o.*, od.* FROM orders o
        INNER JOIN order_details od ON o.id = od.id
        WHERE o.id = '$keyword'";
  $result = mysqli_query($conn, $sql);

  // Hiển thị danh sách sản phẩm tìm thấy
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      
      <?php }
  }  ?>
   