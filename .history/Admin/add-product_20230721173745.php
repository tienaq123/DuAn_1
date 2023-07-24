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
    <aside class="w-[300px] lg:w-[250px] xl:w-[300px] border-r border-gray overflow-y-scroll sidebar-scrollbar fixed left-0 top-0 h-full bg-white z-50 transition-transform duration-300" :class="sideMenu ? 'translate-x-[0px]' : ' -translate-x-[300px] lg:translate-x-[0]'">
      <div class="">
        <div style="text-align: center; overflow: hidden; height: auto;" class="py-4 pb-8 px-8 border-b border-gray h-[78px]">
          <a href="index.html">
            <img style="width: 100px;height: 130px;" class="w-[140px]" src="assets/img/logo/logo.png" alt="" />
          </a>
        </div>
        <div class="px-4 py-5" x-data="{nav:null}">
          <ul>
            <li>
              <a @click="nav !== 0 ? nav = 0 : nav = null" :class="nav == 0 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''" href="index.html" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-2 hover:bg-gray sidebar-link-active">
                <span class="inline-block mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                    <path fill="currentColor" d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                    <path fill="currentColor" d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                    <path fill="currentColor" d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                  </svg>
                </span>
                Dashboard
              </a>
            </li>
            <li>
              <a @click="nav !== 1 ? nav = 1 : nav = null" :class="nav == 1 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''" href="javascript:void(0);" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M23.621,6.836l-1.352-2.826c-.349-.73-.99-1.296-1.758-1.552L14.214,.359c-1.428-.476-3-.476-4.428,0L3.49,2.458c-.769,.256-1.41,.823-1.759,1.554L.445,6.719c-.477,.792-.567,1.742-.247,2.609,.309,.84,.964,1.49,1.802,1.796l-.005,6.314c-.002,2.158,1.372,4.066,3.418,4.748l4.365,1.455c.714,.238,1.464,.357,2.214,.357s1.5-.119,2.214-.357l4.369-1.457c2.043-.681,3.417-2.585,3.419-4.739l.005-6.32c.846-.297,1.508-.946,1.819-1.79,.317-.858,.228-1.799-.198-2.499ZM10.419,2.257c1.02-.34,2.143-.34,3.162,0l4.248,1.416-5.822,1.95-5.834-1.95,4.246-1.415ZM2.204,7.666l1.327-2.782c.048,.025,7.057,2.373,7.057,2.373l-1.621,3.258c-.239,.398-.735,.582-1.173,.434l-5.081-1.693c-.297-.099-.53-.325-.639-.619-.109-.294-.078-.616,.129-.97Zm3.841,12.623c-1.228-.409-2.052-1.554-2.051-2.848l.005-5.648,3.162,1.054c1.344,.448,2.792-.087,3.559-1.371l.278-.557-.005,10.981c-.197-.04-.391-.091-.581-.155l-4.366-1.455Zm11.897-.001l-4.37,1.457c-.19,.063-.384,.115-.581,.155l.005-10.995,.319,.64c.556,.928,1.532,1.459,2.561,1.459,.319,0,.643-.051,.96-.157l3.161-1.053-.005,5.651c0,1.292-.826,2.435-2.052,2.844Zm4-11.644c-.105,.285-.331,.504-.619,.6l-5.118,1.706c-.438,.147-.934-.035-1.136-.365l-1.655-3.323s7.006-2.351,7.054-2.377l1.393,2.901c.157,.261,.186,.574,.081,.859Z" />
                  </svg>
                </span>
                Products

                <span class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4" :class="nav == 1 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'">
                  <svg class="-translate-y-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z" />
                  </svg>
                </span>
              </a>
              <ul x-show="nav == 1" class="pl-[42px] pr-[20px] pb-3">
                <li>
                  <a href="product-list.html" class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Product List</a>
                </li>
                <li>
                  <a href="add-product.html" class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Add Product</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="category.html" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z" />
                    <circle fill="currentColor" cx="7" cy="22" r="2" />
                    <circle fill="currentColor" cx="17" cy="22" r="2" />
                  </svg>
                </span>
                Categories
              </a>
            </li>
            <li>
              <a href="order-list.html" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="m11.349,24H0V3C0,1.346,1.346,0,3,0h12c1.654,0,3,1.346,3,3v5.059c-.329-.036-.662-.059-1-.059s-.671.022-1,.059V3c0-.552-.448-1-1-1H3c-.552,0-1,.448-1,1v19h7.518c.506.756,1.125,1.429,1.831,2Zm0-14h-7.349v2h5.518c.506-.756,1.125-1.429,1.831-2Zm-7.349,7h4c0-.688.084-1.356.231-2h-4.231v2Zm20,0c0,3.859-3.141,7-7,7s-7-3.141-7-7,3.141-7,7-7,7,3.141,7,7Zm-2,0c0-2.757-2.243-5-5-5s-5,2.243-5,5,2.243,5,5,5,5-2.243,5-5ZM14,5H4v2h10v-2Zm5.589,9.692l-3.228,3.175-1.63-1.58-1.393,1.436,1.845,1.788c.314.315.733.489,1.179.489s.865-.174,1.173-.482l3.456-3.399-1.402-1.426Z" />
                  </svg>
                </span>
                Order
              </a>
            </li>
            <li class="hidden">
              <a @click="nav !== 3 ? nav = 3 : nav = null" :class="nav == 3 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''" href="javascript:void(0);" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z" />
                  </svg>
                </span>
                Customers

                <span class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4" :class="nav == 3 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'">
                  <svg class="-translate-y-[5px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z" />
                  </svg>
                </span>
              </a>
              <ul x-show="nav == 3" class="pl-[42px] pr-[20px] pb-3">
                <li>
                  <a href="customer-list.html" class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Customers List</a>
                </li>
                <li>
                  <a href="#" class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot">Customer
                    Details</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="profile.html" class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active">
                <span class="inline-block translate-y-[1px] mr-[10px] text-xl">
                  <svg class="-translate-y-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                    <path fill="currentColor" d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z" />
                  </svg>
                </span>
                Profile
              </a>
            </li>
          </ul>
        </div>
      </div>
    </aside>

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
        // Kiểm tra xem người dùng đã nhấn nút "Publish" hay chưa
        if (isset($_POST['publish_product'])) {
          // Gọi hàm addProduct để thêm sản phẩm vào database
          addProduct($conn, $_POST);
        }
        ?>
        <div class="grid grid-cols-12">
          <div class="col-span-12 2xl:col-span-10" x-data="{ addProductTab: 1 }">
            <div class="mb-3 hidden">
              <div class="flex items-center bg-white rounded-md px-4 py-3">
                <button class="text-base py-1 px-5 rounded-md border-b border-transparent" @click="addProductTab = 1" :class="addProductTab == 1 ? 'bg-theme text-white' : ' bg-white text-textBody'">
                  General
                </button>
                <button class="text-base py-1 px-5 rounded-md" @click="addProductTab = 2" :class="addProductTab == 2 ? 'bg-theme text-white' : 'text-textBody bg-white'">
                  Advanced
                </button>
              </div>
            </div>
            <div class="">
              <!-- general tab content -->
              <div class="" x-show="addProductTab === 1">
                <div class="grid grid-cols-12 gap-6 mb-6">
                  <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
                    <div class="mb-6 bg-white px-8 py-8 rounded-md">
                      <h4 class="text-[22px]">General</h4>
                      <!-- input -->
                      <div class="mb-5">
                        <p class="mb-0 text-base text-black">
                          Product Name <span class="text-red">*</span>
                        </p>
                        <input class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" placeholder="Product name" />
                        <span class="text-tiny">A product name is required and recommended to be
                          unique.</span>
                      </div>
                      <div class="mb-5">
                        <p class="mb-0 text-base text-black">Description</p>
                        <div class="min-h-[200px]" id="editor"></div>
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
                        <form action="#">
                          <input type="file" id="productImage" class="hidden" />
                          <label for="productImage" class="text-tiny w-full inline-block py-1 px-4 rounded-md border border-gray6 text-center hover:cursor-pointer hover:bg-theme hover:text-white hover:border-theme transition">Upload
                            Image</label>
                        </form>
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

                <button class="tp-btn px-10 py-2 mb-2">Publish</button>

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