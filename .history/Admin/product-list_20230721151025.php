<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:38 GMT -->

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
      <header class="relative z-[999] bg-white border-b border-gray border-solid py-5 px-8 pr-8">
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
            <div class="relative" x-data="{ notificationTable: false }">
              <button x-on:click="notificationTable = ! notificationTable" class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-gray border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight">
                <svg class="-translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                  <g>
                    <path stroke="currentColor" d="M23.259,16.2l-2.6-9.371A9.321,9.321,0,0,0,2.576,7.3L.565,16.35A3,3,0,0,0,3.493,20H7.1a5,5,0,0,0,9.8,0h3.47a3,3,0,0,0,2.89-3.8ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm9.165-4.395a.993.993,0,0,1-.8.395H3.493a1,1,0,0,1-.976-1.217l2.011-9.05a7.321,7.321,0,0,1,14.2-.372l2.6,9.371A.993.993,0,0,1,21.165,17.605Z" />
                  </g>
                </svg>
                <span class="w-[20px] h-[20px] inline-block bg-danger rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white text-xs leading-[18px] font-medium text-white">05</span>
              </button>
              <div x-show="notificationTable" x-on:click.outside="notificationTable = false" x-transition:enter="transition ease-out duration-200 origin-top" x-transition:enter-start="opacity-0 scale-y-90" x-transition:enter-end="opacity-100 scale-y-100" x-transition:leave="transition ease-in duration-200 origin-top" x-transition:leave-start="opacity-100 scale-y-200" x-transition:leave-end="opacity-0 scale-y-90" class="absolute w-[280px] sm:w-[350px] h-[285px] overflow-y-scroll overflow-item top-full -right-[60px] sm:right-0 shadow-lg rounded-md bg-white py-5 px-5">
                <div class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                  <div class="flex items-center space-x-3">
                    <div class="">
                      <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-1.jpg" alt="img" />
                    </div>
                    <div class="">
                      <h5 class="text-base mb-0 leading-none">
                        Green shirt for women
                      </h5>
                      <span class="text-tiny leading-none">Jan 21, 2023 08:30 AM</span>
                    </div>
                  </div>
                  <div class="">
                    <button class="hover:text-danger">
                      <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="currentColor" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                  <div class="flex items-center space-x-3">
                    <div class="">
                      <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-2.jpg" alt="img" />
                    </div>
                    <div class="">
                      <h5 class="text-base mb-0 leading-none">
                        Red School Bag
                      </h5>
                      <span class="text-tiny leading-none">Jan 25, 2023 10:05 PM</span>
                    </div>
                  </div>
                  <div class="">
                    <button class="hover:text-danger">
                      <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="currentColor" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                  <div class="flex items-center space-x-3">
                    <div class="">
                      <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-3.jpg" alt="img" />
                    </div>
                    <div class="">
                      <h5 class="text-base mb-0 leading-none">
                        Shoe for men
                      </h5>
                      <span class="text-tiny leading-none">Feb 20, 2023 05:00 PM</span>
                    </div>
                  </div>
                  <div class="">
                    <button class="hover:text-danger">
                      <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="currentColor" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                  <div class="flex items-center space-x-3">
                    <div class="">
                      <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-4.jpg" alt="img" />
                    </div>
                    <div class="">
                      <h5 class="text-base mb-0 leading-none">
                        Yellow Bag for women
                      </h5>
                      <span class="text-tiny leading-none">Feb 10, 2023 11:15 AM</span>
                    </div>
                  </div>
                  <div class="">
                    <button class="hover:text-danger">
                      <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="currentColor" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                  <div class="flex items-center space-x-3">
                    <div class="">
                      <img class="w-[40px] h-[40px] rounded-md" src="assets/img/product/prodcut-5.jpg" alt="img" />
                    </div>
                    <div class="">
                      <h5 class="text-base mb-0 leading-none">
                        Blavk Bag for women
                      </h5>
                      <span class="text-tiny leading-none">Feb 15, 2023 01:20 PM</span>
                    </div>
                  </div>
                  <div class="">
                    <button class="hover:text-danger">
                      <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="currentColor" d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
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
        <div class="flex justify-between mb-10">
          <div class="page-title">
            <h3 class="mb-0 text-[28px]">Products</h3>
            <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
              <li class="breadcrumb-item text-muted">
                <a href="product-list.html" class="text-hover-primary">
                  Home</a>
              </li>
              <li class="breadcrumb-item flex items-center">
                <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
              </li>
              <li class="breadcrumb-item text-muted">Product List</li>
            </ul>
          </div>
        </div>

        <!-- table -->
        <div class="bg-white rounded-t-md rounded-b-md shadow-xs py-4">
          <div class="tp-search-box flex items-center justify-between px-8 py-8">
            <div class="search-input relative">
              <input class="input h-[44px] w-full pl-14" type="text" placeholder="Search by product name" />
              <button class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>
            <div class="flex justify-end space-x-6">
              <div class="search-select mr-3 flex items-center space-x-3">
                <span class="text-tiny inline-block leading-none -translate-y-[2px]">Status :
                </span>
                <select>
                  <option>Active</option>
                  <option>In Active</option>
                  <option>Scheduled</option>
                  <option>Low Stock</option>
                  <option>Out of Stock</option>
                </select>
              </div>
              <div class="product-add-btn flex">
                <a href="add-product.html" class="tp-btn">Add Product</a>
              </div>
            </div>
          </div>
          <div class="relative overflow-x-auto mx-8">
            <table class="w-full text-base text-left text-gray-500">
              <thead class="bg-white">
                <tr class="border-b border-gray6 text-tiny">
                  <th scope="col" class="py-3 text-tiny text-text2 uppercase font-semibold w-[3%]">
                    <div class="tp-checkbox -translate-y-[3px]">
                      <input id="selectAllProduct" type="checkbox" />
                      <label for="selectAllProduct"></label>
                    </div>
                  </th>
                  <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                    Product
                  </th>
                  <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    SKU
                  </th>
                  <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    QTY
                  </th>
                  <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Price
                  </th>
                  <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Rating
                  </th>
                  <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Status
                  </th>
                  <th scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[12%] text-end">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-1" type="checkbox" />
                      <label for="product-1"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-1.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Whitetails Women's Open
                        Sky</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #479063DR
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    37
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $171.00
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end">Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-2" type="checkbox" />
                      <label for="product-2"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-2.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Simple Modern School
                        Boys</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #DF7B2B64
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    124
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $98.00
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-danger px-3 py-1 rounded-md leading-none bg-danger/10 font-medium text-end">In
                      Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-3" type="checkbox" />
                      <label for="product-3"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-3.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Women's Essentials
                        Convertible</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #373F9567
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    <span class="text-[11px] -translate-y-[1px] inline-block text-warning px-3 py-1 rounded-md leading-none bg-warning/10 font-medium text-end">Low
                      Stock</span>
                    05
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $56.99
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-info px-3 py-1 rounded-md leading-none bg-info/10 font-medium text-end">Scheduled</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-4" type="checkbox" />
                      <label for="product-4"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-4.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Calvin Klein Gabrianna
                        Novelty</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #C174E363
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    <span class="text-[11px] -translate-y-[1px] inline-block text-danger px-3 py-1 rounded-md leading-none bg-danger/10 font-medium text-end">Out
                      Of Stock</span>
                    00
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $340.18
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end">Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-5" type="checkbox" />
                      <label for="product-5"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-5.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Tommy Hilfiger Women’s
                        Jaden</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #26BC663E
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    57
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $224.00
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end">Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-6" type="checkbox" />
                      <label for="product-6"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-6.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Govicta Men's Shoes
                        Leather</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #AD6ACDB9
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    45
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $47.00
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end">Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-7" type="checkbox" />
                      <label for="product-7"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-7.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Legendary Whitetails
                        Men's.</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #3F6CBB65
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    78
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $29.99
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-info px-3 py-1 rounded-md leading-none bg-info/10 font-medium text-end">Scheduled</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                  <td class="pr-3 whitespace-nowrap">
                    <div class="tp-checkbox">
                      <input id="product-8" type="checkbox" />
                      <label for="product-8"></label>
                    </div>
                  </td>
                  <td class="pr-8 py-5 whitespace-nowrap">
                    <a href="#" class="flex items-center space-x-5">
                      <img class="w-[60px] h-[60px] rounded-md" src="assets/img/product/prodcut-8.jpg" alt="" />
                      <span class="font-medium text-heading text-hover-primary transition">Backpack, School Bag.</span>
                    </a>
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    #8054F82C
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    104
                  </td>
                  <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                    $99.99
                  </td>
                  <td class="px-3 py-3 font-normal text-heading text-end">
                    <div class="flex justify-end items-center space-x-1 text-tiny">
                      <span class="text-yellow flex items-center space-x-1">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </span>
                    </div>
                  </td>
                  <td class="px-3 py-3 text-end">
                    <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end">Active</span>
                  </td>
                  <td class="px-9 py-3 text-end">
                    <div class="flex items-center justify-end space-x-2">
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-px" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                      <div class="relative" x-data="{ deleteTooltip: false }">
                        <button class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <svg class="-translate-y-px" width="14" height="14" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                            <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                          </svg>
                        </button>
                        <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="flex justify-between items-center flex-wrap mx-8">
            <p class="mb-0 text-tiny">Showing 10 Prdouct of 120</p>
            <div class="pagination py-3 flex justify-end items-center mx-8">
              <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">
                <svg class="-translate-y-[2px] -translate-x-px" width="12" height="12" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.9209 1.50495C11.9206 1.90264 11.7623 2.28392 11.4809 2.56495L3.80895 10.237C3.57673 10.4691 3.39252 10.7447 3.26684 11.0481C3.14117 11.3515 3.07648 11.6766 3.07648 12.005C3.07648 12.3333 3.14117 12.6585 3.26684 12.9618C3.39252 13.2652 3.57673 13.5408 3.80895 13.773L11.4709 21.435C11.7442 21.7179 11.8954 22.0968 11.892 22.4901C11.8885 22.8834 11.7308 23.2596 11.4527 23.5377C11.1746 23.8158 10.7983 23.9735 10.405 23.977C10.0118 23.9804 9.63285 23.8292 9.34995 23.556L1.68795 15.9C0.657711 14.8677 0.0791016 13.4689 0.0791016 12.0105C0.0791016 10.552 0.657711 9.15322 1.68795 8.12095L9.35995 0.443953C9.56973 0.234037 9.83706 0.0910666 10.1281 0.0331324C10.4192 -0.0248017 10.7209 0.00490445 10.9951 0.118492C11.2692 0.232079 11.5036 0.424443 11.6684 0.671242C11.8332 0.918041 11.9211 1.20818 11.9209 1.50495Z" fill="currentColor" />
                </svg>
              </a>
              <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">2</a>
              <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border mr-2 last:mr-0 text-white bg-theme border-theme hover:bg-theme hover:text-white hover:border-theme">3</a>
              <a href="#" class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme">4</a>
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

  <script src="assets/js/alpine.js"></script>
  <script src="assets/js/perfect-scrollbar.js"></script>
  <script src="assets/js/choices.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/apexchart.js"></script>
  <script src="assets/js/quill.js"></script>
  <script src="assets/js/rangeslider.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:40 GMT -->

</html>