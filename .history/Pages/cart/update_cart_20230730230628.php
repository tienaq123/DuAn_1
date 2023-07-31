<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_quantity']) && $_POST['update_quantity'] === 'true') {
  $product_id_to_update = $_POST['product_id'];
  $new_quantity = (int)$_POST['new_quantity'];

  // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa, nếu chưa thì tạo mới
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng hay không
  $product_exists = false;
  foreach ($_SESSION['cart'] as $key => $item) {
    if ($item['id'] == $product_id_to_update) {
      // Cập nhật số lượng sản phẩm
      $_SESSION['cart'][$key]['quantity'] = $new_quantity;
      $product_exists = true;
      break;
    }
  }

  // Trả về kết quả thành công cho yêu cầu Ajax
  echo 'success';
  exit;
}
