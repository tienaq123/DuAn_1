<?php session_start();
?>
<?php require_once(__DIR__ . "/../../database/config.php")
?>
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8" />

  <title>Sweet Cake Detail</title>
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
  <link rel="stylesheet" href="css/detail.css" />

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
    .demo-blog .count-cart {
      top: 90px;
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
        <span><a href="/Duan1">Trang chủ
          </a></span>
        <span style="margin: 0 5px"> / </span> <span> Chi tiết</span>
      </div>

      <div class="container-item">
        <?php  // Lấy thông tin sản phẩm từ cơ sở dữ liệu dựa vào id của sản phẩm
        if (isset($_GET['product_id'])) {
          $productId = $_GET['product_id'];
          // Thực hiện câu truy vấn SELECT để lấy thông tin sản phẩm
          $query_product = "SELECT p.id, p.title, p.price, p.old_price, p.description, p.thumbnail, p.category_id, c.name AS category_name
                              FROM Product p
                              JOIN Category c ON p.category_id = c.id
                              WHERE p.deleted = 0 AND p.id = $productId";

          $result_product = mysqli_query($conn, $query_product);

          if (mysqli_num_rows($result_product) > 0) {
            // Lấy thông tin sản phẩm từ kết quả truy vấn
            $product = mysqli_fetch_assoc($result_product); ?>
            <div class="img">
              <div class="big_img">
                <img style="width: 90%; height: 100%;" src="<?php echo $product['thumbnail']; ?>" alt="" />
              </div>
              <div class="small_img">
                <img src="<?php echo $product['thumbnail']; ?>" alt="" />
                <img src="<?php echo $product['thumbnail']; ?>" alt="" />
                <img src="<?php echo $product['thumbnail']; ?>" alt="" />
                <img src="<?php echo $product['thumbnail']; ?>" alt="" />
              </div>
            </div>
            <div class="detail">
              <div>
                <h2><?php echo $product['title']; ?></h2>

                <div class="rating">
                  <i class="bx bxs-star"><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i></i>
                  <span style="color: #787878; margin-left: 5px">(Xem 2942 đánh giá) | Đã bán 1000+</span>
                </div>
                <!--  -->
                <div class="price_detail">
                  <span class="new_price"> <?php echo number_format($product['price']); ?> ₫ </span>
                  <span style="
                    font-size: 18px;
                    text-decoration: line-through;
                    color: red;
                  "><?php echo number_format($product['old_price']); ?> ₫</span>
                </div>
              </div>

              <div class="quantity">
                <p style="
                  font-family: 'Times New Roman', Times, serif;
                  margin-bottom: 5px;
                ">
                  Số lượng
                </p>
                <div style="display: flex">
                  <button style="width: 30px; height: 30px; border: none">
                    -
                  </button>
                  <input style="
                    width: 30px;
                    font-size: 14px;
                    text-align: center;
                    border: none;
                  " type="number" class="no-spinners" placeholder="1" />
                  <button style="width: 30px; height: 30px; border: none">
                    +
                  </button>
                </div>
              </div>
              <div class="btn_buy">
                <a href="#"><button class="buy">Thêm vào giỏ hàng</button></a>
                <a href="#"><button class="buy">Mua ngay</button></a>
              </div>
            </div>
      </div>
      <!-- End detail -->

      <!-- Description -->
      <div class="desc">
        <h2>Mô tả</h2>
        <p>
          <?php echo $product['description']; ?>
          <br /><br />
          <strong>Hình ảnh sản phẩm:</strong> <br />
          <img style="width: 35%;" src="<?php echo $product['thumbnail']; ?>" alt="" />
          <img style="width: 35%;" src="<?php echo $product['thumbnail']; ?>" alt="" />
          <img style="width: 35%;" src="<?php echo $product['thumbnail']; ?>" alt="" />
          <img style="width: 35%;" src="<?php echo $product['thumbnail']; ?>" alt="" />
        </p>
      </div>

      <!-- related products -->
      <div class="related">
        <h2>Sản phẩm liên quan</h2>
        <div class="related-box">
          <?php
            $category = $product['category_id'];
            $query_product = "SELECT * FROM Product WHERE category_id = $category";
            $result_product = mysqli_query($conn, $query_product);
            if (mysqli_num_rows($result_product) > 0) {
              while ($row = mysqli_fetch_assoc($result_product)) {
          ?>

              <!-- product box -->
              <div style="min-height: 420px; border: 1px solid #eaeaea; margin: 10px;" class="">
                <a href="/Duan1/Pages/Detail/detail.php?product_id=<?php echo $row['id']; ?>">
                  <img style="margin-top: 0; width: 278px; height: 278px;" alt="" class="imgwork" src="<?php echo $row['thumbnail'] ?>" />
                </a>
                <a href="abcc">
                  <h2 style="font-family: 'Lobster Two', cursive; font-size: 18px; text-align: start; margin-left: 10px; min-height: 50px;"><?php echo $row['title'] ?></h2>
                  <p style="font-family: 'Lobster Two', cursive; border: none; color: #7d7d7d; font-weight: bold; margin-left: 10px;"><?php echo number_format($row['price']) ?>đ</p>
                </a>

              </div>
          <?php
              }
            } else {
              echo "No categories found.";
            }
          ?>

        </div>
      </div>
    </div>
  </main>
  <!-- End main -->
<?php
          } else {
            // Không tìm thấy sản phẩm
            echo "Sản phẩm không tồn tại.";
          }
        } else {
          // Không có id sản phẩm được cung cấp
          echo "Không tìm thấy sản phẩm.";
        }
?>

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

</html>