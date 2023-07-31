<?php session_start(); ?>
<?php require_once(__DIR__ . "/../../database/config.php")
?>
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8" />

  <title>Sweet Cake</title>
  <!--insert your title here-->
  <meta name="description" content="Sweet Cake HTML5 CSS3 version" />
  <!--insert your description here-->
  <meta name="author" content="nicDark" />
  <!--insert your name here-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--meta responsive-->

  <!--START CSS-->
  <link rel="stylesheet" href="css/style.css" />
  <!--main-->
  <link rel="stylesheet" href="css/grid.css" />
  <!--grid-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!--grid-->
  <link rel="stylesheet" href="css/isotope.css" />
  <!-- Detail -->
  <link rel="stylesheet" href="css/cart.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!--revolution slider-->
  <link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />

  <!--END CSS-->

  <!--FAVICONS-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
  <!--END FAVICONS-->
</head>
<style>
  .no-spinners::-webkit-inner-spin-button,
  .no-spinners::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* .no-spinners {
      -moz-appearance: textfield;
    } */
</style>

<body>


  <!--start navigationmenu-->
  <style>
    #goCart {
      display: none;
    }
  </style>
  <?php
  include '../../Template/header.php'
  ?>
  <!--end navigationmenu-->
  <!-- Main -->
  <main id="main">
    <div class="container">
      <div class="directional">
        <span><a href="http://127.0.0.1:5500/Home_Page/index.html">Trang chủ
          </a></span>
        <span style="margin: 0 5px"> / </span> <span> Giỏ hàng</span>
      </div>

      <!-- content -->
      <h1>Giỏ hàng của bạn</h1>
      <p>Có N sản phẩm trong giỏ hàng</p>
      <div class="line"></div>
      <div class="cart_content">
        <!-- cart_products -->
        <div class="cart_products">

          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'remove') {
            $product_id_to_remove = $_POST['product_id'];

            // Tìm và xóa sản phẩm có id tương ứng trong danh sách giỏ hàng
            foreach ($_SESSION['cart'] as $key => $item) {
              if ($item['id'] == $product_id_to_remove) {
                unset($_SESSION['cart'][$key]);
                break;
              }
            }

            // Phản hồi về cho JavaScript để cập nhật trang (ví dụ: cập nhật lại giỏ hàng trên trang)
            echo 'success'; // Hoặc gửi dữ liệu mới về nếu cần thiết
            exit;
          }
          // Kiểm tra nếu giỏ hàng không tồn tại hoặc rỗng
          if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<h2 class="echo">Giỏ hàng của bạn đang trống.</h2>';
          } else {
            // Hiển thị thông tin các sản phẩm trong giỏ hàng
            foreach ($_SESSION['cart'] as $item) {
          ?>

              <!-- item -->

              <div class="cart_products-item">
                <div class="cart_products-left">
                  <img class="cart_products-img" src="<?php echo $item['thumbnail'] ?>" alt="" />
                  <div class="cart_products-text">
                    <p class="text-name"><?php echo $item['title'] ?> </p>
                    <p class="text-price"><?php echo number_format($item['price'])  ?>đ</p>
                    <div class="text-quantity">
                      <div style="display: flex">
                        <button style="width: 30px; height: 30px; border: none; cursor: pointer;" onclick="updateCartQuantity('<?php echo  intval($item['id']); ?>', -1)">
                          -
                        </button>
                        <input id="quantityInput-<?php echo $item['id']; ?>" style="
                          width: 30px;
                          font-size: 14px;
                          text-align: center;
                          border: none;
                        " type="number" class="no-spinners" value="<?php echo $item['quantity'] ?>" onchange="updateCartQuantity('<?php echo  intval($item['id']); ?>', this.value)" />
                        <button style="width: 30px; height: 30px; border: none; cursor: pointer;" onclick="updateCartQuantity('<?php echo  intval($item['id']); ?>', 1)">
                          +
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart_products-right">
                  <!-- <button class="delete-product-btn" data-product-id="<?php echo $item['id'] ?>"><i class="bx bx-x"></i></button> -->
                  <i style="cursor: pointer;" class="bx bx-x delete-product-btn" data-product-id="<?php echo $item['id'] ?>"></i>
                  <p class="total_amount"><?php echo number_format($item['price'] * $item['quantity']) ?>đ</p>
                </div>
              </div>
          <?php
            }
          }
          ?>

          <div class="cart_products-note">
            <div class="note">
              <p>Ghi chú đơn hàng</p>
              <textarea name="" id="" cols="45" rows="8" placeholder="Ghi chú"></textarea>
            </div>
            <div class="policy">
              <p>Chính sách mua hàng</p>
              <span><i class="bx bx-right-arrow-alt"></i> Vui lòng kiểm tra kỹ
                sản phẩm và số lượng trước khi nhận hàng thanh toán
              </span>
              <br />
              <span><i class="bx bx-right-arrow-alt"></i> Liên hệ hotline
                0123456789 để được tư vấn chi tiết </span><br />
              <span><i class="bx bx-right-arrow-alt"></i> Sản phẩm sale Bánh của
                tháng chỉ áp dụng khi mua tại cửa hàng
              </span>
            </div>
          </div>
        </div>
        <!-- end cart_products -->

        <!-- cart_bill -->
        <div class="cart_bill">
          <h2>Thông tin đơn hàng</h2>
          <div class="cart_bill-price">
            <span>Tổng tiền:</span> <span>297.000₫</span>
          </div>

          <p>
            Phí vận chuyển sẽ được tính ở trang thanh toán. <br />
            Bạn cũng có thể nhập mã giảm giá ở trang thanh toán
          </p>
          <div class="cart_bill-btn">
            <a href="checkout.html">
              <button class="codepro-custom-btn codepro-btn-15" target="blank">
                Thanh toán
              </button></a>
          </div>

          <a class="cart_bill-back" href="../../index.php#sectionportfolio">
            <i class="bx bx-reply"></i>
            <span>Tiếp tục mua hàng</span>
          </a>
        </div>
        <!-- end cart_bill -->
      </div>
    </div>
  </main>
  <!-- End main -->
  <!--start contacts-->

  <!--end contacts-->

  <div class="sectioncopyright">
    <p>Copyright</p>
  </div>
  <!--Start js-->
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--Jquery-->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
  <!--End js-->

  <!-- Quantity -->
  <script>
    // Bắt sự kiện click vào nút "+"
    const increaseButtons = document.querySelectorAll('.cart_products-item .text-quantity button:last-child');
    increaseButtons.forEach((button) => {
      button.addEventListener('click', function() {
        const quantityInput = this.parentElement.querySelector('input[type="number"]');
        const currentQuantity = parseInt(quantityInput.value);
        const newQuantity = currentQuantity + 1;
        quantityInput.value = newQuantity;

        // Lấy productId từ thuộc tính data-productId của input số lượng
        // const productId = quantityInput.dataset.productid;
        // Gọi hàm updateQuantity và truyền tham số quantityChange là -1
        // updateQuantity(productId, 1);

      });
    });

    // Bắt sự kiện click vào nút "-"
    const decreaseButtons = document.querySelectorAll('.cart_products-item .text-quantity button:first-child');
    decreaseButtons.forEach((button) => {
      button.addEventListener('click', function() {
        const quantityInput = this.parentElement.querySelector('input[type="number"]');
        const currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
          const newQuantity = currentQuantity - 1;
          quantityInput.value = newQuantity;

          // Lấy productId từ thuộc tính data-productId của input số lượng
          // const productId = quantityInput.dataset.productid;
          // Gọi hàm updateQuantity và truyền tham số quantityChange là -1
          // console.log(productId);
          // updateQuantity(productId, -1);
        }
      });
    });
  </script>

  <script>
    function updateCartQuantity(productId, newQuantity) {
      console.log(productId, newQuantity);
      // Gửi yêu cầu Ajax để cập nhật số lượng sản phẩm trong giỏ hàng
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'update_cart.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Xử lý kết quả trả về nếu cần thiết
            console.log(xhr.responseText);
            // Nếu cần cập nhật lại tổng tiền, thực hiện ở đây
          } else {
            // Xử lý lỗi nếu có
            console.error('Đã xảy ra lỗi: ' + xhr.status);
          }
        }
      };
      xhr.send('update_quantity=true&product_id=' + encodeURIComponent(productId) + '&new_quantity=' + encodeURIComponent(newQuantity));
    }
  </script>

  <!-- Update session -->


  <!-- xử lí PHP -->
  <?php
  // Kiểm tra nếu người dùng click vào nút cập nhật số lượng
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_quantity') {
    $product_id_to_update = $_POST['product_id'];
    $quantity_change = (int)$_POST['quantity_change'];

    // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa, nếu chưa thì tạo mới
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng hay không
    $product_exists = false;
    foreach ($_SESSION['cart'] as $key => $item) {
      if ($item['id'] == $product_id_to_update) {
        // Cập nhật số lượng sản phẩm
        $_SESSION['cart'][$key]['quantity'] += $quantity_change;
        $product_exists = true;
        break;
      }
    }

    // Trả về kết quả thành công cho yêu cầu Ajax
    echo 'success';
    exit;
  }
  ?>
  <!-- Quantity -->



  <!-- Delete product -->
  <script>
    // Bắt sự kiện click vào nút xóa sản phẩm
    const deleteButtons = document.querySelectorAll('.delete-product-btn');
    deleteButtons.forEach((button) => {
      button.addEventListener('click', function() {
        const productId = this.dataset.productId;
        // Gửi yêu cầu xóa sản phẩm có id tương ứng đến cart.php bằng Ajax
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'cart.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              window.location.reload();
            } else {
              // Xử lý lỗi nếu có
              console.error('Đã xảy ra lỗi: ' + xhr.status);
            }
          }
        };
        xhr.send('action=remove&product_id=' + productId);
      });
    });
  </script>
  <!-- Delete product -->



</body>

<!-- Mirrored from www.nicdarkthemes.com/themes/sweet-cake/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 06:32:28 GMT -->

</html>