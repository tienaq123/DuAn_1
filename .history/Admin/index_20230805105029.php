<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN CAKE</title>
    <link rel="shortcut icon" href="./../Public/img/favicon/favicon.ico" type="image/x-icon" />

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
            include '../Template/header_admin.php'
            ?>

            <div class="body-content px-8 py-8 bg-slate-100">
                <div class="flex justify-between items-end flex-wrap">
                    <div class="page-title mb-7">
                        <h3 class="mb-0 text-4xl">Dashboard</h3>
                        <p class="text-textBody m-0">Welcome to your dashboard</p>
                    </div>
                    <!-- <div class="mb-7">
                        <a href="add-product.php" class="tp-btn px-5 py-2">Add Product</a>
                    </div> -->
                </div>

                <!-- card -->


                <!-- card -->
                <div class="grid-cols-4 gap-6 hidden">
                    <div class="card-item bg-white py-7 px-7 flex items-start rounded-md mb-6">
                        <div class="card-icon">
                            <span class="inline-block w-12 h-12 mr-5 rounded-full bg-green-200 text-green-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor" d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="card-content">
                            <h6 class="text-heading mb-2">Revenue</h6>
                            <h4 class="text-3xl mb-0 text-textBody">$10,000</h4>
                            <p class="text-tiny leading-normal mb-0 font-medium">
                                Shipping fees are not included
                            </p>
                        </div>
                    </div>
                    <div class="card-item bg-white py-7 px-7 flex items-start rounded-md mb-6">
                        <div class="card-icon">
                            <span class="inline-block w-12 h-12 mr-5 rounded-full bg-orange-200 text-orange-600 leading-[3rem] text-center text-xl">
                                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 469.333 469.333">
                                    <g>
                                        <g>
                                            <path fill="currentColor" d="M405.333,149.333h-64V64H42.667C19.093,64,0,83.093,0,106.667v234.667h42.667c0,35.307,28.693,64,64,64s64-28.693,64-64
                                              h128c0,35.307,28.693,64,64,64c35.307,0,64-28.693,64-64h42.667V234.667L405.333,149.333z M106.667,373.333
                                              c-17.707,0-32-14.293-32-32s14.293-32,32-32s32,14.293,32,32S124.373,373.333,106.667,373.333z M362.667,373.333
                                              c-17.707,0-32-14.293-32-32s14.293-32,32-32s32,14.293,32,32S380.373,373.333,362.667,373.333z M341.333,234.667v-53.333h53.333
                                              l41.92,53.333H341.333z" />
                                        </g>
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>
                            </span>
                        </div>
                        <div class="card-content">
                            <h6 class="text-heading mb-2">Orders</h6>
                            <h4 class="text-3xl mb-0 text-textBody">3240</h4>
                            <p class="text-tiny leading-normal mb-0 font-medium">
                                Excluding orders in transit
                            </p>
                        </div>
                    </div>
                    <div class="card-item bg-white py-7 px-7 flex items-start rounded-md mb-6">
                        <div class="card-icon">
                            <span class="inline-block w-12 h-12 mr-5 rounded-full bg-blue-200 text-blue-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor" d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="card-content">
                            <h6 class="text-heading mb-2">Products</h6>
                            <h4 class="text-3xl mb-0 text-textBody">1456</h4>
                            <p class="text-tiny leading-normal mb-0 font-medium">
                                in 19 Categories
                            </p>
                        </div>
                    </div>
                    <div class="card-item bg-white py-7 px-7 flex items-start rounded-md mb-6">
                        <div class="card-icon">
                            <span class="inline-block w-12 h-12 mr-5 rounded-full bg-teal-200 text-teal-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor" d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="card-content">
                            <h6 class="text-heading mb-2">Monthly Earning</h6>
                            <h4 class="text-3xl mb-0 text-textBody">$5014</h4>
                            <p class="text-tiny leading-normal mb-0 font-medium">
                                Based in your local time.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- chart -->


                <!-- new customers -->
                <div class="grid grid-cols-12 gap-6 mb-6">
                    <div class="bg-white p-8 col-span-12 xl:col-span-4 2xl:col-span-3 rounded-md">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="font-medium tracking-wide text-slate-700 text-lg mb-0 leading-none">
                                Transactions
                            </h2>

                        </div>
                        <div class="space-y-5">
                            <?php
                            $sql = "SELECT * FROM orders";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="flex flex-wrap items-center justify-between">
                                        <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                            <div class="avatar">
                                                <img class="rounded-full w-10 h-10" src="assets/img/users/user-6.jpg" alt="avatar" />
                                            </div>
                                            <div>
                                                <h4 class="text-base text-slate-700 mb-[6px] leading-none">
                                                    <?php echo $row['fullname'] ?>
                                                </h4>
                                                <p class="text-sm text-slate-400 line-clamp-1 m-0 leading-none">
                                                    <?php echo $row['order_date'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="font-medium text-success mb-0"><?php echo  number_format($row['total_money']) ?>đ</p>
                                    </div>
                            <?php }
                            } else {
                                // Hiển thị thông báo nếu lỗi
                                echo 'Lỗi';
                            } ?>

                        </div>
                    </div>

                    <div class="bg-white p-8 col-span-12 xl:col-span-8 2xl:col-span-6 rounded-md">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium tracking-wide text-slate-700 text-lg mb-0 leading-none">
                                Recent Orders
                            </h3>
                            <a href="order-list.php" class="leading-none text-base text-info border-b border-info border-dotted capitalize font-medium hover:text-info/60 hover:border-info/60">View
                                All</a>
                        </div>

                        <!-- table -->
                        <div class="overflow-scroll 2xl:overflow-visible">
                            <div class="w-[700px] 2xl:w-full">
                                <table class="w-full text-base text-left text-gray-500">
                                    <thead class="bg-white">
                                        <tr class="border-b border-gray6 text-tiny">
                                            <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Item
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Order ID
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Total
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>

                                    <?php
                                    // Lấy dữ liệu từ bảng order và order_detail thông qua điều kiện kết nối
                                    $sql = "SELECT o.*, od.*, p.*
                                        FROM orders o
                                        INNER JOIN order_details od ON o.id = od.order_id
                                        INNER JOIN product p ON od.product_id = p.id";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tbody>
                                                <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                                    <td class="pr-8 whitespace-nowrap">
                                                        <a href="#" class="font-medium text-heading text-hover-primary"><?php echo $row['title'] ?></a>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $row['order_id'] ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo number_format($row['total_money']) ?>đ
                                                    </td>
                                                    <td class="px-3 py-3">
                                                        <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium"><?php echo $row['status'] ?></span>
                                                    </td>

                                                </tr>
                                            </tbody>
                                    <?php }
                                    } else {
                                        // Hiển thị thông báo nếu lỗi
                                        echo 'Lỗi';
                                    } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- table -->
                <div class="overflow-scroll 2xl:overflow-visible">
                    <div class="w-[1400px] 2xl:w-full">
                        <div class="grid grid-cols-12 border-b border-gray rounded-t-md bg-white px-10 py-5">
                            <div class="table-information col-span-4">
                                <h3 class="font-medium tracking-wide text-slate-800 text-lg mb-0 leading-none">
                                    Product List
                                </h3>
                                <p class="text-slate-500 mb-0 text-tiny">
                                    Avg. 57 orders per day
                                </p>
                            </div>

                        </div>

                        <div class="">
                            <div class="relative rounded-b-md bg-white px-10 py-7">
                                <!-- table -->
                                <table class="w-full text-base text-left text-gray-500">
                                    <thead class="bg-white">
                                        <tr class="border-b border-gray6 text-tiny">
                                            <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Item
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Product ID
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Category
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Price
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Old Price
                                            </th>
                                        </tr>
                                    </thead>

                                    <!-- List Products -->

                                    <?php
                                    $sql = "SELECT p.*, c.name AS category_name FROM Product p
                                    INNER JOIN Category c ON p.category_id = c.id";
                                    $result = mysqli_query($conn, $sql);
                                    // Kiểm tra xem có sản phẩm nào hay không
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $product_id = $row['id'];
                                            $title = $row['title'];
                                            $thumbnail = $row['thumbnail'];
                                            $price = $row['price'];
                                            $old_price = $row['old_price'];
                                            $category = $row['category_name'];
                                            $created_at = $row['created_at'];
                                            $formattedPrice = number_format($price);
                                            $formattedOld_Price = number_format($old_price);
                                    ?>
                                            <tbody>
                                                <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                                    <td class="pr-8 whitespace-nowrap">
                                                        <a href="#" class="font-medium text-heading text-hover-primary"><?php echo $title ?></a>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        #<?php echo $product_id ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $category ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $formattedPrice ?>đ
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $formattedOld_Price ?>đ
                                                    </td>

                                                </tr>
                                        <?php }
                                    } ?>
                                            </tbody>
                                </table>
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


</html>