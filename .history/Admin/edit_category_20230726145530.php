<?php require_once './../database/config.php';  ?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:47 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN Cake</title>
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
    <!--  -->
    <div class="tp-main-wrapper bg-slate-100 h-screen" x-data="{ sideMenu: false }">
        <!-- aside Admin -->
        <?php
        include '../Template/sideMenu.php'
        ?>

        <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"></div>
        <?php
        include '../Template/header_admin.php'
        ?>
        <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]" x-data="{ searchOverlay: false }">


            <div class="body-content px-8 py-8 bg-slate-100">
                <div class="grid grid-cols-12">
                    <div class="col-span-10">
                        <div class="flex justify-between mb-10 items-end">
                            <div class="page-title">
                                <h3 class="mb-0 text-[28px]">Category</h3>
                                <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="product-list.html" class="text-hover-primary">
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item flex items-center">
                                        <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted">Category List</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Category -->
                <?php
                // Kiểm tra xem có tham số id truyền vào hay không
                if (isset($_GET['id'])) {
                    $category_id = $_GET['id'];
                    var_dump($category_id);

                    // Truy vấn để lấy thông tin danh mục từ cơ sở dữ liệu theo id
                    $sql = "SELECT * FROM categories WHERE id = '$category_id'";
                    $result = mysqli_query($conn, $sql);
                    $category = mysqli_fetch_assoc($result);

                    if (!$category) {
                        echo 'Danh mục không tồn tại.';
                        exit;
                    }
                } else {
                    echo 'Thiếu thông tin danh mục.';
                    exit;
                }
                ?>

                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-4">
                        <div class="mb-6 bg-white px-8 py-8 rounded-md">
                            <div class="mb-6">
                                <h3 style="text-align: center; font-weight: 600; color: #333;" class="mb-2 text-black">Edit category</h3>
                            </div>
                            <form method="post">
                                <!-- input -->
                                <div class="mb-6">
                                    <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
                                    <p class="mb-0 text-base text-black">Name</p>
                                    <input required class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" name="category_name" placeholder="Name" />
                                </div>

                                <button type="submit" name="add_category" class="tp-btn px-7 py-2">Add Category</button>
                            </form>
                        </div>
                    </div>
                    <!-- End add cate -->
                    <div class="col-span-12 lg:col-span-8">
                        <div class="relative overflow-x-auto bg-white px-8 py-4 rounded-md">
                            <div class="overflow-scroll 2xl:overflow-visible">
                                <div class="w-[975px] 2xl:w-full">

                                    <!-- Connect SQL -->


                                    <table class="w-full text-base text-left text-gray-500">
                                        <thead>
                                            <tr class="border-b border-gray6 text-tiny">

                                                <th width="20%" scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold ">
                                                    ID
                                                </th>
                                                <th width="30%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px]">
                                                    Name
                                                </th>
                                                <th width="25%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[150px] text-end">
                                                    Items
                                                </th>
                                                <th width="25%" scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[13%] text-end">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            // Kết nối đến cơ sở dữ liệu (nếu bạn chưa kết nối)
                                            // Viết truy vấn SQL để lấy danh sách danh mục
                                            $sql = "SELECT * FROM Category";
                                            // Thực thi truy vấn
                                            $result = mysqli_query($conn, $sql);

                                            // Kiểm tra xem có bản ghi trả về không
                                            if (mysqli_num_rows($result) > 0) {
                                                // Hiển thị danh sách danh mục lên giao diện
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">

                                                        <td class="px-3 py-3 font-normal text-[#55585B]">
                                                            <?php echo "#" . $row['id']; ?>
                                                        </td>
                                                        <td class="pr-8 py-5 whitespace-nowrap">
                                                            <a href="#" class="flex items-center space-x-5">
                                                                <span class="font-medium text-heading text-hover-primary transition"><?php echo $row['name']; ?></span>
                                                            </a>
                                                        </td>

                                                        <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                                                            <?php
                                                            // Đếm số lượng sản phẩm thuộc danh mục này và hiển thị
                                                            $categoryId = $row['id'];
                                                            $countProductsSql = "SELECT COUNT(*) AS count FROM Product WHERE category_id = $categoryId";
                                                            $countProductsResult = mysqli_query($conn, $countProductsSql);
                                                            $countProductsRow = mysqli_fetch_assoc($countProductsResult);
                                                            echo $countProductsRow['count'];
                                                            ?>
                                                        </td>
                                                        <td class="px-9 py-3 text-end">
                                                            <div class="flex items-center justify-end space-x-2">

                                                                <!-- Edit Category form -->
                                                                <div class="relative" x-data="{ editTooltip: false }">
                                                                    <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                                                                        <svg class="-translate-y-[2px]" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                                        </svg>
                                                                    </button>
                                                                    <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                                                                        <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                                                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                    </div>
                                                                </div>

                                                                <!-- Delete Category form -->
                                                                <form method="post" action="">
                                                                    <input type="hidden" name="category_id" value="<?php echo $row['id']; ?>">
                                                                    <div class="relative" x-data="{ deleteTooltip: false }">
                                                                        <button style="cursor: no-drop; display: none;" type="submit" name="delete_category" class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                                                                            <box-icon type='solid' name='trash'></box-icon>
                                                                        </button>
                                                                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                                                                            <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                                                                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo "<tr><td colspan='5'>Không có danh mục nào.</td></tr>";
                                            }

                                            // Đóng kết nối
                                            mysqli_close($conn);
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="flex justify-between items-center flex-wrap">
                                <p class="mb-0 text-tiny">Showing 10 Prdouct of 120</p>
                                <div class="pagination py-3 flex justify-end items-center">
                                    <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">
                                        <svg class="-translate-y-[2px] -translate-x-px" width="12" height="12" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9209 1.50495C11.9206 1.90264 11.7623 2.28392 11.4809 2.56495L3.80895 10.237C3.57673 10.4691 3.39252 10.7447 3.26684 11.0481C3.14117 11.3515 3.07648 11.6766 3.07648 12.005C3.07648 12.3333 3.14117 12.6585 3.26684 12.9618C3.39252 13.2652 3.57673 13.5408 3.80895 13.773L11.4709 21.435C11.7442 21.7179 11.8954 22.0968 11.892 22.4901C11.8885 22.8834 11.7308 23.2596 11.4527 23.5377C11.1746 23.8158 10.7983 23.9735 10.405 23.977C10.0118 23.9804 9.63285 23.8292 9.34995 23.556L1.68795 15.9C0.657711 14.8677 0.0791016 13.4689 0.0791016 12.0105C0.0791016 10.552 0.657711 9.15322 1.68795 8.12095L9.35995 0.443953C9.56973 0.234037 9.83706 0.0910666 10.1281 0.0331324C10.4192 -0.0248017 10.7209 0.00490445 10.9951 0.118492C11.2692 0.232079 11.5036 0.424443 11.6684 0.671242C11.8332 0.918041 11.9211 1.20818 11.9209 1.50495Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                    <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border mr-2 last:mr-0 text-white bg-theme border-theme hover:bg-theme hover:text-white hover:border-theme">1</a>
                                    <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">2</a>
                                    <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">3</a>
                                    <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">
                                        <svg class="-translate-y-px" width="12" height="12" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.0790405 22.5C0.0793906 22.1023 0.237656 21.7211 0.519041 21.44L8.19104 13.768C8.42326 13.5359 8.60747 13.2602 8.73314 12.9569C8.85882 12.6535 8.92351 12.3284 8.92351 12C8.92351 11.6717 8.85882 11.3465 8.73314 11.0432C8.60747 10.7398 8.42326 10.4642 8.19104 10.232L0.52904 2.56502C0.255803 2.28211 0.104612 1.90321 0.108029 1.50992C0.111447 1.11662 0.269201 0.740401 0.547313 0.462289C0.825425 0.184177 1.20164 0.0264236 1.59494 0.0230059C1.98823 0.0195883 2.36714 0.17078 2.65004 0.444017L10.312 8.10502C11.3423 9.13728 11.9209 10.5361 11.9209 11.9945C11.9209 13.4529 11.3423 14.8518 10.312 15.884L2.64004 23.556C2.43056 23.7656 2.16368 23.9085 1.87309 23.9666C1.58249 24.0247 1.2812 23.9954 1.00723 23.8824C0.733259 23.7695 0.498891 23.5779 0.333699 23.3319C0.168506 23.0858 0.0798928 22.7964 0.0790405 22.5Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="assets/js/alpine.js"></script>
    <script src="assets/js/perfect-scrollbar.js"></script>
    <script src="assets/js/choices.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/apexchart.js"></script>
    <script src="assets/js/quill.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:50 GMT -->

</html>