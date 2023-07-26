<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:51 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>eBazer - Tailwind CSS eCommerce Admin Template</title>
  <link rel="shortcut icon" href="assets/img/logo/favicon.png" type="image/x-icon" />

  <!-- css links -->
  <link rel="stylesheet" href="assets/css/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/css/choices.css" />
  <link rel="stylesheet" href="assets/css/apexcharts.css" />
  <link rel="stylesheet" href="assets/css/quill.css" />
  <link rel="stylesheet" href="assets/css/rangeslider.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <div class="tp-main-wrapper bg-slate-100 h-screen" x-data="{ sideMenu: false }">
    <?php
    include '../Template/sideMenu.php'
    ?>

    <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"></div>

    <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]" x-data="{ searchOverlay: false }">
      <?php
      // include '../Template/header_admin.php'
      ?>

      <div class="body-content px-8 py-8 bg-slate-100">
        <!-- Lấy dữ liệu từ database nè -->
        <?php
        // Kiểm tra xem có tham số "order_id" được truyền qua URL hay không
        if (isset($_GET['order_id'])) {
          $order_id = $_GET['order_id'];

          // Lấy thông tin đơn hàng từ bảng "Orders"
          $order_sql = "SELECT * FROM Orders WHERE id = '$order_id'";
          $order_result = mysqli_query($conn, $order_sql);
          $order_row = mysqli_fetch_assoc($order_result);

          // Lấy thông tin khách hàng từ bảng "User" dựa vào user_id trong đơn hàng
          $user_id = $order_row['user_id'];
          $user_sql = "SELECT * FROM User WHERE id = '$user_id'";
          $user_result = mysqli_query($conn, $user_sql);
          $user_row = mysqli_fetch_assoc($user_result);

          // Lấy thông tin sản phẩm đã mua từ bảng "Order_Details"
          $sql = "SELECT o.*, u.fullname AS customer_name
          FROM Orders o
          INNER JOIN User u ON o.user_id = u.id
          WHERE o.id = '$order_id'";

          $result = mysqli_query($conn, $sql);

          // Hiển thị thông tin đơn hàng, thông tin khách hàng và thông tin sản phẩm đã mua
          // ở đây bằng cách sử dụng dữ liệu từ $order_row, $user_row và $order_detail_result
        } else {
          // Nếu không có tham số "order_id", chuyển hướng người dùng về trang danh sách đơn hàng
          header("Location: order_list.php");
          exit();
        }
        ?>
        <div class="flex justify-between mb-10">
          <div class="page-title">
            <h3 class="mb-0 text-[28px]">Order Details</h3>
            <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
              <li class="breadcrumb-item text-muted">
                <a href="product-list.html" class="text-hover-primary">
                  Home</a>
              </li>
              <li class="breadcrumb-item flex items-center">
                <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
              </li>
              <li class="breadcrumb-item text-muted">
                Order Details
              </li>
            </ul>
          </div>
        </div>

        <!-- table -->
        <div class="">
          <div class="flex items-center flex-wrap justify-between px-8 mb-6 bg-white rounded-t-md rounded-b-md shadow-xs py-6">
            <div class="relative">
              <h5 class="font-normal mb-0">Oder ID : #<?php echo $order_row['id'] ?></h5>
              <p class="mb-0 text-tiny">
                Order Created : <?php echo $order_row['order_date'] ?>
              </p>
            </div>
            <div class="flex sm:justify-end flex-wrap sm:space-x-6 mt-5 md:mt-0">
              <div class="search-select mr-3 flex items-center space-x-3">
                <span class="text-tiny inline-block leading-none -translate-y-[2px]">Change Status :
                </span>
                <select>
                  <option>Delivered</option>
                  <option>Pending</option>
                  <option>Refunded</option>
                  <option>Denied</option>
                </select>
              </div>
              <div class="product-add-btn flex">
                <a href="#" class="tp-btn">Save</a>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-t-md rounded-b-md shadow-xs px-8 py-8">
              <h5>Customer Details</h5>

              <div class="relative overflow-x-auto">
                <table class="w-[400px] sm:w-full text-base text-left text-gray-500">
                  <tbody>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Name
                      </td>
                      <td class="py-3 whitespace-nowrap">
                        <a href="#" class="flex items-center justify-end space-x-5 text-end text-heading text-hover-primary">
                          <img class="w-10 h-10 rounded-full" src="assets/img/users/user-8.jpg" alt="" />
                          <span class="font-medium"><?php echo $user_row['fullname'] ?></span>
                        </a>
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Email
                      </td>
                      <td class="py-3 text-end">
                        <a href="mailto:support@mail.com"><?php echo $user_row['email'] ?></a>
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Phone
                      </td>
                      <td class="py-3 text-end">
                        <a href="tel:9458785014"><?php echo $user_row['phone_number'] ?></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="bg-white rounded-t-md rounded-b-md shadow-xs px-8 py-8">
              <h5>Order Summary</h5>

              <div class="relative overflow-x-auto">
                <table class="w-[400px] sm:w-full text-base text-left text-gray-500">
                  <tbody>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Order Date
                      </td>
                      <td class="py-3 whitespace-nowrap text-end">
                        <?php echo $order_row['order_date'] ?>
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Payment Method
                      </td>
                      <td class="py-3 text-end">
                        Payment on delivery
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[50%]">
                        Shipping Method
                      </td>
                      <td class="py-3 text-end">Cash On Delivery</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="bg-white rounded-t-md rounded-b-md shadow-xs px-8 py-8">
              <h5>Deliver To</h5>

              <div class="relative overflow-x-auto">
                <table class="w-[400px] sm:w-full text-base text-left text-gray-500">
                  <tbody>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[40%]">
                        Customer's address
                      </td>
                      <td class="py-3 text-end">
                        <?php echo $user_row['address'] ?>
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[40%]">
                        Delivery address
                      </td>
                      <td class="py-3 whitespace-nowrap text-end">
                        <?php echo $order_row['address'] ?>
                      </td>
                    </tr>
                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                      <td class="py-3 font-normal text-[#55585B] w-[40%]">
                        State
                      </td>
                      <td class="py-3 text-end"><?php echo $order_row['status'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-8">
              <div class="bg-white rounded-t-md rounded-b-md shadow-xs py-8">
                <div class="relative overflow-x-auto mx-8">
                  <table class="w-[975px] md:w-full text-base text-left text-gray-500">
                    <thead class="bg-white">
                      <tr class="border-b border-gray6 text-tiny">
                        <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                          Product
                        </th>
                        <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                          Unit Price
                        </th>
                        <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                          Quantity
                        </th>
                        <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                          Total
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                        <td class="pr-8 py-5 whitespace-nowrap">
                          <a href="#" class="flex items-center space-x-5">
                            <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-1.jpg" alt="" />
                            <span class="font-medium text-heading text-hover-primary transition">Whitetails Women's Open
                              Sky</span>
                          </a>
                        </td>
                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                          $171.00
                        </td>
                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                          37
                        </td>
                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                          $1200.33
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-span-12 2xl:col-span-4">
              <div class="bg-white rounded-t-md rounded-b-md shadow-xs py-8 px-8">
                <h5>Order Price</h5>
                <div class="relative overflow-x-auto">
                  <table class="w-full text-base text-left text-gray-500">
                    <tbody>
                      <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                        <td class="pr-3 py-3 pt-6 font-normal text-[#55585B] text-start">
                          Subtotal
                        </td>
                        <td class="px-3 py-3 pt-6 font-normal text-[#55585B] text-end">
                          $1237.00
                        </td>
                      </tr>
                      <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                        <td class="pr-3 py-3 font-normal text-[#55585B] text-start">
                          Shipping cost:
                        </td>
                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                          $49.55
                        </td>
                      </tr>
                      <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                        <td class="pr-3 py-3 font-normal text-[#55585B] text-start">
                          Grand total:
                        </td>
                        <td class="px-3 py-3 text-[#55585B] text-end text-lg font-semibold">
                          $1310.55
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/alpine.js"></script>
  <script src="assets/js/perfect-scrollbar.js"></script>
  <script src="assets/js/choices.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/apexchart.js"></script>
  <script src="assets/js/quill.js"></script>
  <script src="assets/js/rangeslider.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/order-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:51 GMT -->

</html>