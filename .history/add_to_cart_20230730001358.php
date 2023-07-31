<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Kiểm tra xem dữ liệu POST có đúng không
  if (
    isset($_POST['product_id']) &&
    isset($_POST['product_title']) &&
    isset($_POST['product_price']) &&
    isset($_POST['product_thumbnail']) &&
    isset($_POST['product_quantity'])
  ) {
    // Lấy thông tin sản phẩm từ POST
    $productId = $_POST['product_id'];
    $productTitle = $_POST['product_title'];
    $productPrice = $_POST['product_price'];
    $productThumbnail = $_POST['product_thumbnail'];
    $productQuantity = $_POST['product_quantity'];

    // Kiểm tra xem session giỏ hàng đã tồn tại chưa
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // Thêm thông tin sản phẩm vào giỏ hàng
    $productData = array(
      'id' => $productId,
      'title' => $productTitle,
      'price' => $productPrice,
      'thumbnail' => $productThumbnail,
      'quantity' => $productQuantity
    );

    $_SESSION['cart'][] = $productData;

    // Trả về thông báo thành công nếu muốn
    echo "Thêm sản phẩm vào giỏ hàng thành công.";
  }
}
