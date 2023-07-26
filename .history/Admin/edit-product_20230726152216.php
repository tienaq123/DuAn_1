<?php require_once('./function.php');
$conn = connectToDatabase(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:45 GMT -->

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
        <?php include '../Template/sideMenu.php' ?>

        <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"></div>

        <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]" x-data="{ searchOverlay: false }">
            <?php
            // include '../Template/header_admin.php'
            ?>

            <div class="body-content px-8 py-8 bg-slate-100">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 2xl:col-span-10">
                        <div class="flex justify-between mb-10 items-end flex-wrap">
                            <div class="page-title mb-6 sm:mb-0">
                                <h3 class="mb-0 text-[28px]">Edit Product</h3>
                                <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="product-list.html" class="text-hover-primary">
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item flex items-center">
                                        <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                                    </li>
                                    <li class="breadcrumb-item text-muted">Edit Product</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- add product -->

                <?php
                // Kiểm tra xem có tham số id truyền vào hay không
                if (isset($_GET['id'])) {
                    $product_id = $_GET['id'];

                    // Truy vấn để lấy thông tin sản phẩm từ cơ sở dữ liệu theo id
                    $sql = "SELECT * FROM products WHERE id = '$product_id'";
                    $result = mysqli_query($conn, $sql);
                    $product = mysqli_fetch_assoc($result);

                    if (!$product) {
                        echo 'Sản phẩm không tồn tại.';
                        exit;
                    }
                } else {
                    echo 'Thiếu thông tin sản phẩm.';
                    exit;
                }
                ?>
                <div class="grid grid-cols-12">
                    <div class="col-span-12 2xl:col-span-10" x-data="{ addProductTab: 1 }">

                        <div class="">
                            <!-- general tab content -->
                            <div class="" x-show="addProductTab === 1">
                                <div class="" x-show="addProductTab === 1">
                                    <form method="POST">
                                        <div class="grid grid-cols-12 gap-6 mb-6">
                                            <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
                                                <div class="mb-6 bg-white px-8 py-8 rounded-md">
                                                    <h4 class="text-[22px]">General</h4>
                                                    <!-- input -->
                                                    <div class="mb-5">
                                                        <p class="mb-0 text-base text-black">
                                                            Product Name <span class="text-red">*</span>
                                                        </p>
                                                        <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Product name" name="product_name" />
                                                        <span class="text-tiny">A product name is required and recommended to be
                                                            unique.</span>
                                                    </div>
                                                    <div class="mb-5">
                                                        <p class="mb-0 text-base text-black">Description</p>
                                                        <textarea style="width: 100%; border: 1px solid #ccc; border-radius: 6px;" id="" cols="30" rows="10" name="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="bg-white px-8 py-8 rounded-md mb-6">
                                                    <h4 class="text-[22px]">Details</h4>

                                                    <div class="grid sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-x-6">
                                                        <div class="mb-5">
                                                            <p class="mb-0 text-base text-black">
                                                                Price <span class="text-red">*</span>
                                                            </p>
                                                            <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="number" placeholder="Product price" name="price" />
                                                            <span class="text-tiny leading-4">Set the base price of product.</span>
                                                        </div>
                                                        <!-- input -->
                                                        <div class="mb-5">
                                                            <p class="mb-0 text-base text-black">
                                                                Old price <span class="text-red">*</span>
                                                            </p>
                                                            <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="number" placeholder="Old price product" name="old_price" />
                                                            <span class="text-tiny leading-4">Set the old price of the product</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
                                                <div class="bg-white px-8 py-8 rounded-md mb-6">
                                                    <p class="mb-2 text-base text-black">Upload Image</p>
                                                    <div class="text-center">
                                                        <img class="w-[100px] h-auto mx-auto" src="assets/img/icons/upload.png" alt="" />
                                                    </div>
                                                    <span class="text-tiny text-center w-full inline-block mb-3">Image size must be less than
                                                        5Mb</span>
                                                    <div class="">
                                                        <div>
                                                            <input type="file" id="productImage" class="hidden" />
                                                            <label for="productImage" class="text-tiny w-full inline-block py-1 px-4 rounded-md border border-gray6 text-center hover:cursor-pointer hover:bg-theme hover:text-white hover:border-theme transition">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <p class="mt-5">Upload Image link</p>
                                                        <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Link image" name="thumbnail" />
                                                    </div>
                                                </div>
                                                <div class="bg-white px-8 py-8 rounded-md mb-6">
                                                    <h4 class="mb-5 text-black">Category</h4>
                                                    <div class=" gap-3 mb-5">
                                                        <div style="width: 100%" class="category-select select-bordered">
                                                            <!-- <h5 class=" mb-1">Category</h5> -->
                                                            <select style="width: 100%" name="category">
                                                                <?php
                                                                // Lấy danh sách các danh mục từ bảng "Category"
                                                                $sql = "SELECT * FROM Category";
                                                                $result = mysqli_query($conn, $sql);

                                                                // Kiểm tra xem có danh mục nào hay không
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        // Hiển thị các tùy chọn trong trường chọn
                                                                        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                                    }
                                                                } else {
                                                                    // Hiển thị thông báo nếu không có danh mục
                                                                    echo '<option value="">Không có danh mục</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <button type="submit" name="add_product" class="tp-btn px-10 py-2 mb-2">Add product</button>
                                    </form>
                                </div>
                            </div>
                            <!-- general tab content -->
                            <div class="" x-show="addProductTab === 2"></div>
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

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:47 GMT -->

</html>