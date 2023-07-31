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
  <!--isotope-->
  <link rel="stylesheet" type="text/css" href="slide/css/fullwidth.css" media="screen" />
  <!--revolution slider-->
  <link rel="stylesheet" type="text/css" href="slide/rs-plugin/css/settings.css" media="screen" />
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
          // Kiểm tra nếu giỏ hàng không tồn tại hoặc rỗng
          if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<h2 style="text-align: center; font-family: "Nunito", sans-serif; ">Giỏ hàng của bạn đang trống.</h2>';
          } else {
            // Hiển thị thông tin các sản phẩm trong giỏ hàng
            foreach ($_SESSION['cart'] as $item) {
          ?>

              <!-- item -->

              <div class="cart_products-item">
                <div class="cart_products-left">
                  <img class="cart_products-img" src="./img/section-works/imgworks3.jpg" alt="" />
                  <div class="cart_products-text">
                    <p class="text-name"><?php echo $item['title'] ?> </p>
                    <p class="text-price"><?php echo number_format($item['price'])  ?>đ</p>
                    <div class="text-quantity">
                      <div style="display: flex">
                        <button style="width: 30px; height: 30px; border: none">
                          -
                        </button>
                        <input style="
                          width: 30px;
                          font-size: 14px;
                          text-align: center;
                          border: none;
                        " type="number" class="no-spinners" value="<?php echo $item['quantity'] ?>" />
                        <button style="width: 30px; height: 30px; border: none">
                          +
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart_products-right">
                  <i class="bx bx-x"></i>
                  <p class="total_amount">99.000₫</p>
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
            <button class="codepro-custom-btn codepro-btn-15" target="blank">
              Thanh toán
            </button>
          </div>

          <a class="cart_bill-back" href="/Home_Page/index.html">
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
  <script src="../../../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--Jquery-->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
  <!-- Google Map API -->
  <script src="js/jquery.isotope.min.js"></script>
  <!--isotope-->
  <script src="slide/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <!--revolution slider-->
  <script src="slide/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <!--revolution slider-->
  <script src="js/jquery.prettyPhoto.js"></script>
  <!--pretty photo-->
  <script src="js/scroolto.js"></script>
  <!--Scrool To-->
  <script src="js/settings.js"></script>
  <!--My settings-->

  <!--End js-->

  <!--google analytics-->
  <script>
    (function(i, s, o, g, r, a, m) {
      i["GoogleAnalyticsObject"] = r;
      (i[r] =
        i[r] ||
        function() {
          (i[r].q = i[r].q || []).push(arguments);
        }),
      (i[r].l = 1 * new Date());
      (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m);
    })(
      window,
      document,
      "script",
      "../../../../../www.google-analytics.com/analytics.js",
      "ga"
    );

    ga("create", "UA-49425562-2", "nicdarkthemes.com");
    ga("send", "pageview");
  </script>
  <!--google analytics-->
</body>

<!-- Mirrored from www.nicdarkthemes.com/themes/sweet-cake/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 06:32:28 GMT -->

</html>