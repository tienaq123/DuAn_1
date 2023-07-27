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
    <a id="logo" href="/">
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
          <!--you can edit-->
          <li><a id="pageLogin" href="/Duan1/Pages/login/login.php">Login</a></li>
          <!--you can edit-->
        </ul>
      </nav>
    </div>
    <!--end right navigation-->
  </div>

  <!--end container-->
</header>

<script>
  // GO login
  // Lấy tham chiếu đến nút button
  var button = document.getElementById("pageLogin");
  // Định nghĩa hàm xử lý sự kiện click
  function chuyenTrangLogin() {
    // Chuyển đến URL mong muốn
    window.location.href = "/Duan1/Pages/login/login.html";
  }
  // Gán hàm xử lý sự kiện cho sự kiện click
  button.addEventListener("click", chuyenTrangLogin);

  // GO Cart
  var button = document.getElementById("goCart");

  function chuyenTrangCart() {
    window.location.href = "/Duan1/Pages/cart/cart.php";
  }
  button.addEventListener("click", chuyenTrangCart);

  // GO Home
  var button = document.getElementById("logo");

  function chuyenTrangHome() {
    window.location.href = "/Duan1/Pages/Home_Page/index.php";
  }
  button.addEventListener("click", chuyenTrangHome);
</script>