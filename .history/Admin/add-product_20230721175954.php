<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
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
    <?php
    include '../Template/sideMenu.php'
    ?>

    <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"></div>

    <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]" x-data="{ searchOverlay: false }">
      <header class="relative z-10 bg-white border-b border-gray border-solid py-5 px-8 pr-8">
        <div class="flex justify-between">
          <div class="flex items-center space-x-6 lg:space-x-0">
            <button type="button" class="block lg:hidden text-2xl text-black" x-on:click="sideMenu = ! sideMenu">
              <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M1 6H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M1 11H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </button>
            <div class="w-[30%] hidden md:block">
              <form action="#">
                <div class="w-[250px] relative">
                  <input class="input h-12 w-full pr-[45px]" type="text" placeholder="Search Here..." />
                  <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                    <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="flex items-center justify-end space-x-6">
            <div class="md:hidden">
              <button class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-textBody border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight" x-on:click="searchOverlay = ! searchOverlay">
                <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>

            <div class="relative w-[70%] flex justify-end items-center" x-data="{ userOption: false }">
              <button class="relative" type="button" x-on:click="userOption = ! userOption">
                <img class="w-[40px] h-[40px] rounded-md" src="assets/img/users/user-10.jpg" alt="" />
                <span class="w-[12px] h-[12px] inline-block bg-green-500 rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white"></span>
              </button>
              <div x-show="userOption" x-on:click.outside="userOption = false" x-transition:enter="transition ease-out duration-200 origin-top" x-transition:enter-start="opacity-0 scale-y-90" x-transition:enter-end="opacity-100 scale-y-100" x-transition:leave="transition ease-in duration-200 origin-top" x-transition:leave-start="opacity-100 scale-y-200" x-transition:leave-end="opacity-0 scale-y-90" class="absolute w-[280px] top-full right-0 shadow-lg rounded-md bg-white py-5 px-5">
                <div class="flex items-center space-x-3 border-b border-gray pb-3 mb-2">
                  <div class="">
                    <img class="w-[50px] h-[50px] rounded-md" src="assets/img/users/user-10.jpg" alt="" />
                  </div>
                  <div class="">
                    <h5 class="text-base mb-1 leading-none">Shahnewaz</h5>
                    <p class="mb-0 text-tiny leading-none">
                      shahnewaz@mail.com
                    </p>
                  </div>
                </div>
                <ul>
                  <li>
                    <a href="index.html" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">Dashboard</a>
                  </li>
                  <li>
                    <a href="profile.html" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                      Account Settings
                    </a>
                  </li>
                  <li>
                    <a href="login.html" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- search -->
        <div class="fixed top-0 left-0 w-full bg-white p-10 z-50 transition-transform duration-300 md:hidden" :class="searchOverlay ? 'translate-y-[0px]' : ' -translate-y-[230px] lg:translate-y-[0]'">
          <form action="#">
            <div class="relative mb-3">
              <input class="input h-12 w-full pr-[45px]" type="text" placeholder="Search Here..." />
              <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>
          </form>
          <div class="">
            <span class="text-tiny mr-2">Keywords :</span>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Customer</a>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Product</a>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Orders</a>
          </div>
        </div>
        <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="searchOverlay ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="searchOverlay = ! searchOverlay"></div>
      </header>

      <div class="body-content px-8 py-8 bg-slate-100">
        <div class="grid grid-cols-12">
          <div class="col-span-12 2xl:col-span-10">
            <div class="flex justify-between mb-10 items-end flex-wrap">
              <div class="page-title mb-6 sm:mb-0">
                <h3 class="mb-0 text-[28px]">Add Product</h3>
                <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                  <li class="breadcrumb-item text-muted">
                    <a href="product-list.html" class="text-hover-primary">
                      Home</a>
                  </li>
                  <li class="breadcrumb-item flex items-center">
                    <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                  </li>
                  <li class="breadcrumb-item text-muted">Add Product</li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- add product -->

        <?php
        // Kiểm tra xem người dùng đã nhấn nút "Add" hay chưa
        if (isset($_POST['add_product'])) {
          // Gọi hàm addProduct để thêm sản phẩm vào database
          addProduct($conn, $_POST);
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
                            <textarea style="width: 100%; border: 1px solid #ccc; border-radius: 6px; opacity: 1;" name="" id="" cols="30" rows="10" name="description"></textarea>
                          </div>
                        </div>
                        <div class="bg-white px-8 py-8 rounded-md mb-6">
                          <h4 class="text-[22px]">Details</h4>

                          <div class="grid sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-x-6">
                            <div class="mb-5">
                              <p class="mb-0 text-base text-black">
                                Price <span class="text-red">*</span>
                              </p>
                              <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Product price" />
                              <span class="text-tiny leading-4">Set the base price of product.</span>
                            </div>
                            <!-- input -->
                            <div class="mb-5">
                              <p class="mb-0 text-base text-black">
                                Old price <span class="text-red">*</span>
                              </p>
                              <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Old price product" />
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
                            <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Link image" />
                          </div>
                        </div>
                        <div class="bg-white px-8 py-8 rounded-md mb-6">
                          <h4 class="mb-5 text-black">Category</h4>
                          <div class=" gap-3 mb-5">
                            <div style="width: 100%" class="category-select select-bordered">
                              <!-- <h5 class=" mb-1">Category</h5> -->
                              <select style="width: 100%">
                                <option value="">Electronics</option>
                                <option value="">Fashion</option>
                                <option value="">Jewellery</option>
                                <option value="">Beauty</option>
                                <option value="">Grocery</option>
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