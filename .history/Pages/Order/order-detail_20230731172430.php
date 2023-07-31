<?php session_start();
?>
<?php ob_start(); ?>
<?php require_once(__DIR__ . "/../../database/config.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN Cake</title>
    <link rel="shortcut icon" href="./../Public/img/favicon/favicon.ico" type="image/x-icon" />

    <!-- css links -->
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
    <link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />

    <!--END CSS-->

    <!--FAVICONS-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
    <link rel="stylesheet" href="../../Admin/assets/css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/choices.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/apexcharts.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/quill.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/rangeslider.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/custom.css" />
    <link rel="stylesheet" href="../../Admin/assets/css/main.css" />
</head>
<style>
    #all {
        display: flex;
        flex-direction: column;
    }
</style>

<body>
    <div id="all">
        <?php
        include '../../Template/header.php'
        ?>

        <div style="padding: 50px 100px;" class="body-content px-8 py-8 bg-slate-100">
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
                //$order_row, $user_row và $order_detail_result
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
                    <form action="" method="post">
                        <div class="flex sm:justify-end flex-wrap sm:space-x-6 mt-5 md:mt-0">

                            <div class="search-select mr-3 flex items-center space-x-3">
                                <span class="text-tiny inline-block leading-none -translate-y-[2px]">Change Status :</span>
                                <select name="order_status">
                                    <option value="<?php echo $order_row['status'] ?>" selected><?php echo $order_row['status'] ?></option>
                                    <option value="Pending">Pending</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Delivery">Delivery</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Order canceled">Order canceled</option>
                                </select>
                            </div>
                            <input type="hidden" name="order_id" value="<?php echo $order_row['id'] ?>">
                            <div class="product-add-btn flex">
                                <button type="submit" class="tp-btn">Save</button>
                            </div>
                        </div>
                    </form>
                    <!-- Xử lí trạng thái đơn hàng -->
                    <?php
                    // Kiểm tra nếu yêu cầu là POST và chứa dữ liệu order_status và order_id
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_status']) && isset($_POST['order_id'])) {
                        $status = $_POST['order_status'];
                        $order_id = $_POST['order_id'];

                        // Sử dụng truy vấn UPDATE để cập nhật cột status
                        $sql = "UPDATE Orders SET status = '$status' WHERE id = '$order_id'";

                        if (mysqli_query($conn, $sql)) {
                            // Nếu cập nhật thành công, chuyển hướng về trang chi tiết đơn hàng
                            header("Location: order-detail.php?order_id=$order_id");
                            exit();
                        } else {
                            // Nếu có lỗi xảy ra trong quá trình cập nhật, hiển thị thông báo lỗi
                            echo "Lỗi: " . mysqli_error($conn);
                        }

                        // Đóng kết nối
                        mysqli_close($conn);
                    }
                    ?>
                    <!-- END xử lí trạng thái đơn hàng -->

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
                                                <span class="font-medium"><?php echo $order_row['fullname'] ?></span>
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

                                    <!-- Hiển thị sản phẩm trong đơn hàng -->
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        $order = mysqli_fetch_assoc($result);
                                        // Truy vấn để lấy danh sách sản phẩm trong đơn hàng
                                        $sql_products = "SELECT p.*, od.price AS product_price, od.quantity AS product_quantity
                                      FROM Order_Details od
                                      INNER JOIN Product p ON od.product_id = p.id
                                      WHERE od.order_id = '$order_id'";

                                        $result_products = mysqli_query($conn, $sql_products);

                                        // Kiểm tra xem có sản phẩm trong đơn hàng không
                                        if (mysqli_num_rows($result_products) > 0) {

                                            while ($product = mysqli_fetch_assoc($result_products)) {
                                    ?>
                                                <!--END hiển thị sản phẩm trong đơn hàng -->



                                                <tbody>
                                                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                                                        <td class="pr-8 py-5 whitespace-nowrap">
                                                            <a href="#" class="flex items-center space-x-5">
                                                                <img class="w-[40px] h-[40px] rounded-md" src="<?php echo $product['thumbnail'] ?>" alt="" />
                                                                <span class="font-medium text-heading text-hover-primary transition"><?php echo $product['title'] ?></span>
                                                            </a>
                                                        </td>
                                                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                                                            <?php echo number_format($product['product_price']) ?>đ
                                                        </td>
                                                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                                                            <?php echo $product['product_quantity'] ?>
                                                        </td>
                                                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                                                            <?php echo number_format($product['product_quantity'] *  $product['product_price']); ?>đ
                                                        </td>
                                                    </tr>
                                                </tbody>

                                    <?php
                                            }
                                            echo '</table>';
                                        } else {
                                            echo '<p>Không có sản phẩm trong đơn hàng.</p>';
                                        }
                                    } else {
                                        echo '<p>Không tìm thấy đơn hàng.</p>';
                                    }

                                    // Đóng kết nối
                                    mysqli_close($conn);
                                    ?>
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
                                                <?php echo number_format($order_row['total_money']) ?>đ
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                                            <td class="pr-3 py-3 font-normal text-[#55585B] text-start">
                                                Shipping cost:
                                            </td>
                                            <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                                                0đ
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                                            <td class="pr-3 py-3 font-normal text-[#55585B] text-start">
                                                Grand total:
                                            </td>
                                            <td class="px-3 py-3 text-[#55585B] text-end text-lg font-semibold">
                                                <?php echo number_format($order_row['total_money']) ?>đ
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

    <div class="sectioncopyright">
        <p>Copyright</p>
    </div>

    <script src="../../Admin/assets/js/alpine.js"></script>
    <script src="../../Admin/assets/js/perfect-scrollbar.js"></script>
    <script src="../../Admin/assets/js/choices.js"></script>
    <script src="../../Admin/assets/js/chart.js"></script>
    <script src="../../Admin/assets/js/apexchart.js"></script>
    <script src="../../Admin/assets/js/quill.js"></script>
    <script src="../../Admin/assets/js/rangeslider.min.js"></script>
    <script src="../../Admin/assets/js/main.js"></script>
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--Jquery-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--pretty photo-->
</body>

</html>