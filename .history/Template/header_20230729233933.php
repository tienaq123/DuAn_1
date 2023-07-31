<header id="navigationmenu">
  <a id="goCart" class="demo-blog" href="/Duan1/Pages/cart/cart.php">
    <div class="count-cart">
      <img src="img/cart_icon-new.png" />
      <span class="count">6</span>
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
                <a href="#">Changer</a>
                <a href="../logout.php">Logout</a>
              </div>
            </div>  </li>';
          } else {
            echo '<li><a id="pageLogin" href="login.php">Login</a></li>';
            // Nếu chưa đăng nhập, hiển thị form đăng nhập
            // Nếu bạn đã có form đăng nhập ở trang chủ, chỉ cần chuyển phần đó vào đây
            // Nếu form đăng nhập nằm trong file login.php, bạn có thể include file login.php vào đây:
            // include 'login.php';
          }
          ?>
        </ul>
      </nav>
    </div>
    <!--end right navigation-->
  </div>

  <!--end container-->
</header>