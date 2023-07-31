<?php
session_start();

if (isset($_POST['product_id'])) {
  // Lấy thông tin sản phẩm từ POST
  $productId = $_POST['product_id'];

  // Kiểm tra xem session giỏ hàng đã tồn tại chưa
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  // Thêm sản phẩm vào giỏ hàng
  if (!in_array($productId, $_SESSION['cart'])) {
    $_SESSION['cart'][] = $productId;
  }

  // Trả về thông báo thành công nếu muốn
  echo "Thêm sản phẩm vào giỏ hàng thành công.";
}
