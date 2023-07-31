<?php session_start(); ?>
<!-- <?php require_once('../../database/config.php'); ?> -->
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8" />

  <title>Sweet Cake Checkout</title>
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
  <link rel="stylesheet" href="css/checkout.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!--isotope-->
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
  <header id="navigationmenu">
    <!--start container-->
    <div class="container clearfix" style="text-align: center">
      <!--start logo-->
      <div class="">
        <img width="180" alt="" src="img/logo.png" />
        <!--Include your logo with size 180px X 239 px-->
      </div>
      <!--end logo-->
    </div>
    <!--end container-->
  </header>
  <!--end navigationmenu-->
  <!-- Main -->
  <main id="main">
    <div class="container">
      <div class="directional" style="text-align: center">
        <span><a href="../../index.php">Trang chủ
          </a></span>
        <span style="margin: 0 5px"> / </span>
        <span>
          <a href="cart.php">Giỏ hàng</a>
        </span>
        <span style="margin: 0 5px"> / </span> <span> Thanh toán</span>
      </div>
      <!--  -->
      <h1 style="text-align: center">Sweet Cake - Checkout</h1>
      <div class="checkout">
        <form action="">
          <?php
          if (isset($_SESSION["user_id"])) {
            // Lấy thông tin người dùng từ session
            $user_id = $_SESSION["user_id"];
            $fullname = $_SESSION["username"];
            $email = $_SESSION["email"];
            $phone_number = $_SESSION["phone_number"];
            $address = $_SESSION["address"];
            // Gán giá trị cho các thẻ input trong form thông tin người nhận
            $fullname_input_value = isset($fullname) ? $fullname : '';
            $phone_number_input_value = isset($phone_number) ? $phone_number : '';
            $email_input_value = isset($email) ? $email : '';
            $address_input_value = isset($address) ? $address : '';
          }
          if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
          }
          if (isset($_SESSION['cart_total'])) {
            $cart_total = $_SESSION['cart_total'];
          } else {
            // Nếu chưa có tổng tiền thì đặt giá trị mặc định là 0
            $cart_total = 0;
          }
          if (isset($_POST['submit'])) {
            // Lấy thông tin người nhận từ form
            $hoTen = $_POST['hoTen'];
            $dienThoai = $_POST['dienThoai'];
            $email = $_POST['email'];
            $diaChiChiTiet = $_POST['diaChiChiTiet'];
            $tinhThanh = $_POST['tinhThanh'];
            $quanHuyen = $_POST['quanHuyen'];
            $phuongXa = $_POST['phuongXa'];
            $ghiChu = $_POST['ghiChu'];

            // Thực hiện lưu thông tin người nhận vào database
            // Tạo câu lệnh SQL để chèn thông tin người nhận vào bảng Orders
            $sql = "INSERT INTO Orders (fullname, email, phone_number, address, note, order_date, status, total_money)
                    VALUES ('$hoTen', '$email', '$dienThoai', '$diaChiChiTiet', '$ghiChu', NOW(), 1, '$cart_total')";

            if ($conn->query($sql) === true) {
              // Lưu đơn hàng thành công
              // Lấy ID của đơn hàng vừa được thêm vào
              $orderID = $conn->insert_id;

              // Tiếp tục lưu thông tin chi tiết đơn hàng (sản phẩm trong giỏ hàng) vào bảng Order_Details
              foreach ($_SESSION['cart'] as $item) {
                $productID = $item['id'];
                $quantity = $item['quantity'];
                $price = $item['price'];

                $productTotal = $quantity * $price;

                // Tạo câu lệnh SQL để chèn thông tin chi tiết đơn hàng vào bảng Order_Details
                $sqlDetail = "INSERT INTO Order_Details (order_id, product_id, price, quantity, total_money)
                                  VALUES ('$orderID', '$productID', '$price', '$quantity', '$productTotal')";

                $conn->query($sqlDetail);
              }

              // Sau khi lưu đơn hàng thành công, bạn có thể xóa giỏ hàng trong session
              unset($_SESSION['cart']);

              // Chuyển hướng người dùng đến trang hoàn thành thanh toán hoặc trang cảm ơn
              header("Location: checkout-done.php");
              exit();
            } else {
              // Lưu đơn hàng thất bại
              echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }

            // Đóng kết nối
            $conn->close();
          }
          ?>
          ?>

          <div class="info">
            <h3><span> 1 </span> Thông tin người nhận</h3>

            <input type="text" name="hoTen" placeholder="Họ Tên *" value="<?php echo $fullname_input_value ?>" />
            <input type="number" name="dienThoai" class="no-spinners" placeholder="Điện thoại *" value="<?php echo $phone_number_input_value ?>" />
            <input type="email" name="email" placeholder="Email *" value="<?php echo $email_input_value ?>" />
            <input type="text" name="diaChiChiTiet" placeholder="Địa chỉ chi tiết *" value="<?php echo $address_input_value ?>" />
            <!-- select -->
            <select name="tinhThanh" class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
              <option value="" selected>Chọn tỉnh thành</option>
            </select>

            <select name="quanHuyen" class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
              <option value="" selected>Chọn quận huyện</option>
            </select>

            <select name="phuongXa" class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
              <option value="" selected>Chọn phường xã</option>
            </select>
            <!-- End select -->
            <textarea name="ghiChu" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
          </div>
          <div class="cart">
            <h3><span> 2 </span> Thông tin Giỏ hàng</h3>
            <table class="cart-product">
              <thead>
                <tr>
                  <th style="text-align: left" width="55%">Tên sản phẩm</th>
                  <th width="20%">Số lượng</th>
                  <th width="25%">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cart as $item) { ?>
                  <tr>
                    <td style="text-align: left">
                      <?php echo $item['title']; ?> <br />
                      Đơn giá: <strong><?php echo number_format($item['price']); ?>đ</strong>
                    </td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><strong><?php echo number_format($item['price'] * $item['quantity']); ?>đ</strong></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <table class="cart-product-2">
              <tfoot>
                <tr>
                  <td width="55%"><strong>Tạm tính</strong></td>
                  <td width="20%"></td>
                  <td style="text-align: center; font-weight: bold;"><?php echo isset($_SESSION['cart_total']) ? number_format($_SESSION['cart_total']) : '0'; ?>đ</td>
                </tr>
                <tr>
                  <td width="55%"><strong>Phí vận chuyển</strong></td>
                  <td width="20%"></td>
                  <td style="text-align: center">0đ</td>
                </tr>
                <tr>
                  <td width="55%"><strong>Mã giảm giá</strong></td>
                  <td width="20%"></td>
                  <td style="text-align: center">0đ</td>
                </tr>
                <tr>
                  <td width="55%"><strong>Tổng cộng</strong></td>
                  <td width="20%"></td>
                  <td style="text-align: center; font-weight: bold;"><?php echo isset($_SESSION['cart_total']) ? number_format($_SESSION['cart_total']) : '0'; ?>đ</td>
                </tr>
              </tfoot>
            </table>

            <div class="formCode form-group">
              <strong class="d-block">Nhập mã ưu đãi</strong>
              <div class="input-group">
                <input type="text" id="coupon" name="couponCode" class="form-control" placeholder="Mã giảm giá" />
                <div class="input-group-btn">
                  <button class="btn btn-pink" id="getCoupon" type="button">
                    Áp dụng
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- payment -->
          <div class="payment">
            <h3><span> 3 </span> Phương thức thanh toán</h3>
            <input type="radio" name="paymentMethod" value="cashOnDelivery" onclick="togglePaymentForm(false)" checked />
            Thanh toán khi nhận hàng<br />
            <input type="radio" name="paymentMethod" value="creditCard" onclick="togglePaymentForm(true)" />
            Thanh toán qua thẻ<br />

            <div id="creditCardForm" style="display: none">
              <!-- Thêm các trường thông tin liên quan đến thanh toán qua thẻ -->
              <input type="text" name="cardNumber" placeholder="Số thẻ" /><br />
              <input type="text" name="expiryDate" placeholder="Ngày hết hạn" /><br />
              <input type="text" name="cvv" placeholder="CVV" /><br />
            </div>
            <input type="submit" value="Hoàn tất thanh toán" />
          </div>
        </form>
      </div>
    </div>
  </main>
  <!-- End main -->

  <div class="sectioncopyright">
    <p>Copyright</p>
  </div>
  <!--Start js-->
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--Jquery-->

  <script src="js/jquery.isotope.min.js"></script>
  <!--isotope-->

  <script src="js/jquery.prettyPhoto.js"></script>
  <!--pretty photo-->
  <script src="js/scroolto.js"></script>
  <!--Scrool To-->
  <script src="js/settings.js"></script>
  <!-- Select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
      url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
      method: "GET",
      responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
      renderCity(result.data);
    });

    function renderCity(data) {
      for (const x of data) {
        citis.options[citis.options.length] = new Option(x.Name, x.Id);
      }
      citis.onchange = function() {
        district.length = 1;
        ward.length = 1;
        if (this.value != "") {
          const result = data.filter((n) => n.Id === this.value);

          for (const k of result[0].Districts) {
            district.options[district.options.length] = new Option(
              k.Name,
              k.Id
            );
          }
        }
      };
      district.onchange = function() {
        ward.length = 1;
        const dataCity = data.filter((n) => n.Id === citis.value);
        if (this.value != "") {
          const dataWards = dataCity[0].Districts.filter(
            (n) => n.Id === this.value
          )[0].Wards;

          for (const w of dataWards) {
            wards.options[wards.options.length] = new Option(w.Name, w.Id);
          }
        }
      };
    }

    function togglePaymentForm(show) {
      var creditCardForm = document.getElementById("creditCardForm");
      creditCardForm.style.display = show ? "block" : "none";
    }
  </script>

  <!--End js-->
</body>

<!-- Mirrored from www.nicdarkthemes.com/themes/sweet-cake/html/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 06:32:28 GMT -->

</html>