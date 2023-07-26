<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:20 GMT -->

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
                <div class="flex justify-between items-end flex-wrap">
                    <div class="page-title mb-7">
                        <h3 class="mb-0 text-4xl">Dashboard</h3>
                        <p class="text-textBody m-0">Welcome to your dashboard</p>
                    </div>
                    <div class="mb-7">
                        <a href="add-product.html" class="tp-btn px-5 py-2">Add Product</a>
                    </div>
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
                            <a href="transaction.html" class="leading-none text-base text-info border-b border-info border-dotted capitalize font-medium hover:text-info/60 hover:border-info/60">View
                                All</a>
                        </div>
                        <div class="space-y-5">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full w-10 h-10" src="assets/img/users/user-6.jpg" alt="avatar" />
                                    </div>
                                    <div>
                                        <h4 class="text-base text-slate-700 mb-[6px] leading-none">
                                            Konnor Guzman
                                        </h4>
                                        <p class="text-sm text-slate-400 line-clamp-1 m-0 leading-none">
                                            Jan 10, 2023 - 06:02 AM
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-success mb-0">$660.22</p>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white p-8 col-span-12 xl:col-span-8 2xl:col-span-6 rounded-md">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium tracking-wide text-slate-700 text-lg mb-0 leading-none">
                                Recent Orders
                            </h3>
                            <a href="order-list.html" class="leading-none text-base text-info border-b border-info border-dotted capitalize font-medium hover:text-info/60 hover:border-info/60">View
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
                                                Product ID
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Price
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Status
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-14">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>

                                    <?php
                                    // Lấy dữ liệu từ bảng order và order_detail thông qua điều kiện kết nối
                                    $sql = "SELECT o.*, od.*, p.*
                                        FROM orders o
                                        INNER JOIN order_details od ON o.id = od.order_id
                                        INNER JOIN product p ON od.id_product = p.id";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tbody>
                                                <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                                    <td class="pr-8 whitespace-nowrap">
                                                        <a href="#" class="font-medium text-heading text-hover-primary"><?php echo $row['product_name'] ?></a>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        #XY-25G
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        $2999.00
                                                    </td>
                                                    <td class="px-3 py-3">
                                                        <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium">Active</span>
                                                    </td>
                                                    <td class="px-3 py-3 w-14">
                                                        <button class="bg-info/10 text-info hover:bg-info hover:text-white inline-block text-center leading-5 text-tiny font-medium py-2 px-4 rounded-md">
                                                            View
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                    <?php }
                                    } else {
                                        // Hiển thị thông báo nếu không có danh mục
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

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:37 GMT -->

</html>