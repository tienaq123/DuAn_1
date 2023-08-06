<?php require_once(__DIR__ . "/../../database/config.php")
?>
<?php require_once('./search_order.php') ?>
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

    .demo-blog .count-cart {
        top: 90px;
    }
</style>

<body>
    <div id="all">
        <?php
        include '../../Template/header.php'
        ?>

        <div style="padding: 50px 100px;" class="body-content px-8 py-8 bg-slate-100">
            <div class="flex justify-between mb-10">
                <div class="page-title">
                    <h3 class="mb-0 text-[28px]">Order List</h3>
                    <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                        <li class="breadcrumb-item text-muted">
                            <a href="../../index.php" class="text-hover-primary">
                                Home</a>
                        </li>
                        <li class="breadcrumb-item flex items-center">
                            <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Order List</li>
                    </ul>
                </div>
            </div>

            <!-- table -->
            <div class="bg-white rounded-t-md rounded-b-md shadow-xs py-4">
                <div class="tp-search-box flex items-center justify-between px-8 py-8 flex-wrap">
                    <div class="search-input relative">
                        <input id="searchKeyword" class="input h-[44px] w-full pl-14" type="text" placeholder="Search by order ID" />
                        <button id="searchButton" class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Đoạn mã SVG cho nút tìm kiếm -->
                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="relative overflow-x-auto mx-8">
                    <table id="searchResults" class="w-[1500px] 2xl:w-full text-base text-left text-gray-500"">

            </table>
            <table class=" w-[1500px] 2xl:w-full text-base text-left text-gray-500 active-table">
                        <thead class="bg-white">
                            <tr class="border-b border-gray6 text-tiny">

                                <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold w-[170px]">
                                    Order ID
                                </th>
                                <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                    Customer
                                </th>
                                <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
                                    Phone
                                </th>
                                <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
                                    Total
                                </th>
                                <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
                                    Status
                                </th>
                                <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
                                    Date
                                </th>
                                <th scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- List Order -->
                            <?php
                            $user_id_order = $_SESSION["user_id"];
                            // Lấy dữ liệu từ bảng order và order_detail thông qua điều kiện kết nối
                            $sql = "SELECT * FROM orders WHERE user_id = $user_id_order";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">

                                    <td class="px-3 py-3 font-normal text-[#55585B]">
                                        #<?php echo $row['id'] ?>
                                    </td>
                                    <td class="pr-8 py-5 whitespace-nowrap">
                                        <a href="#" class="flex items-center space-x-5 text-hover-primary text-heading">
                                            <span class="font-medium"><?php echo $row['fullname'] ?></span>
                                        </a>
                                    </td>

                                    <td class="px-3 py-3 font-normal text-[#55585B] text-center">
                                        <?php echo $row['phone_number'] ?>
                                    </td>
                                    <td class="px-3 py-3 font-normal text-[#55585B] text-center">
                                        <?php echo $row['total_money'] ?>
                                    </td>
                                    <td class="px-3 py-3 text-center">
                                        <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-center"><?php echo $row['status'] ?></span>
                                    </td>
                                    <td class="px-3 py-3 font-normal text-[#55585B] text-center">
                                        <?php echo $row['order_date'] ?>
                                    </td>

                                    <td class="px-9 py-3 text-center">
                                        <div class="flex items-center justify-end space-x-2">
                                            <div class="relative" x-data="{ editTooltip: false }">
                                                <a href="order-detail.php?order_id=<?php echo $row['id'] ?>">
                                                    <button class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                                                        View Details
                                                    </button>
                                                </a>
                                                <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                                                    <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Details</span>
                                                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="sectioncopyright">
        <p>Copyright</p>
    </div>
    <script>
        // Lắng nghe sự kiện click vào nút tìm kiếm
        document.getElementById("searchButton").addEventListener("click", function() {
            // Lấy từ khóa tìm kiếm từ input
            var keyword = document.getElementById("searchKeyword").value;

            // Gửi yêu cầu tìm kiếm đến máy chủ bằng Ajax
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Khi máy chủ trả về kết quả tìm kiếm, hiển thị danh sách sản phẩm
                    document.getElementById("searchResults").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "./search_order.php?keyword=" + encodeURIComponent(keyword), true);
            xhttp.send();
        });
    </script>
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