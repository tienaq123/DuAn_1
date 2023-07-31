<?php session_start();
?>
<?php ob_start(); ?>
<?php require_once('./database/config.php')
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
  <link rel="stylesheet" href="./Public/css/style.css" />
  <link rel="stylesheet" href="./Public/css/custom.css" />
  <!--main-->
  <link rel="stylesheet" href="./Public/css/grid.css" />
  <!--grid-->
  <link rel="stylesheet" href="./Public/css/responsive.css" />
  <!--grid-->
  <link rel="stylesheet" href="./Public/css/isotope.css" />
  <!-- Box icon -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--isotope-->
  <link rel="stylesheet" type="text/css" href="./Public/slide/css/fullwidth.css" media="screen" />
  <!--revolution slider-->
  <link rel="stylesheet" type="text/css" href="./Public/slide/rs-plugin/css/settings.css" media="screen" />
  <!--revolution slider-->
  <link rel="stylesheet" href="./Public/css/prettyPhoto.css" media="screen" />
  <!--prettyphoto-->
  <!--END CSS-->


  <!--FAVICONS-->
  <link rel="shortcut icon" href="./Public/img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" href="./Public/img/favicon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="./Public/img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="./Public/img/favicon/apple-touch-icon-114x114.png" />
  <!--END FAVICONS-->
</head>
<style>
  .product-list .product-item:not(:nth-child(-n+8)) {
    display: none;
  }

  /* Hiển thị nút "Next" và "Prev" */
  #btnNext,
  #btnPrev {
    display: block;
  }

  /* Ẩn nút "Prev" khi đang ở trang đầu tiên */
  #btnPrev[data-page="1"] {
    display: none;
  }
</style>

