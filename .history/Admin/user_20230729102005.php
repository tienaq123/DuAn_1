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
    <title>User</title>
    <link rel="shortcut icon" href="./../Public/img/favicon/favicon.ico" type="image/x-icon" />

    <!-- css links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

            <div class="overflow-scroll 2xl:overflow-visible">
                <div class="w-[1400px] 2xl:w-full">
                    <div class="grid grid-cols-12 border-b border-gray rounded-t-md bg-white px-10 py-5">
                        <div class="table-information col-span-4">
                            <h3 class="font-medium tracking-wide text-slate-800 text-lg mb-0 leading-none">
                                User
                            </h3>

                        </div>
                        <div class="table-actions space-x-9 flex justify-end items-center col-span-8">
                            <div class="table-action-item">
                                <div class="show-category flex items-center category-select">
                                    <span class="text-tiny font-normal text-slate-400 mr-2">Category</span>
                                    <select>
                                        <option value="">Show All</option>
                                        <option value="">Category one</option>
                                        <option value="">Category two</option>
                                        <option value="">Category three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-action-item">
                                <div class="show-category flex items-center status-select">
                                    <span class="text-tiny font-normal text-slate-400 mr-2">Status</span>
                                    <select>
                                        <option value="">Show All</option>
                                        <option value="">Active</option>
                                        <option value="">Pending</option>
                                        <option value="">Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-[250px]">
                                <form action="#">
                                    <div class="w-[250px] relative">
                                        <input class="input h-9 w-full pr-12" type="text" placeholder="Search Here..." />
                                        <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                                            <svg class="-translate-y-px" width="13" height="13" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
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
                                        <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] 2xl:w-[12%]">
                                            Action
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
                                                <td class="px-3 py-3">
                                                    <div class="flex items-center space-x-2">
                                                        <button class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                            <span class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                                <svg class="-translate-y-px" height="10" viewBox="0 0 492.49284 492" width="10" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                    <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                                </svg>
                                                            </span>
                                                            Edit
                                                        </button>
                                                        <button style="display: none;" class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                            <span class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                                <svg class="-translate-y-px" width="10" height="10" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                                                                    <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            Delete
                                                        </button>
                                                    </div>
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

</html>