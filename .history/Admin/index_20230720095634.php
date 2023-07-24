<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:20 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN CAKE</title>
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
        <!-- <aside
            class="w-[300px] lg:w-[250px] xl:w-[300px] border-r border-gray overflow-y-scroll sidebar-scrollbar fixed left-0 top-0 h-full bg-white z-50 transition-transform duration-300"
            :class="sideMenu ? 'translate-x-[0px]' : ' -translate-x-[300px] lg:translate-x-[0]'">
            <div class="">
                <div style="text-align: center; overflow: hidden; height: auto;"
                    class="py-4 pb-8 px-8 border-b border-gray h-[78px]">
                    <a href="index.html">
                        <img style="width: 100px;height: 130px;" class="w-[140px]" src="assets/img/logo/logo.png"
                            alt="" />
                    </a>
                </div>
                <div class="px-4 py-5" x-data="{nav:null}">
                    <ul>
                        <li>
                            <a @click="nav !== 0 ? nav = 0 : nav = null"
                                :class="nav == 0 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                                href="index.html"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-2 hover:bg-gray sidebar-link-active">
                                <span class="inline-block mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                                        <path fill="currentColor"
                                            d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                        <path fill="currentColor"
                                            d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                                        <path fill="currentColor"
                                            d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                                    </svg>
                                </span>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a @click="nav !== 1 ? nav = 1 : nav = null"
                                :class="nav == 1 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                                href="javascript:void(0);"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M23.621,6.836l-1.352-2.826c-.349-.73-.99-1.296-1.758-1.552L14.214,.359c-1.428-.476-3-.476-4.428,0L3.49,2.458c-.769,.256-1.41,.823-1.759,1.554L.445,6.719c-.477,.792-.567,1.742-.247,2.609,.309,.84,.964,1.49,1.802,1.796l-.005,6.314c-.002,2.158,1.372,4.066,3.418,4.748l4.365,1.455c.714,.238,1.464,.357,2.214,.357s1.5-.119,2.214-.357l4.369-1.457c2.043-.681,3.417-2.585,3.419-4.739l.005-6.32c.846-.297,1.508-.946,1.819-1.79,.317-.858,.228-1.799-.198-2.499ZM10.419,2.257c1.02-.34,2.143-.34,3.162,0l4.248,1.416-5.822,1.95-5.834-1.95,4.246-1.415ZM2.204,7.666l1.327-2.782c.048,.025,7.057,2.373,7.057,2.373l-1.621,3.258c-.239,.398-.735,.582-1.173,.434l-5.081-1.693c-.297-.099-.53-.325-.639-.619-.109-.294-.078-.616,.129-.97Zm3.841,12.623c-1.228-.409-2.052-1.554-2.051-2.848l.005-5.648,3.162,1.054c1.344,.448,2.792-.087,3.559-1.371l.278-.557-.005,10.981c-.197-.04-.391-.091-.581-.155l-4.366-1.455Zm11.897-.001l-4.37,1.457c-.19,.063-.384,.115-.581,.155l.005-10.995,.319,.64c.556,.928,1.532,1.459,2.561,1.459,.319,0,.643-.051,.96-.157l3.161-1.053-.005,5.651c0,1.292-.826,2.435-2.052,2.844Zm4-11.644c-.105,.285-.331,.504-.619,.6l-5.118,1.706c-.438,.147-.934-.035-1.136-.365l-1.655-3.323s7.006-2.351,7.054-2.377l1.393,2.901c.157,.261,.186,.574,.081,.859Z" />
                                    </svg>
                                </span>
                                Products

                                <span
                                    class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4"
                                    :class="nav == 1 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'">
                                    <svg class="-translate-y-[5px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z" />
                                    </svg>
                                </span>
                            </a>
                            <ul x-show="nav == 1" class="pl-[42px] pr-[20px] pb-3">
                                <li>
                                    <a href="product-list.html"
                                        class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Product
                                        List</a>
                                </li>
                                <li>
                                    <a href="add-product.html"
                                        class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Add
                                        Product</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="category.html"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z" />
                                        <circle fill="currentColor" cx="7" cy="22" r="2" />
                                        <circle fill="currentColor" cx="17" cy="22" r="2" />
                                    </svg>
                                </span>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="order-list.html"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="m11.349,24H0V3C0,1.346,1.346,0,3,0h12c1.654,0,3,1.346,3,3v5.059c-.329-.036-.662-.059-1-.059s-.671.022-1,.059V3c0-.552-.448-1-1-1H3c-.552,0-1,.448-1,1v19h7.518c.506.756,1.125,1.429,1.831,2Zm0-14h-7.349v2h5.518c.506-.756,1.125-1.429,1.831-2Zm-7.349,7h4c0-.688.084-1.356.231-2h-4.231v2Zm20,0c0,3.859-3.141,7-7,7s-7-3.141-7-7,3.141-7,7-7,7,3.141,7,7Zm-2,0c0-2.757-2.243-5-5-5s-5,2.243-5,5,2.243,5,5,5,5-2.243,5-5ZM14,5H4v2h10v-2Zm5.589,9.692l-3.228,3.175-1.63-1.58-1.393,1.436,1.845,1.788c.314.315.733.489,1.179.489s.865-.174,1.173-.482l3.456-3.399-1.402-1.426Z" />
                                    </svg>
                                </span>
                                Order
                            </a>
                        </li>
                        <li class="hidden">
                            <a @click="nav !== 3 ? nav = 3 : nav = null"
                                :class="nav == 3 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                                href="javascript:void(0);"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z" />
                                    </svg>
                                </span>
                                Customers

                                <span
                                    class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4"
                                    :class="nav == 3 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'">
                                    <svg class="-translate-y-[5px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z" />
                                    </svg>
                                </span>
                            </a>
                            <ul x-show="nav == 3" class="pl-[42px] pr-[20px] pb-3">
                                <li>
                                    <a href="customer-list.html"
                                        class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Customers
                                        List</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Customer
                                        Details</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="profile.html"
                                class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                                    <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="16" height="16">
                                        <path fill="currentColor"
                                            d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z" />
                                    </svg>
                                </span>
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside> -->

        <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300"
            :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="sideMenu = ! sideMenu"></div>

        <div class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]"
            x-data="{ searchOverlay: false }">
            <header class="relative z-10 bg-white border-b border-gray border-solid py-5 px-8 pr-8">
                <div class="flex justify-between">
                    <div class="flex items-center space-x-6 lg:space-x-0">
                        <button type="button" class="block lg:hidden text-2xl text-black"
                            x-on:click="sideMenu = ! sideMenu">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M1 6H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M1 11H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div class="w-[30%] hidden md:block">
                            <form action="#">
                                <div class="w-[250px] relative">
                                    <input class="input h-12 w-full pr-[45px]" type="text"
                                        placeholder="Search Here..." />
                                    <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                                        <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-6">
                        <div class="md:hidden">
                            <button
                                class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-textBody border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight"
                                x-on:click="searchOverlay = ! searchOverlay">
                                <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="relative" x-data="{ notificationTable: false }">
                            <button x-on:click="notificationTable = ! notificationTable"
                                class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-gray border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight">
                                <svg class="-translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="16" height="16">
                                    <g>
                                        <path stroke="currentColor"
                                            d="M23.259,16.2l-2.6-9.371A9.321,9.321,0,0,0,2.576,7.3L.565,16.35A3,3,0,0,0,3.493,20H7.1a5,5,0,0,0,9.8,0h3.47a3,3,0,0,0,2.89-3.8ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm9.165-4.395a.993.993,0,0,1-.8.395H3.493a1,1,0,0,1-.976-1.217l2.011-9.05a7.321,7.321,0,0,1,14.2-.372l2.6,9.371A.993.993,0,0,1,21.165,17.605Z" />
                                    </g>
                                </svg>
                                <span
                                    class="w-[20px] h-[20px] inline-block bg-danger rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white text-xs leading-[18px] font-medium text-white">05</span>
                            </button>
                            <div x-show="notificationTable" x-on:click.outside="notificationTable = false"
                                x-transition:enter="transition ease-out duration-200 origin-top"
                                x-transition:enter-start="opacity-0 scale-y-90"
                                x-transition:enter-end="opacity-100 scale-y-100"
                                x-transition:leave="transition ease-in duration-200 origin-top"
                                x-transition:leave-start="opacity-100 scale-y-200"
                                x-transition:leave-end="opacity-0 scale-y-90"
                                class="absolute w-[280px] sm:w-[350px] h-[285px] overflow-y-scroll overflow-item top-full -right-[60px] sm:right-0 shadow-lg rounded-md bg-white py-5 px-5">
                                <div
                                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                                    <div class="flex items-center space-x-3">
                                        <div class="">
                                            <img class="w-[40px] h-[40px] rounded-md"
                                                src="assets/img/product/prodcut-1.jpg" alt="img" />
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
                                            <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor"
                                                    d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                                    <div class="flex items-center space-x-3">
                                        <div class="">
                                            <img class="w-[40px] h-[40px] rounded-md"
                                                src="assets/img/product/prodcut-2.jpg" alt="img" />
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
                                            <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor"
                                                    d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                                    <div class="flex items-center space-x-3">
                                        <div class="">
                                            <img class="w-[40px] h-[40px] rounded-md"
                                                src="assets/img/product/prodcut-3.jpg" alt="img" />
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
                                            <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor"
                                                    d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                                    <div class="flex items-center space-x-3">
                                        <div class="">
                                            <img class="w-[40px] h-[40px] rounded-md"
                                                src="assets/img/product/prodcut-4.jpg" alt="img" />
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
                                            <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor"
                                                    d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0">
                                    <div class="flex items-center space-x-3">
                                        <div class="">
                                            <img class="w-[40px] h-[40px] rounded-md"
                                                src="assets/img/product/prodcut-5.jpg" alt="img" />
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
                                            <svg class="-translate-y-[3px]" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="16" height="16">
                                                <path fill="currentColor"
                                                    d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative w-[70%] flex justify-end items-center" x-data="{ userOption: false }">
                            <button class="relative" type="button" x-on:click="userOption = ! userOption">
                                <img class="w-[40px] h-[40px] rounded-md" src="assets/img/users/user-10.jpg" alt="" />
                                <span
                                    class="w-[12px] h-[12px] inline-block bg-green-500 rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white"></span>
                            </button>
                            <div x-show="userOption" x-on:click.outside="userOption = false"
                                x-transition:enter="transition ease-out duration-200 origin-top"
                                x-transition:enter-start="opacity-0 scale-y-90"
                                x-transition:enter-end="opacity-100 scale-y-100"
                                x-transition:leave="transition ease-in duration-200 origin-top"
                                x-transition:leave-start="opacity-100 scale-y-200"
                                x-transition:leave-end="opacity-0 scale-y-90"
                                class="absolute w-[280px] top-full right-0 shadow-lg rounded-md bg-white py-5 px-5">
                                <div class="flex items-center space-x-3 border-b border-gray pb-3 mb-2">
                                    <div class="">
                                        <img class="w-[50px] h-[50px] rounded-md" src="assets/img/users/user-10.jpg"
                                            alt="" />
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
                                        <a href="index.html"
                                            class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="profile.html"
                                            class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                                            Account Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html"
                                            class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- search -->
                <div class="fixed top-0 left-0 w-full bg-white p-10 z-50 transition-transform duration-300 md:hidden"
                    :class="searchOverlay ? 'translate-y-[0px]' : ' -translate-y-[230px] lg:translate-y-[0]'">
                    <form action="#">
                        <div class="relative mb-3">
                            <input class="input h-12 w-full pr-[45px]" type="text" placeholder="Search Here..." />
                            <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                                <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="">
                        <span class="text-tiny mr-2">Keywords :</span>
                        <a href="#"
                            class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Customer</a>
                        <a href="#"
                            class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Product</a>
                        <a href="#"
                            class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Orders</a>
                    </div>
                </div>
                <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300"
                    :class="searchOverlay ? 'visible opacity-1' : '  invisible opacity-0 '"
                    x-on:click="searchOverlay = ! searchOverlay"></div>
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
                            <span
                                class="inline-block w-12 h-12 mr-5 rounded-full bg-green-200 text-green-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor"
                                            d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
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
                            <span
                                class="inline-block w-12 h-12 mr-5 rounded-full bg-orange-200 text-orange-600 leading-[3rem] text-center text-xl">
                                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 469.333 469.333">
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
                            <span
                                class="inline-block w-12 h-12 mr-5 rounded-full bg-blue-200 text-blue-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor"
                                            d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
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
                            <span
                                class="inline-block w-12 h-12 mr-5 rounded-full bg-teal-200 text-teal-600 leading-[3rem] text-center text-xl">
                                <svg height="16" viewBox="0 0 512 512" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentColor"
                                            d="m256 4.8c-138.3 0-251 112.5-251 251s112.5 251 251 251 251-112.5 251-251-112.7-251-251-251zm84.1 343c-5.4 10.2-12.8 18.7-21.7 25.5-9 6.6-19 11.5-30.2 14.9-3.1.9-6.3 1.8-9.5 2.3v15.1c0 12.6-10.2 22.8-22.8 22.8s-23-10.2-23-23v-13.8c-7-1.1-14-2.5-20.7-4.5-13.3-4-24.8-10.6-35.2-18-4.5-3.1-10.4-10.1-10.4-10.1-2.3-2.3-5.4-6.1-5.4-14.2 0-11.7 9.5-21.4 21-21.2 7.7 0 15.1 6.3 15.1 6.3 7.5 6.1 11.7 9.9 19.2 13.1 11 4.9 23.7 7.2 37.7 7.2 8.6 0 16.7-1.6 24.3-4.7 7.2-3.1 13.1-7.4 17.8-12.9 4.3-5.4 6.5-11.9 6.5-19.8 0-10.2-3.8-19-11.3-27.1-7.7-8.1-20.8-13.1-39.2-15.3-17.6-1.8-33.4-6.3-46.7-13.3-13.5-7-24.3-16.4-31.6-27.7-7.4-11.3-11.1-24.4-11.1-38.8 0-15.6 4.5-29.3 13.1-40.6 8.6-11 20.1-19.6 34.5-25.3 7.2-2.9 14.6-5.2 22.5-6.6v-15.3c0-12.6 10.2-22.8 22.8-22.8s23 10.2 23 23v14.7c5.7.9 11 2.3 15.8 4.1 10.8 4 20.1 9.7 27.8 16.9 4.3 4.1 8.3 8.6 11.9 13.5.5.7 1.3 1.4 1.8 2.2 2.3 3.2 3.6 7.4 3.6 11.9 0 11.7-11.7 20.1-21.2 21-9 .9-17.4-9.3-17.4-9.3-3.8-4.9-8.1-9-13.1-12.4-7.5-5-18.1-7.7-31.6-7.9-14.4-.2-26.2 2.7-35.6 8.8-8.6 5.6-12.8 13.5-12.8 24.6 0 5.7 1.3 11.5 4 16.9 2.5 5 7.5 9.7 14.9 13.8 7.7 4.3 19.6 7.4 35 9.2 25.9 2.5 46.7 10.8 62.3 24.6 16 14 24.1 33.1 24.1 56.6-.1 13.5-2.8 25.4-8.2 35.6z" />
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
                            <a href="transaction.html"
                                class="leading-none text-base text-info border-b border-info border-dotted capitalize font-medium hover:text-info/60 hover:border-info/60">View
                                All</a>
                        </div>
                        <div class="space-y-5">
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full w-10 h-10" src="assets/img/users/user-6.jpg"
                                            alt="avatar" />
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
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full w-10 h-10" src="assets/img/users/user-7.jpg"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <h4 class="text-base text-slate-700 mb-[6px] leading-none">
                                            Shahnewaz
                                        </h4>
                                        <p class="text-sm text-slate-400 line-clamp-1 m-0 leading-none">
                                            Jan 15, 2023 - 10:30 AM
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-danger mb-0">$-80.40</p>
                            </div>
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full w-10 h-10" src="assets/img/users/user-8.jpg"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <h4 class="text-base text-slate-700 mb-[6px] leading-none">
                                            Steve Smith
                                        </h4>
                                        <p class="text-sm text-slate-400 line-clamp-1 m-0 leading-none">
                                            Feb 01, 2023 - 07:05 PM
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-success mb-0">$150.00</p>
                            </div>
                            <div class="flex flex-wrap items-center justify-between">
                                <div class="m-2 mb:sm-0 flex items-center space-x-3">
                                    <div class="avatar">
                                        <img class="rounded-full w-10 h-10" src="assets/img/users/user-9.jpg"
                                            alt="avatar" />
                                    </div>
                                    <div>
                                        <h4 class="text-base text-slate-700 mb-[6px] leading-none">
                                            Robert Downy
                                        </h4>
                                        <p class="text-sm text-slate-400 line-clamp-1 m-0 leading-none">
                                            Feb 21, 2023 - 11:22 PM
                                        </p>
                                    </div>
                                </div>
                                <p class="font-medium text-success mb-0">$1482.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 col-span-12 xl:col-span-8 2xl:col-span-6 rounded-md">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-medium tracking-wide text-slate-700 text-lg mb-0 leading-none">
                                Recent Orders
                            </h3>
                            <a href="order-list.html"
                                class="leading-none text-base text-info border-b border-info border-dotted capitalize font-medium hover:text-info/60 hover:border-info/60">View
                                All</a>
                        </div>

                        <!-- table -->
                        <div class="overflow-scroll 2xl:overflow-visible">
                            <div class="w-[700px] 2xl:w-full">
                                <table class="w-full text-base text-left text-gray-500">
                                    <thead class="bg-white">
                                        <tr class="border-b border-gray6 text-tiny">
                                            <th scope="col"
                                                class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Item
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Product ID
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Price
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-14">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Apple
                                                    MacBook Pro 17"</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #XY-25G
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $2999.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium">Active</span>
                                            </td>
                                            <td class="px-3 py-3 w-14">
                                                <button
                                                    class="bg-info/10 text-info hover:bg-info hover:text-white inline-block text-center leading-5 text-tiny font-medium py-2 px-4 rounded-md">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Gigabyte
                                                    Gaming Monitor 4K</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #JK-10A
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $599.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-danger px-3 py-1 rounded-md leading-none bg-danger/10 font-medium">Disabled</span>
                                            </td>
                                            <td class="px-3 py-3 w-14">
                                                <button
                                                    class="bg-info/10 text-info hover:bg-info hover:text-white inline-block text-center leading-5 text-tiny font-medium py-2 px-4 rounded-md">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Logitech
                                                    G502 Hero Mouse</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #LG-502
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $1199.59
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-warning px-3 py-1 rounded-md leading-none bg-warning/10 font-medium">Disabled</span>
                                            </td>
                                            <td class="px-3 py-3 w-14">
                                                <button
                                                    class="bg-info/10 text-info hover:bg-info hover:text-white inline-block text-center leading-5 text-tiny font-medium py-2 px-4 rounded-md">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Galaxy
                                                    S22 Ultra Gray</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #GL-S22
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $1800.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium">Active</span>
                                            </td>
                                            <td class="px-3 py-3 w-14">
                                                <button
                                                    class="bg-info/10 text-info hover:bg-info hover:text-white inline-block text-center leading-5 text-tiny font-medium py-2 px-4 rounded-md">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
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
                                            <input class="input h-9 w-full pr-12" type="text"
                                                placeholder="Search Here..." />
                                            <button
                                                class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                                                <svg class="-translate-y-px" width="13" height="13" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M18.9999 19L14.6499 14.65" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                            <th scope="col"
                                                class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Item
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Product ID
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Category
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Price
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Status
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] 2xl:w-[12%]">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Apple
                                                    MacBook Pro 17"</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #XY-25G
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                Computer
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $2999.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium">Active</span>
                                            </td>
                                            <td class="px-3 py-3">
                                                <div class="flex items-center space-x-2">
                                                    <button
                                                        class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" height="10"
                                                                viewBox="0 0 492.49284 492" width="10"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="currentColor"
                                                                    d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                <path fill="currentColor"
                                                                    d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                            </svg>
                                                        </span>
                                                        Edit
                                                    </button>
                                                    <button
                                                        class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" width="10" height="10"
                                                                viewBox="0 0 20 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Gigabyte
                                                    Gaming Monitor 4K</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #JK-10A
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                Monitor
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $599.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-danger px-3 py-1 rounded-md leading-none bg-danger/10 font-medium">Disabled</span>
                                            </td>
                                            <td class="px-3 py-3">
                                                <div class="flex items-center space-x-2">
                                                    <button
                                                        class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" height="10"
                                                                viewBox="0 0 492.49284 492" width="10"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="currentColor"
                                                                    d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                <path fill="currentColor"
                                                                    d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                            </svg>
                                                        </span>
                                                        Edit
                                                    </button>
                                                    <button
                                                        class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]"><svg
                                                                class="-translate-y-px" width="12" height="12"
                                                                viewBox="0 0 20 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z"
                                                                    fill="currentColor" />
                                                            </svg></span>
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Logitech
                                                    G502 Hero Mouse</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #LG-502
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                Accessories
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $1199.59
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-warning px-3 py-1 rounded-md leading-none bg-warning/10 font-medium">Pending</span>
                                            </td>
                                            <td class="px-3 py-3">
                                                <div class="flex items-center space-x-2">
                                                    <button
                                                        class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" height="10"
                                                                viewBox="0 0 492.49284 492" width="10"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="currentColor"
                                                                    d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                <path fill="currentColor"
                                                                    d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                            </svg>
                                                        </span>
                                                        Edit
                                                    </button>
                                                    <button
                                                        class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]"><svg
                                                                class="-translate-y-px" width="12" height="12"
                                                                viewBox="0 0 20 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z"
                                                                    fill="currentColor" />
                                                            </svg></span>
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                            <td class="pr-8 whitespace-nowrap">
                                                <a href="#" class="font-medium text-heading text-hover-primary">Samsung
                                                    EVO 500 GB SSD</a>
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                #SM-520
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                Hard Disk
                                            </td>
                                            <td class="px-3 py-3 font-normal text-slate-600">
                                                $250.00
                                            </td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="text-[11px] text-info px-3 py-1 rounded-md leading-none bg-info/10 font-medium">Delivered</span>
                                            </td>
                                            <td class="px-3 py-3">
                                                <div class="flex items-center space-x-2">
                                                    <button
                                                        class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" height="10"
                                                                viewBox="0 0 492.49284 492" width="10"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill="currentColor"
                                                                    d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                <path fill="currentColor"
                                                                    d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                            </svg>
                                                        </span>
                                                        Edit
                                                    </button>
                                                    <button
                                                        class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                        <span
                                                            class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                            <svg class="-translate-y-px" width="12" height="12"
                                                                viewBox="0 0 20 22" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        Delete
                                                    </button>
                                                </div>
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