<body>
  <!--start navigationmenu-->
  <!-- Header -->
  <header id="navigationmenu">
    <a id="cart" class="" href="Pages/cart/cart.php">
      <div class="count-cart">
        <img src="./Public/img/cart_icon-new.png" />
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
      <a id="logo" href="index.php">
        <div class="grid_2 logo">
          <img width="180" alt="" src="./Public/img/logo.png" />
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
            <!--  -->
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
                <a href="logout.php">Logout</a>
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
            <!--  -->
            <!-- <li><a id="pageLogin" href="/Duan1/Pages/login/login.php">Login</a></li> -->
            <!--you can edit-->
          </ul>
        </nav>
      </div>
      <!--end right navigation-->
    </div>

    <!--end container-->
  </header>
  <!-- Header -->
  <!--end navigationmenu--><!--start sectionslide-->
  <section id="sectionslide">
    <div class="topwaves"></div>
    <!--top waves-->

    <div class="fullwidthbanner-container">
      <div class="fullwidthbanner">
        <ul>
          <!-- THE FIRST SLIDE -->
          <li data-transition="random" data-slotamount="10" data-masterspeed="300" data-delay="6100">
            <img alt="" src="./Public/img/section-slide/1/slide1.jpg" />

            <div class="caption randomrotate" data-x="353" data-y="168" data-speed="300" data-start="1500" data-easing="easeOutExpo" data-end="3800" data-endspeed="300" data-endeasing="easeInSine">
              <img width="254" src="./Public/img/section-slide/1/welcome-1.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="178" data-y="275" data-speed="300" data-start="1700" data-easing="easeOutExpo" data-end="4000" data-endspeed="300" data-endeasing="easeInSine">
              <img width="69" src="./Public/img/section-slide/1/to-2.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="267" data-y="275" data-speed="300" data-start="1900" data-easing="easeOutExpo" data-end="4200" data-endspeed="300" data-endeasing="easeInSine">
              <img width="162" src="./Public/img/section-slide/1/sweet-3.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="449" data-y="275" data-speed="300" data-start="2100" data-easing="easeOutExpo" data-end="4400" data-endspeed="300" data-endeasing="easeInSine">
              <img width="134" src="./Public/img/section-slide/1/cake-4.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="603" data-y="275" data-speed="300" data-start="2300" data-easing="easeOutExpo" data-end="4600" data-endspeed="300" data-endeasing="easeInSine">
              <img width="179" src="./Public/img/section-slide/1/theme-5.png" alt="" />
            </div>
          </li>
          <!--END FIRST SLDIE-->

          <!--THE SECOND SLIDE -->
          <li data-transition="random" data-slotamount="15" data-masterspeed="300" data-delay="7800">
            <img alt="" src="./Public/img/section-slide/2/slide2.jpg" />

            <div class="caption randomrotate" data-x="348" data-y="168" data-speed="300" data-start="1500" data-easing="easeOutExpo" data-end="3400" data-endspeed="300" data-endeasing="easeInSine">
              <img width="263" src="./Public/img/section-slide/2/awesome-1.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="246" data-y="275" data-speed="300" data-start="1700" data-easing="easeOutExpo" data-end="3600" data-endspeed="300" data-endeasing="easeInSine">
              <img width="300" src="./Public/img/section-slide/2/responsive-2.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="566" data-y="275" data-speed="300" data-start="1900" data-easing="easeOutExpo" data-end="3800" data-endspeed="300" data-endeasing="easeInSine">
              <img width="173" src="./Public/img/section-slide/2/slider-3.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="406" data-y="168" data-speed="300" data-start="4000" data-easing="easeOutExpo" data-end="5900" data-endspeed="300" data-endeasing="easeInSine">
              <img width="147" src="./Public/img/section-slide/2/with-4.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="252" data-y="275" data-speed="300" data-start="4200" data-easing="easeOutExpo" data-end="6100" data-endspeed="300" data-endeasing="easeInSine">
              <img width="164" src="./Public/img/section-slide/2/many-5.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="436" data-y="275" data-speed="300" data-start="4400" data-easing="easeOutExpo" data-end="6300" data-endspeed="300" data-endeasing="easeInSine">
              <img width="320" src="./Public/img/section-slide/2/transitions-6.png" alt="" />
            </div>
          </li>
          <!--END SECOND SLIDE-->

          <!--THE THIRD SLIDE -->
          <li data-transition="random" data-slotamount="15" data-masterspeed="300" data-delay="6500">
            <img alt="" src="./Public/img/section-slide/3/slide3.jpg" />

            <div class="caption randomrotate" data-x="205" data-y="168" data-speed="300" data-start="1500" data-easing="easeOutExpo" data-end="4000" data-endspeed="300" data-endeasing="easeInSine">
              <img width="99" src="./Public/img/section-slide/3/the-1.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="324" data-y="168" data-speed="300" data-start="1700" data-easing="easeOutExpo" data-end="4200" data-endspeed="300" data-endeasing="easeInSine">
              <img width="120" src="./Public/img/section-slide/3/best-2.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="464" data-y="168" data-speed="300" data-start="1900" data-easing="easeOutExpo" data-end="4400" data-endspeed="300" data-endeasing="easeInSine">
              <img width="290" src="./Public/img/section-slide/3/promotion-3.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="215" data-y="275" data-speed="300" data-start="2100" data-easing="easeOutExpo" data-end="4600" data-endspeed="300" data-endeasing="easeInSine">
              <img width="98" src="./Public/img/section-slide/3/for-4.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="333" data-y="275" data-speed="300" data-start="2300" data-easing="easeOutExpo" data-end="4800" data-endspeed="300" data-endeasing="easeInSine">
              <img width="144" src="./Public/img/section-slide/3/your-5.png" alt="" />
            </div>

            <div class="caption randomrotate" data-x="497" data-y="275" data-speed="300" data-start="2500" data-easing="easeOutExpo" data-end="5000" data-endspeed="300" data-endeasing="easeInSine">
              <img width="248" src="./Public/img/section-slide/3/business-6.png" alt="" />
            </div>
          </li>
          <!--END THIRD SLIDE-->
        </ul>
      </div>
    </div>
  </section>
  <!--end sectionslide--><!--start services-->
  <section id="services">
    <div class="bottomwaves"></div>
    <!--need for slide-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>Services We Provide</h1>
      </div>
      <!--end title section-->

      <!--start our services-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service1.png" />
        <!-- You can find the service icons in vector format in psd attachment.-->
        <h2>Cake Design</h2>
        <!--you can edit-->
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
        <!--you can edit-->
      </div>
      <!--Service-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service2.png" />
        <h2>Best Cupcakes</h2>
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
      </div>
      <!--Service-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service3.png" />
        <h2>Desserts</h2>
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
      </div>
      <!--Service-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service4.png" />
        <h2>Menu Planners</h2>
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
      </div>
      <!--Service-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service5.png" />
        <h2>Awesome Recipes</h2>
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
      </div>
      <!--Service-->

      <!--Service-->
      <div class="grid_4">
        <img width="100" class="rotate" alt="" src="./Public/img/section-services/service6.png" />
        <h2>Home Delivery</h2>
        <p>
          Lorem ipsum dolor sit amet consect etur adipiscing elit. Curabitur
          sempo turpis quis est scelerisque sit amete.
        </p>
      </div>
      <!--Service-->

      <!--end our services-->
    </div>
    <!--end container-->
  </section>
  <!--end services--><!--start testimonials-->
  <section id="testimonials">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#services"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/toptestimonials.png" /></a>
        <a href="#sectionportfolio"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomtestimonials.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start dark filter-->
    <div id="darkfilter">
      <!--start container-->
      <div class="container clearfix">
        <!--top quote-->
        <div class="grid_12 topquote">
          <img alt="" src="./Public/img/section-testimonials/topquote.png" />
        </div>
        <!--top quote-->

        <!--left testimonial-->
        <div class="grid_6 lefttestimonials">
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse ut neque nulla. Nulla aliquam dictum arcu.
          </h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse ut neque nulla. Nulla aliquam dictum arcu, eget
            bibendum diam dapibus a. Maecenas lectus felis, pharetra sit amet
            dictum quis, semper eu nibh. Praesent placerat massa ut justo
            gravida placerat. Phasellus. Praesent placerat massa ut justo
            gravida placerat semper eu nibh.
          </p>
          <!--you can edit-->
        </div>
        <!--end left testimonial-->

        <!--right testimonial-->
        <div class="grid_6 righttestimonials">
          <h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse ut neque nulla. Nulla aliquam dictum arcu.
          </h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse ut neque nulla. Nulla aliquam dictum arcu, eget
            bibendum diam dapibus a. Maecenas lectus felis, pharetra sit amet
            dictum quis, semper eu nibh. Praesent placerat massa ut justo
            gravida placerat. Phasellus. Praesent placerat massa ut justo
            gravida placerat semper eu nibh.
          </p>
          <!--you can edit-->
        </div>
        <!--right testimonial-->

        <!--bottom quote-->
        <div class="grid_12 bottomquote">
          <img alt="" src="./Public/img/section-testimonials/bottomquote.png" />
        </div>
        <!--bottom quote-->
      </div>
      <!--end container-->
    </div>
    <!--end dark filter-->
  </section>
  <!--end testimonials--><!--start portfolio-->
  <section id="sectionportfolio">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#testimonials"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/topportfolio.png" /></a>
        <a href="#sectionprices"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomportfolio.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>My Works</h1>
      </div>
      <!--end title section-->

      <!--start options-->

      <div class="grid_12">
        <div id="options" class="clear">
          <ul id="filters" class="option-set clearfix" data-option-key="filter">

            <li class="orange">
              <a href="#filter" data-option-value="*  " class="selected">Show all</a>
            </li>
            <!-- Category SQL -->
            <?php
            $query_categories = "SELECT * FROM Category WHERE deleted = 0";
            $result_categories = mysqli_query($conn, $query_categories);
            if (mysqli_num_rows($result_categories) > 0) {
              while ($category = mysqli_fetch_assoc($result_categories)) {
            ?>

                <!-- Category SQL -->
                <li class="yellow">
                  <a href="#filter" data-option-value=".<?php echo str_replace(' ', '', $category['name']) ?>"><?php echo $category['name'] ?></a>
                </li>
            <?php
              }
            } else {
              echo "No categories found.";
            }
            ?>
          </ul>
        </div>
      </div>
      <!--end options-->

      <!--start images-->
      <div id="containerisotope" class="clear">
        <!-- Get product SQL -->
        <?php
        $products_per_page = 30;

        $current_page =  1;

        // Tính vị trí bắt đầu của sản phẩm trong CSDL
        $start_index = ($current_page - 1) * $products_per_page;

        // Truy vấn lấy thông tin sản phẩm với số lượng giới hạn và vị trí bắt đầu
        $query_products = "SELECT p.id, p.title, p.price, p.thumbnail, c.name AS category_name
               FROM Product p
               JOIN Category c ON p.category_id = c.id
               WHERE p.deleted = 0
               LIMIT $start_index, $products_per_page";

        $result_products = mysqli_query($conn, $query_products);
        if (mysqli_num_rows($result_products) > 0) {
          while ($row = mysqli_fetch_assoc($result_products)) {
        ?>
            <!-- Get product SQL -->

            <!--element-->
            <div style="min-height: 420px; border: 1px solid #eaeaea;" class="element <?php echo str_replace(' ', '', $row['category_name']) ?> " data-category="<?php echo str_replace(' ', '', $row['category_name']) ?>">

              <a data-rel="prettyPhoto[]" href="<?php echo $row['thumbnail'] ?>">
                <img style="margin-top: 0;" alt="" class="imgwork" src="<?php echo $row['thumbnail'] ?>" />
              </a>
              <a href="Pages/Detail/detail.php?product_id=<?php echo $row['id']; ?>">
                <h2 style="font-family: 'Lobster Two', cursive; font-size: 18px; text-align: start; margin-left: 10px; min-height: 50px;"><?php echo $row['title'] ?></h2>
                <p style="font-family: 'Lobster Two', cursive; border: none; color: #7d7d7d; font-weight: bold; margin-left: 10px;"><?php echo number_format($row['price']) ?>đ</p>

              </a>
              <form method="post" id="addToCartForm">
                <input type="hidden" name="product_id" value="<?php echo $row['id'] ?>">
                <input type="hidden" name="product_title" value="<?php echo $row['title'] ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['price'] ?>">
                <input type="hidden" name="product_thumbnail" value="<?php echo $row['thumbnail'] ?>">
                <input type="hidden" name="product_quantity" value="1">
                <button type="submit" name="add_to_cart" class="btn-cart">
                  <svg class="icon-cart" viewBox="0 0 24.38 30.52" height="30.52" width="24.38" xmlns="http://www.w3.org/2000/svg">
                    <title>Thêm vào giỏ hàng</title>
                    <path transform="translate(-3.62 -0.85)" d="M28,27.3,26.24,7.51a.75.75,0,0,0-.76-.69h-3.7a6,6,0,0,0-12,0H6.13a.76.76,0,0,0-.76.69L3.62,27.3v.07a4.29,4.29,0,0,0,4.52,4H23.48a4.29,4.29,0,0,0,4.52-4ZM15.81,2.37a4.47,4.47,0,0,1,4.46,4.45H11.35a4.47,4.47,0,0,1,4.46-4.45Zm7.67,27.48H8.13a2.79,2.79,0,0,1-3-2.45L6.83,8.34h3V11a.76.76,0,0,0,1.52,0V8.34h8.92V11a.76.76,0,0,0,1.52,0V8.34h3L26.48,27.4a2.79,2.79,0,0,1-3,2.44Zm0,0"></path>
                  </svg>
                </button>
              </form>
            </div>

            <!--element-->
        <?php
          }
        } else {
          echo "No products found.";
          $has_next_page = false;
        }
        ?>

      </div>

    </div>
    <!--end container-->
  </section>
  <!--end portfolio--><!--start prices-->
  <section id="sectionprices">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#sectionportfolio"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/topprices.png" /></a>
        <a href="#sectionteam"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomprices.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>Our Prices</h1>
      </div>
      <!--end title section-->

      <!--price-->
      <div class="grid_3 expand">
        <div class="logoprice">
          <img width="176" class="rotate" alt="" src="./Public/img/section-prices/price1.png" />
          <!--you can edit the image, open the psd file for the vector image format-->
        </div>
        <div class="ribbon">
          <h2>$ 200,00 - <span>Lorem Ipsum</span></h2>
          <!--you can edit-->
        </div>
        <div class="price">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <!--you can edit-->
          <ul>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <!--you can edit-->
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <!--you can edit-->
            <li>
              <p class="noborder">Lorem ipsum dolor sit amet consec</p>
            </li>
            <!--you can edit-->
          </ul>
          <p class="btn red"><a href="#">Cupcakes</a></p>
          <!--you can edit-->
        </div>
        <div class="triangle"></div>
      </div>
      <!--price-->

      <!--price-->
      <div class="grid_3 expand">
        <div class="logoprice">
          <img width="176" class="rotate" alt="" src="./Public/img/section-prices/price2.png" />
        </div>
        <div class="ribbon">
          <h2>$ 200,00 - <span>Lorem Ipsum</span></h2>
        </div>
        <div class="price">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <ul>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p class="noborder">Lorem ipsum dolor sit amet consec</p>
            </li>
          </ul>
          <p class="btn blue"><a href="#">Ice cream</a></p>
        </div>
        <div class="triangle"></div>
      </div>
      <!--price-->

      <!--price-->
      <div class="grid_3 expand">
        <div class="logoprice">
          <img width="176" class="rotate" alt="" src="./Public/img/section-prices/price3.png" />
        </div>
        <div class="ribbon">
          <h2>$ 200,00 - <span>Lorem Ipsum</span></h2>
        </div>
        <div class="price">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <ul>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p class="noborder">Lorem ipsum dolor sit amet consec</p>
            </li>
          </ul>
          <p class="btn yellow"><a href="#">Cookies</a></p>
        </div>
        <div class="triangle"></div>
      </div>
      <!--price-->

      <!--price-->
      <div class="grid_3 expand">
        <div class="logoprice">
          <img width="176" class="rotate" alt="" src="./Public/img/section-prices/price4.png" />
        </div>
        <div class="ribbon">
          <h2>$ 200,00 - <span>Lorem Ipsum</span></h2>
        </div>
        <div class="price">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <ul>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet consec</p>
            </li>
            <li>
              <p class="noborder">Lorem ipsum dolor sit amet consec</p>
            </li>
          </ul>
          <p class="btn green"><a href="#">Croissant</a></p>
        </div>
        <div class="triangle"></div>
      </div>
      <!--price-->
    </div>
    <!--end container-->
  </section>
  <!--end prices--><!--start team-->
  <section id="sectionteam">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#sectionprices"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/topteam.png" /></a>
        <a href="#sectionskills"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomteam.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>Our Team</h1>
      </div>
      <!--end title section-->

      <!--start team-->
      <div class="grid_3">
        <div class="avatar">
          <img width="250" class="opacity" alt="" src="./Public/img/section-team/team1.png" />
          <!--you can edit the image, open the psd file for copy the rounded filter-->
        </div>
        <div class="team">
          <div class="bordertopteam"></div>
          <h2>Jane Mc Doe</h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            iaculis tortor sit amet quam malesuada porta. Duis lorem leo,
            commodo et molestie sit amet.
          </p>
          <!--you can edit-->
        </div>
        <div class="socialteam">
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/twittericon.png" /></a>
          <!--you can edit image and insert the link-->
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/instagramicon.png" /></a>
          <!--you can edit image and insert the link-->
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/youtubeicon.png" /></a>
          <!--you can edit image and insert the link-->
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/dribbleicon.png" /></a>
          <!--you can edit image and insert the link-->
        </div>
      </div>
      <!--end team-->

      <!--start team-->
      <div class="grid_3">
        <div class="avatar">
          <img width="250" class="opacity" alt="" src="./Public/img/section-team/team2.png" />
        </div>
        <div class="team">
          <div class="bordertopteam"></div>
          <h2>Mark Spitch</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            iaculis tortor sit amet quam malesuada porta. Duis lorem leo,
            commodo et molestie sit amet.
          </p>
        </div>
        <div class="socialteam">
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/twittericon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/instagramicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/tumblricon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/behanceicon.png" /></a>
        </div>
      </div>
      <!--end team-->

      <!--start team-->
      <div class="grid_3">
        <div class="avatar">
          <img width="250" class="opacity" alt="" src="./Public/img/section-team/team3.png" />
        </div>
        <div class="team">
          <div class="bordertopteam"></div>
          <h2>Juliette Light</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            iaculis tortor sit amet quam malesuada porta. Duis lorem leo,
            commodo et molestie sit amet.
          </p>
        </div>
        <div class="socialteam">
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/vineicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/instagramicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/behanceicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/foursquareicon.png" /></a>
        </div>
      </div>
      <!--end team-->

      <!--start team-->
      <div class="grid_3">
        <div class="avatar">
          <img width="250" class="opacity" alt="" src="./Public/img/section-team/team4.png" />
        </div>
        <div class="team">
          <div class="bordertopteam"></div>
          <h2>Nick Hope</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            iaculis tortor sit amet quam malesuada porta. Duis lorem leo,
            commodo et molestie sit amet.
          </p>
        </div>
        <div class="socialteam">
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/youtubeicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/instagramicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/behanceicon.png" /></a>
          <a href="#"><img width="56" class="rotate" alt="" src="./Public/img/section-team/dribbleicon.png" /></a>
        </div>
      </div>
      <!--end team-->
    </div>
    <!--end container-->
  </section>
  <!--end team--><!--start skills-->
  <section id="sectionskills">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#sectionteam"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/topskills.png" /></a>
        <a href="#oursocial"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomskills.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>Our Skills</h1>
      </div>
      <!--end title section-->

      <!--start left content-->
      <div class="grid_5">
        <!--skill-->
        <div class="skilldescription">
          <div id="operator"></div>
          <img width="100" alt="" src="./Public/img/section-skills/icon1.png" />
          <!--you can edit the image, open the psd file for the vector image format-->
          <h2>Creative Cake Design</h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
            ante quam, volutpat eu gravida sit amet, vestibulum sed turpis.
            Etiam vel enim vel leo
          </p>
          <!--you can edit-->
        </div>
        <!--skill-->

        <!--skill-->
        <div class="skilldescription">
          <img width="100" alt="" src="./Public/img/section-skills/icon2.png" />
          <!--you can edit the image, open the psd file for the vector image format-->
          <h2>Lorem Ipsum Dolor Sit</h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
            ante quam, volutpat eu gravida sit amet, vestibulum sed turpis.
            Etiam vel enim vel leo
          </p>
          <!--you can edit-->
        </div>
        <!--skill-->

        <!--skill-->
        <div class="skilldescription">
          <img width="100" alt="" src="./Public/img/section-skills/icon3.png" />
          <!--you can edit the image, open the psd file for the vector image format-->
          <h2>Creative Cake Design</h2>
          <!--you can edit-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
            ante quam, volutpat eu gravida sit amet, vestibulum sed turpis.
            Etiam vel enim vel leo
          </p>
          <!--you can edit-->
        </div>
        <!--skill-->
      </div>
      <!--end left content-->

      <!--start clip-->
      <div class="grid_2 clip">
        <img class="opacity" alt="" src="./Public/img/section-skills/clip.png" />
      </div>
      <!--end clip-->

      <div class="grid_5">
        <div id="allprogresbar">
          <!--progresbar-->
          <div class="progresbar">
            <p>LOREM IPSUM DOLOR SIT</p>
            <!--you can edit-->
            <p class="numberbar">60</p>
            <!--you can edit-->
            <div><span class="onebar"></span></div>
            <!--edit the respective css class in style.css -->
          </div>
          <!--progresbar-->

          <!--progresbar-->
          <div class="progresbar">
            <p>LOREM IPSUM DOLOR SIT</p>
            <!--you can edit-->
            <p class="numberbar">83</p>
            <!--you can edit-->
            <div><span class="secondbar"></span></div>
            <!--edit the respective css class in style.css -->
          </div>
          <!--progresbar-->

          <!--progresbar-->
          <div class="progresbar">
            <p>LOREM IPSUM DOLOR SIT</p>
            <!--you can edit-->
            <p class="numberbar">40</p>
            <!--you can edit-->
            <div><span class="thirdbar"></span></div>
            <!--edit the respective css class in style.css -->
          </div>
          <!--progresbar-->

          <!--progresbar-->
          <div class="progresbar">
            <p>LOREM IPSUM DOLOR SIT</p>
            <!--you can edit-->
            <p class="numberbar">72</p>
            <!--you can edit-->
            <div><span class="fourthbar"></span></div>
            <!--edit the respective css class in style.css -->
          </div>
          <!--progresbar-->

          <!--progresbar-->
          <div class="progresbar">
            <p>LOREM IPSUM DOLOR SIT</p>
            <!--you can edit-->
            <p class="numberbar">93</p>
            <!--you can edit-->
            <div><span class="fivebar"></span></div>
            <!--edit the respective css class in style.css -->
          </div>
          <!--progresbar-->
        </div>
      </div>
    </div>
    <!--end container-->
  </section>
  <!--end skills--><!--start oursocial-->
  <section id="oursocial">
    <!--start anchors-->
    <div class="anchors">
      <div class="contanchors">
        <a href="#sectionskills"><img width="45" class="anchortop" alt="" src="./Public/img/anchors/topsocial.png" /></a>
        <a href="#contacts"><img width="45" class="anchorbottom" alt="" src="./Public/img/anchors/bottomsocial.png" /></a>
      </div>
    </div>
    <!--end anchors-->

    <!--start container-->
    <div class="container clearfix">
      <!--start titlesection-->
      <div class="grid_12 titlesection">
        <h1>Follow Us</h1>
      </div>
      <!--end title section-->

      <!--start social icons-->
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/facebook.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/twitter.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/googleplus.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/flickr.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/instagram.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <div class="grid_2">
        <a href="#">
          <img width="140" class="rotate" alt="" src="./Public/img/section-oursocial/vimeo.png" />
          <!--you can edit image and insert the link-->
        </a>
      </div>
      <!--end social icons-->
    </div>
    <!--end container-->
  </section>
  <!--end oursocial--><!--start contacts-->
  <footer id="contacts">
    <div class="topwaves"></div>
    <!--waves-->

    <!--anchor back to top-->
    <a class="backtotop" href="#navigationmenu">
      <img width="45" alt="" src="./Public/img/anchors/backtotop.png" />
    </a>
    <!--end anchor back to top-->

    <!--all markers-->
    <div id="markers">
      <!--big marker-->
      <div id="bigmarker">
        <h2>Sweet Cake</h2>
        <ul>
          <li>
            <p class="iconhome">Mỹ Đình - Hà Nội</p>
            <!--insert your address-->
          </li>
          <li>
            <p class="iconphone">Telephone: 0963421043</p>
            <!--insert your telephone number-->
          </li>
          <li>
            <p class="iconphone">FB: www.facebook.com/huutienxt</p>
            <!--insert your fax number-->
          </li>
          <li>
            <p class="iconmail noborder">
              Mail:
              <a title="Contact Me ♥" href="mailto:tienbhph15160@fpt.edu.vn">tienbhph15160@fpt.edu.vn</a>

            </p>
          </li>
        </ul>
      </div>
      <!--end big marker-->

      <!--little marker-->
      <div id="littlemarker" class="rotate">
        <img alt="" src="./Public/img/section-contact/littlemarker.png" />
      </div>
      <!--end little marker-->

      <!--little marker close: need for js effect-->
      <div id="littlemarkerclose" class="rotate">
        <img alt="" src="./Public/img/section-contact/littlemarkerclose.png" />
      </div>
      <!--end little marker-->
    </div>
    <!--end all markers-->

    <!--google maps-->
    <!-- <div id="map-canvas"></div> -->
    <!--google maps-->
  </footer>
  <!--end contacts-->

  <div class="sectioncopyright">
    <p>Copyright</p>
  </div>


  <!-- Start php -->
  <?php
  // Kiểm tra nếu người dùng click vào nút "Thêm vào giỏ hàng"
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin sản phẩm từ form (hoặc từ CSDL nếu bạn lưu thông tin sản phẩm trong CSDL)
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_thumbnail = $_POST['product_thumbnail'];
    $product_quantity = $_POST['product_quantity'];
    if (!isset($_SESSION['user_id'])) {
      // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập và lưu trang sản phẩm vào session để chuyển hướng lại sau khi đăng nhập thành công
      $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
      header('Location: login.php');
      exit;
    }
    // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa, nếu chưa thì tạo mới
    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    $product_exists = false;
    foreach ($_SESSION['cart'] as $key => $item) {
      if ($item['id'] == $product_id) {
        // Sản phẩm đã có trong giỏ hàng, tăng số lượng lên 1
        $_SESSION['cart'][$key]['quantity'] += $product_quantity;
        $product_exists = true;
        break;
      }
    }

    // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm vào giỏ hàng
    if (!$product_exists) {
      $_SESSION['cart'][] = array(
        'id' => $product_id,
        'title' => $product_title,
        'price' => $product_price,
        'thumbnail' => $product_thumbnail,
        'quantity' => $product_quantity
      );
    }

    // Chuyển hướng trở lại trang danh sách sản phẩm sau khi thêm vào giỏ hàng
    header('Location: index.php#sectionportfolio');
    exit;
  }
  ?>


  <!-- Script add cart -->
  <!-- <script>
    // Bắt sự kiện click vào nút "Thêm vào giỏ hàng"
    document.getElementById('addToCartButton').addEventListener('click', function() {
      // Kiểm tra xem người dùng đã đăng nhập chưa
      if (!<?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập và lưu trang sản phẩm vào session để chuyển hướng lại sau khi đăng nhập thành công
        window.location.href = 'login.php';
      } else {
        // Người dùng đã đăng nhập, tiếp tục thêm sản phẩm vào giỏ hàng
        // Lấy thông tin sản phẩm từ form
        var formData = new FormData(document.getElementById('addToCartForm'));

        // Gửi yêu cầu Ajax đến trang xử lý thêm vào giỏ hàng
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_to_cart.php', true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              // Xử lý kết quả trả về nếu cần thiết
              console.log(xhr.responseText);
            } else {
              // Xử lý lỗi nếu có
              console.error('Đã xảy ra lỗi: ' + xhr.status);
            }
          }
        };
        xhr.send(formData);
      }
    });
  </script> -->
  <!-- Script add cart -->


  <!--Start js-->
  <script src="./ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="./ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!--Jquery-->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
  <!-- Google Map API -->
  <script src="./Public/js/jquery.isotope.min.js"></script>
  <!--isotope-->
  <script src="./Public/slide/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
  <!--revolution slider-->
  <script src="./Public/slide/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <!--revolution slider-->
  <script src="./Public/js/jquery.prettyPhoto.js"></script>
  <!--pretty photo-->
  <script src="./Public/js/scroolto.js"></script>
  <!--Scrool To-->
  <script src="./Public/js/settings.js"></script>
  <!-- icon box icon -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <!--My settings-->
  <!--End js-->



</body>

</html>