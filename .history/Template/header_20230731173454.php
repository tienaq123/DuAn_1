<header id="navigationmenu">
  <?php

  // Đảm bảo biến $_SESSION['cart'] tồn tại
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  // Đếm số lượng sản phẩm trong giỏ hàng
  $totalProductsInCart = count($_SESSION['cart']);

  ?>
  <a id="goCart" class="demo-blog" href="/Duan1/Pages/cart/cart.php">
    <div class="count-cart">
      <img src="img/cart_icon-new.png" />
      <span class="count"><?php echo $totalProductsInCart ?></span>
    </div>
  </a>
  <!--start container-->
  <div class="container clearfix">
    <!--left navigation-->
    <div class="grid_5">
      <nav class="leftnavigation">
        <ul>
          <li><a href="#services">Services</a></li>
          <!--you can edit-->
          <li><a href="#testimonials">Testimonials</a></li>
          <!--you can edit-->
          <li><a href="#sectionportfolio">Works</a></li>
          <!--you can edit-->
          <li><a href="#sectionprices">Prices</a></li>
          <!--you can edit-->
        </ul>
      </nav>
    </div>
    <!--end left navigation-->

    <!--start logo-->
    <a id="logo" href="/Duan1">
      <div class="grid_2 logo">
        <img width="180" alt="" src="img/logo.png" />
        <!--Include your logo with size 180px X 239 px-->
      </div>
    </a>
    <!--end logo-->

    <!--right navigation-->
    <div class="grid_5">
      <nav class="rightnavigation">
        <ul>
          <li><a href="#sectionteam">Our Team</a></li>
          <!--you can edit-->
          <li><a href="#sectionskills">Our Skills</a></li>
          <!--you can edit-->
          <li><a href="#oursocial">Social</a></li>
          <?php

          // Kiểm tra xem người dùng đã đăng nhập chưa
          if (isset($_SESSION['user_id'])) {
            // Nếu đã đăng nhập, hiển thị thông tin người dùng và button đăng xuất
            $user_id = $_SESSION['user_id'];
            $fullname = $_SESSION['username'];

            // Hiển thị thông tin người dùng
            // echo "$fullname"; // Thay "Welcome" bằng chào mừng theo ngôn ngữ của bạn
            // echo '<a id="logout" href="logout.php">Logout</a>'; // Thay đường dẫn "logout.php" bằng file xử lý đăng xuất
            echo '<li><div class="dropdown">
              <a>';
            echo "$fullname";
            echo '</a>
              <div class="dropdown-content">
                <a href="../order/order-list.php">Order</a>
                <a href="../profile/profile.php">Changer</a>
                <a href="../logout.php">Logout</a>
              </div>
            </div>  </li>';
          } else {
            echo '<li><a id="pageLogin" href="../../login.php">Login</a></li>';
          }
          ?>
        </ul>
      </nav>
    </div>
    <!--end right navigation-->
  </div>

  <!--end container-->
</header>