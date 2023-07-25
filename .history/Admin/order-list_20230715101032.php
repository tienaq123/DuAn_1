<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from weblearnbd.net/tphtml/ebazer/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:51 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eBazer - Tailwind CSS eCommerce Admin Template</title>
    <link
      rel="shortcut icon"
      href="assets/img/logo/favicon.png"
      type="image/x-icon"
    />

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
    <div
      class="tp-main-wrapper bg-slate-100 h-screen"
      x-data="{ sideMenu: false }"
    >
      <aside
        class="w-[300px] lg:w-[250px] xl:w-[300px] border-r border-gray overflow-y-scroll sidebar-scrollbar fixed left-0 top-0 h-full bg-white z-50 transition-transform duration-300"
        :class="sideMenu ? 'translate-x-[0px]' : ' -translate-x-[300px] lg:translate-x-[0]'"
      >
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
                <a
                  @click="nav !== 0 ? nav = 0 : nav = null"
                  :class="nav == 0 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                  href="index.html"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-2 hover:bg-gray sidebar-link-active"
                >
                  <span class="inline-block mr-[10px] text-xl">
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z"
                      />
                      <path
                        fill="currentColor"
                        d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z"
                      />
                      <path
                        fill="currentColor"
                        d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z"
                      />
                      <path
                        fill="currentColor"
                        d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z"
                      />
                    </svg>
                  </span>
                  Dashboard
                </a>
              </li>
              <li>
                <a
                  @click="nav !== 1 ? nav = 1 : nav = null"
                  :class="nav == 1 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                  href="javascript:void(0);"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active"
                >
                  <span
                    class="inline-block translate-y-[1px] mr-[10px] text-xl"
                  >
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M23.621,6.836l-1.352-2.826c-.349-.73-.99-1.296-1.758-1.552L14.214,.359c-1.428-.476-3-.476-4.428,0L3.49,2.458c-.769,.256-1.41,.823-1.759,1.554L.445,6.719c-.477,.792-.567,1.742-.247,2.609,.309,.84,.964,1.49,1.802,1.796l-.005,6.314c-.002,2.158,1.372,4.066,3.418,4.748l4.365,1.455c.714,.238,1.464,.357,2.214,.357s1.5-.119,2.214-.357l4.369-1.457c2.043-.681,3.417-2.585,3.419-4.739l.005-6.32c.846-.297,1.508-.946,1.819-1.79,.317-.858,.228-1.799-.198-2.499ZM10.419,2.257c1.02-.34,2.143-.34,3.162,0l4.248,1.416-5.822,1.95-5.834-1.95,4.246-1.415ZM2.204,7.666l1.327-2.782c.048,.025,7.057,2.373,7.057,2.373l-1.621,3.258c-.239,.398-.735,.582-1.173,.434l-5.081-1.693c-.297-.099-.53-.325-.639-.619-.109-.294-.078-.616,.129-.97Zm3.841,12.623c-1.228-.409-2.052-1.554-2.051-2.848l.005-5.648,3.162,1.054c1.344,.448,2.792-.087,3.559-1.371l.278-.557-.005,10.981c-.197-.04-.391-.091-.581-.155l-4.366-1.455Zm11.897-.001l-4.37,1.457c-.19,.063-.384,.115-.581,.155l.005-10.995,.319,.64c.556,.928,1.532,1.459,2.561,1.459,.319,0,.643-.051,.96-.157l3.161-1.053-.005,5.651c0,1.292-.826,2.435-2.052,2.844Zm4-11.644c-.105,.285-.331,.504-.619,.6l-5.118,1.706c-.438,.147-.934-.035-1.136-.365l-1.655-3.323s7.006-2.351,7.054-2.377l1.393,2.901c.157,.261,.186,.574,.081,.859Z"
                      />
                    </svg>
                  </span>
                  Products

                  <span
                    class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4"
                    :class="nav == 1 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'"
                  >
                    <svg
                      class="-translate-y-[5px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z"
                      />
                    </svg>
                  </span>
                </a>
                <ul x-show="nav == 1" class="pl-[42px] pr-[20px] pb-3">
                  <li>
                    <a
                      href="product-list.html"
                      class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot"
                      >Product List</a
                    >
                  </li>
                  <li>
                    <a
                      href="add-product.html"
                      class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot"
                      >Add Product</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a
                  href="category.html"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active"
                >
                  <span
                    class="inline-block translate-y-[1px] mr-[10px] text-xl"
                  >
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"
                      />
                      <circle fill="currentColor" cx="7" cy="22" r="2" />
                      <circle fill="currentColor" cx="17" cy="22" r="2" />
                    </svg>
                  </span>
                  Categories
                </a>
              </li>
              <li>
                <a
                  href="order-list.html"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active"
                >
                  <span
                    class="inline-block translate-y-[1px] mr-[10px] text-xl"
                  >
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="m11.349,24H0V3C0,1.346,1.346,0,3,0h12c1.654,0,3,1.346,3,3v5.059c-.329-.036-.662-.059-1-.059s-.671.022-1,.059V3c0-.552-.448-1-1-1H3c-.552,0-1,.448-1,1v19h7.518c.506.756,1.125,1.429,1.831,2Zm0-14h-7.349v2h5.518c.506-.756,1.125-1.429,1.831-2Zm-7.349,7h4c0-.688.084-1.356.231-2h-4.231v2Zm20,0c0,3.859-3.141,7-7,7s-7-3.141-7-7,3.141-7,7-7,7,3.141,7,7Zm-2,0c0-2.757-2.243-5-5-5s-5,2.243-5,5,2.243,5,5,5,5-2.243,5-5ZM14,5H4v2h10v-2Zm5.589,9.692l-3.228,3.175-1.63-1.58-1.393,1.436,1.845,1.788c.314.315.733.489,1.179.489s.865-.174,1.173-.482l3.456-3.399-1.402-1.426Z"
                      />
                    </svg>
                  </span>
                  Order
                </a>
              </li>
              <li class="hidden">
                <a
                  @click="nav !== 3 ? nav = 3 : nav = null"
                  :class="nav == 3 ? 'bg-themeLight hover:bg-themeLight text-theme' : ''"
                  href="javascript:void(0);"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active"
                >
                  <span
                    class="inline-block translate-y-[1px] mr-[10px] text-xl"
                  >
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Zm6,13A6,6,0,0,0,6,23a1,1,0,0,0,2,0,4,4,0,0,1,8,0,1,1,0,0,0,2,0ZM18,8a4,4,0,1,1,4-4A4,4,0,0,1,18,8Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,18,2Zm6,13a6.006,6.006,0,0,0-6-6,1,1,0,0,0,0,2,4,4,0,0,1,4,4,1,1,0,0,0,2,0ZM6,8a4,4,0,1,1,4-4A4,4,0,0,1,6,8ZM6,2A2,2,0,1,0,8,4,2,2,0,0,0,6,2ZM2,15a4,4,0,0,1,4-4A1,1,0,0,0,6,9a6.006,6.006,0,0,0-6,6,1,1,0,0,0,2,0Z"
                      />
                    </svg>
                  </span>
                  Customers

                  <span
                    class="absolute right-4 top-[52%] transition-transform duration-300 origin-center w-4 h-4"
                    :class="nav == 3 ? 'translate-y-[-10px] rotate-90' : 'translate-y-[-10px]'"
                  >
                    <svg
                      class="-translate-y-[5px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="M15.4,9.88,10.81,5.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L14,11.29a1,1,0,0,1,0,1.42L9.4,17.29a1,1,0,0,0,1.41,1.42l4.59-4.59A3,3,0,0,0,15.4,9.88Z"
                      />
                    </svg>
                  </span>
                </a>
                <ul x-show="nav == 3" class="pl-[42px] pr-[20px] pb-3">
                  <li>
                    <a
                      href="customer-list.html"
                      class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot"
                      >Customers List</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block font-normal w-full text-[#6D6F71] hover:text-theme nav-dot"
                      >Customer Details</a
                    >
                  </li>
                </ul>
              </li>

              <li>
                <a
                  href="profile.html"
                  class="group rounded-md relative text-black text-lg font-medium inline-flex items-center w-full transition-colors ease-in-out duration-300 px-5 py-[9px] mb-3 hover:bg-gray sidebar-link-active"
                >
                  <span
                    class="inline-block translate-y-[1px] mr-[10px] text-xl"
                  >
                    <svg
                      class="-translate-y-[4px]"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="16"
                      height="16"
                    >
                      <path
                        fill="currentColor"
                        d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z"
                      />
                    </svg>
                  </span>
                  Profile
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>

      <div
        class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300"
        :class="sideMenu ? 'visible opacity-1' : '  invisible opacity-0 '"
        x-on:click="sideMenu = ! sideMenu"
      ></div>

      <div
        class="tp-main-content lg:ml-[250px] xl:ml-[300px] w-[calc(100% - 300px)]"
        x-data="{ searchOverlay: false }"
      >
        <header
          class="relative z-10 bg-white border-b border-gray border-solid py-5 px-8 pr-8"
        >
          <div class="flex justify-between">
            <div class="flex items-center space-x-6 lg:space-x-0">
              <button
                type="button"
                class="block lg:hidden text-2xl text-black"
                x-on:click="sideMenu = ! sideMenu"
              >
                <svg
                  width="20"
                  height="12"
                  viewBox="0 0 20 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1 1H19"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="M1 6H19"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="M1 11H19"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
              <div class="w-[30%] hidden md:block">
                <form action="#">
                  <div class="w-[250px] relative">
                    <input
                      class="input h-12 w-full pr-[45px]"
                      type="text"
                      placeholder="Search Here..."
                    />
                    <button
                      class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme"
                    >
                      <svg
                        class="-translate-y-[2px]"
                        width="16"
                        height="16"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M18.9999 19L14.6499 14.65"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
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
                  x-on:click="searchOverlay = ! searchOverlay"
                >
                  <svg
                    class="-translate-y-[2px]"
                    width="16"
                    height="16"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M18.9999 19L14.6499 14.65"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>
              <div class="relative" x-data="{ notificationTable: false }">
                <button
                  x-on:click="notificationTable = ! notificationTable"
                  class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-gray border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight"
                >
                  <svg
                    class="-translate-y-[1px]"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <g>
                      <path
                        stroke="currentColor"
                        d="M23.259,16.2l-2.6-9.371A9.321,9.321,0,0,0,2.576,7.3L.565,16.35A3,3,0,0,0,3.493,20H7.1a5,5,0,0,0,9.8,0h3.47a3,3,0,0,0,2.89-3.8ZM12,22a3,3,0,0,1-2.816-2h5.632A3,3,0,0,1,12,22Zm9.165-4.395a.993.993,0,0,1-.8.395H3.493a1,1,0,0,1-.976-1.217l2.011-9.05a7.321,7.321,0,0,1,14.2-.372l2.6,9.371A.993.993,0,0,1,21.165,17.605Z"
                      />
                    </g>
                  </svg>
                  <span
                    class="w-[20px] h-[20px] inline-block bg-danger rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white text-xs leading-[18px] font-medium text-white"
                    >05</span
                  >
                </button>
                <div
                  x-show="notificationTable"
                  x-on:click.outside="notificationTable = false"
                  x-transition:enter="transition ease-out duration-200 origin-top"
                  x-transition:enter-start="opacity-0 scale-y-90"
                  x-transition:enter-end="opacity-100 scale-y-100"
                  x-transition:leave="transition ease-in duration-200 origin-top"
                  x-transition:leave-start="opacity-100 scale-y-200"
                  x-transition:leave-end="opacity-0 scale-y-90"
                  class="absolute w-[280px] sm:w-[350px] h-[285px] overflow-y-scroll overflow-item top-full -right-[60px] sm:right-0 shadow-lg rounded-md bg-white py-5 px-5"
                >
                  <div
                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0"
                  >
                    <div class="flex items-center space-x-3">
                      <div class="">
                        <img
                          class="w-[40px] h-[40px] rounded-md"
                          src="assets/img/product/prodcut-1.jpg"
                          alt="img"
                        />
                      </div>
                      <div class="">
                        <h5 class="text-base mb-0 leading-none">
                          Green shirt for women
                        </h5>
                        <span class="text-tiny leading-none"
                          >Jan 21, 2023 08:30 AM</span
                        >
                      </div>
                    </div>
                    <div class="">
                      <button class="hover:text-danger">
                        <svg
                          class="-translate-y-[3px]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="16"
                          height="16"
                        >
                          <path
                            fill="currentColor"
                            d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0"
                  >
                    <div class="flex items-center space-x-3">
                      <div class="">
                        <img
                          class="w-[40px] h-[40px] rounded-md"
                          src="assets/img/product/prodcut-2.jpg"
                          alt="img"
                        />
                      </div>
                      <div class="">
                        <h5 class="text-base mb-0 leading-none">
                          Red School Bag
                        </h5>
                        <span class="text-tiny leading-none"
                          >Jan 25, 2023 10:05 PM</span
                        >
                      </div>
                    </div>
                    <div class="">
                      <button class="hover:text-danger">
                        <svg
                          class="-translate-y-[3px]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="16"
                          height="16"
                        >
                          <path
                            fill="currentColor"
                            d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0"
                  >
                    <div class="flex items-center space-x-3">
                      <div class="">
                        <img
                          class="w-[40px] h-[40px] rounded-md"
                          src="assets/img/product/prodcut-3.jpg"
                          alt="img"
                        />
                      </div>
                      <div class="">
                        <h5 class="text-base mb-0 leading-none">
                          Shoe for men
                        </h5>
                        <span class="text-tiny leading-none"
                          >Feb 20, 2023 05:00 PM</span
                        >
                      </div>
                    </div>
                    <div class="">
                      <button class="hover:text-danger">
                        <svg
                          class="-translate-y-[3px]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="16"
                          height="16"
                        >
                          <path
                            fill="currentColor"
                            d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0"
                  >
                    <div class="flex items-center space-x-3">
                      <div class="">
                        <img
                          class="w-[40px] h-[40px] rounded-md"
                          src="assets/img/product/prodcut-4.jpg"
                          alt="img"
                        />
                      </div>
                      <div class="">
                        <h5 class="text-base mb-0 leading-none">
                          Yellow Bag for women
                        </h5>
                        <span class="text-tiny leading-none"
                          >Feb 10, 2023 11:15 AM</span
                        >
                      </div>
                    </div>
                    <div class="">
                      <button class="hover:text-danger">
                        <svg
                          class="-translate-y-[3px]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="16"
                          height="16"
                        >
                          <path
                            fill="currentColor"
                            d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div
                    class="flex items-center justify-between last:border-0 border-b border-gray pb-4 mb-4 last:pb-0 last:mb-0"
                  >
                    <div class="flex items-center space-x-3">
                      <div class="">
                        <img
                          class="w-[40px] h-[40px] rounded-md"
                          src="assets/img/product/prodcut-5.jpg"
                          alt="img"
                        />
                      </div>
                      <div class="">
                        <h5 class="text-base mb-0 leading-none">
                          Blavk Bag for women
                        </h5>
                        <span class="text-tiny leading-none"
                          >Feb 15, 2023 01:20 PM</span
                        >
                      </div>
                    </div>
                    <div class="">
                      <button class="hover:text-danger">
                        <svg
                          class="-translate-y-[3px]"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="16"
                          height="16"
                        >
                          <path
                            fill="currentColor"
                            d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="relative w-[70%] flex justify-end items-center"
                x-data="{ userOption: false }"
              >
                <button
                  class="relative"
                  type="button"
                  x-on:click="userOption = ! userOption"
                >
                  <img
                    class="w-[40px] h-[40px] rounded-md"
                    src="assets/img/users/user-10.jpg"
                    alt=""
                  />
                  <span
                    class="w-[12px] h-[12px] inline-block bg-green-500 rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white"
                  ></span>
                </button>
                <div
                  x-show="userOption"
                  x-on:click.outside="userOption = false"
                  x-transition:enter="transition ease-out duration-200 origin-top"
                  x-transition:enter-start="opacity-0 scale-y-90"
                  x-transition:enter-end="opacity-100 scale-y-100"
                  x-transition:leave="transition ease-in duration-200 origin-top"
                  x-transition:leave-start="opacity-100 scale-y-200"
                  x-transition:leave-end="opacity-0 scale-y-90"
                  class="absolute w-[280px] top-full right-0 shadow-lg rounded-md bg-white py-5 px-5"
                >
                  <div
                    class="flex items-center space-x-3 border-b border-gray pb-3 mb-2"
                  >
                    <div class="">
                      <img
                        class="w-[50px] h-[50px] rounded-md"
                        src="assets/img/users/user-10.jpg"
                        alt=""
                      />
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
                      <a
                        href="index.html"
                        class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base"
                        >Dashboard</a
                      >
                    </li>
                    <li>
                      <a
                        href="profile.html"
                        class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base"
                      >
                        Account Settings
                      </a>
                    </li>
                    <li>
                      <a
                        href="login.html"
                        class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base"
                      >
                        Logout
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- search -->
          <div
            class="fixed top-0 left-0 w-full bg-white p-10 z-50 transition-transform duration-300 md:hidden"
            :class="searchOverlay ? 'translate-y-[0px]' : ' -translate-y-[230px] lg:translate-y-[0]'"
          >
            <form action="#">
              <div class="relative mb-3">
                <input
                  class="input h-12 w-full pr-[45px]"
                  type="text"
                  placeholder="Search Here..."
                />
                <button
                  class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme"
                >
                  <svg
                    class="-translate-y-[2px]"
                    width="16"
                    height="16"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M18.9999 19L14.6499 14.65"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>
            </form>
            <div class="">
              <span class="text-tiny mr-2">Keywords :</span>
              <a
                href="#"
                class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme"
                >Customer</a
              >
              <a
                href="#"
                class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme"
                >Product</a
              >
              <a
                href="#"
                class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme"
                >Orders</a
              >
            </div>
          </div>
          <div
            class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300"
            :class="searchOverlay ? 'visible opacity-1' : '  invisible opacity-0 '"
            x-on:click="searchOverlay = ! searchOverlay"
          ></div>
        </header>

        <div class="body-content px-8 py-8 bg-slate-100">
          <div class="flex justify-between mb-10">
            <div class="page-title">
              <h3 class="mb-0 text-[28px]">Order List</h3>
              <ul
                class="text-tiny font-medium flex items-center space-x-3 text-text3"
              >
                <li class="breadcrumb-item text-muted">
                  <a href="product-list.html" class="text-hover-primary">
                    Home</a
                  >
                </li>
                <li class="breadcrumb-item flex items-center">
                  <span
                    class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"
                  ></span>
                </li>
                <li class="breadcrumb-item text-muted">Order List</li>
              </ul>
            </div>
          </div>

          <!-- table -->
          <div class="bg-white rounded-t-md rounded-b-md shadow-xs py-4">
            <div
              class="tp-search-box flex items-center justify-between px-8 py-8 flex-wrap"
            >
              <div class="search-input relative">
                <input
                  class="input h-[44px] w-full pl-14"
                  type="text"
                  placeholder="Search by order id"
                />
                <button
                  class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme"
                >
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M18.9999 19L14.6499 14.65"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>
              <div class="flex justify-end space-x-6">
                <div class="search-select mr-3 flex items-center space-x-3">
                  <span
                    class="text-tiny inline-block leading-none -translate-y-[2px]"
                    >Status :
                  </span>
                  <select>
                    <option>Delivered</option>
                    <option>Pending</option>
                    <option>Refunded</option>
                    <option>Denied</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="relative overflow-x-auto mx-8">
              <table
                class="w-[1500px] 2xl:w-full text-base text-left text-gray-500"
              >
                <thead class="bg-white">
                  <tr class="border-b border-gray6 text-tiny">
                    <th
                      scope="col"
                      class="py-3 text-tiny text-text2 uppercase font-semibold w-[3%]"
                    >
                      <div class="tp-checkbox -translate-y-[3px]">
                        <input id="selectAllProduct" type="checkbox" />
                        <label for="selectAllProduct"></label>
                      </div>
                    </th>
                    <th
                      scope="col"
                      class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold w-[170px]"
                    >
                      Order ID
                    </th>
                    <th
                      scope="col"
                      class="px-3 py-3 text-tiny text-text2 uppercase font-semibold"
                    >
                      Customer
                    </th>
                    <th
                      scope="col"
                      class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end"
                    >
                      QTY
                    </th>
                    <th
                      scope="col"
                      class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end"
                    >
                      Total
                    </th>
                    <th
                      scope="col"
                      class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end"
                    >
                      Status
                    </th>
                    <th
                      scope="col"
                      class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end"
                    >
                      Date
                    </th>
                    <th
                      scope="col"
                      class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] text-end"
                    >
                      Action
                    </th>
                    <th
                      scope="col"
                      class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[4%] text-end"
                    >
                      Invoice
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    class="bg-white border-b border-gray6 last:border-0 text-start mx-9"
                  >
                    <td class="pr-3 whitespace-nowrap">
                      <div class="tp-checkbox">
                        <input id="product-1" type="checkbox" />
                        <label for="product-1"></label>
                      </div>
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B]">
                      #479063DR
                    </td>
                    <td class="pr-8 py-5 whitespace-nowrap">
                      <a
                        href="#"
                        class="flex items-center space-x-5 text-hover-primary text-heading"
                      >
                        <img
                          class="w-[50px] h-[50px] rounded-full"
                          src="assets/img/users/user-10.jpg"
                          alt=""
                        />
                        <span class="font-medium">William Watson</span>
                      </a>
                    </td>

                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      2
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      $171.00
                    </td>
                    <td class="px-3 py-3 text-end">
                      <span
                        class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end"
                        >Delivered</span
                      >
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      16 Jan, 2023
                    </td>

                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ editTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600"
                            x-on:mouseenter="editTooltip = true"
                            x-on:mouseleave="editTooltip = false"
                          >
                            View Details
                          </button>
                          <div
                            x-show="editTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Details</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ printTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="printTooltip = true"
                            x-on:mouseleave="printTooltip = false"
                          >
                            <svg
                              class="-translate-y-px"
                              width="16"
                              height="16"
                              viewBox="0 0 32 32"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill="currentColor"
                                d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z"
                              />
                              <path
                                fill="currentColor"
                                d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z"
                              />
                              <path
                                fill="currentColor"
                                d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z"
                              />
                            </svg>
                          </button>
                          <div
                            x-show="printTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Print</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                        <div class="relative" x-data="{ viewTooltip: false }">
                          <a
                            href="order-details.html"
                            class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="viewTooltip = true"
                            x-on:mouseleave="viewTooltip = false"
                          >
                            <svg
                              width="16"
                              height="16"
                              xmlns="http://www.w3.org/2000/svg"
                              x="0px"
                              y="0px"
                              viewBox="0 0 488.85 488.85"
                            >
                              <path
                                fill="currentColor"
                                d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"
                              />
                            </svg>
                          </a>
                          <div
                            x-show="viewTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >View</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="bg-white border-b border-gray6 last:border-0 text-start mx-9"
                  >
                    <td class="pr-3 whitespace-nowrap">
                      <div class="tp-checkbox">
                        <input id="product-2" type="checkbox" />
                        <label for="product-2"></label>
                      </div>
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B]">
                      #19893507
                    </td>
                    <td class="pr-8 py-5 whitespace-nowrap">
                      <a
                        href="#"
                        class="flex items-center space-x-5 text-hover-primary text-heading"
                      >
                        <img
                          class="w-[50px] h-[50px] rounded-full"
                          src="assets/img/users/user-8.jpg"
                          alt=""
                        />
                        <span class="font-medium">Shahnewaz Sakil</span>
                      </a>
                    </td>

                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      5
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      $1044.00
                    </td>
                    <td class="px-3 py-3 text-end">
                      <span
                        class="text-[11px] text-danger px-3 py-1 rounded-md leading-none bg-danger/10 font-medium text-end"
                        >Denied</span
                      >
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      18 Feb, 2023
                    </td>

                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ editTooltip: false }">
                          <a
                            href="order-details.html"
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600 inline-block"
                            x-on:mouseenter="editTooltip = true"
                            x-on:mouseleave="editTooltip = false"
                          >
                            View Details
                          </a>
                          <div
                            x-show="editTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Details</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ printTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="printTooltip = true"
                            x-on:mouseleave="printTooltip = false"
                          >
                            <svg
                              class="-translate-y-px"
                              width="16"
                              height="16"
                              viewBox="0 0 32 32"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill="currentColor"
                                d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z"
                              />
                              <path
                                fill="currentColor"
                                d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z"
                              />
                              <path
                                fill="currentColor"
                                d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z"
                              />
                            </svg>
                          </button>
                          <div
                            x-show="printTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Print</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                        <div class="relative" x-data="{ viewTooltip: false }">
                          <a
                            href="order-details.html"
                            class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="viewTooltip = true"
                            x-on:mouseleave="viewTooltip = false"
                          >
                            <svg
                              width="16"
                              height="16"
                              xmlns="http://www.w3.org/2000/svg"
                              x="0px"
                              y="0px"
                              viewBox="0 0 488.85 488.85"
                            >
                              <path
                                fill="currentColor"
                                d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"
                              />
                            </svg>
                          </a>
                          <div
                            x-show="viewTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >View</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="bg-white border-b border-gray6 last:border-0 text-start mx-9"
                  >
                    <td class="pr-3 whitespace-nowrap">
                      <div class="tp-checkbox">
                        <input id="product-3" type="checkbox" />
                        <label for="product-3"></label>
                      </div>
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B]">
                      #26BC663E
                    </td>
                    <td class="pr-8 py-5 whitespace-nowrap">
                      <a
                        href="#"
                        class="flex items-center space-x-5 text-hover-primary text-heading"
                      >
                        <img
                          class="w-[50px] h-[50px] rounded-full"
                          src="assets/img/users/user-7.jpg"
                          alt=""
                        />
                        <span class="font-medium">Bootstrap Turner</span>
                      </a>
                    </td>

                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      7
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      $542.00
                    </td>
                    <td class="px-3 py-3 text-end">
                      <span
                        class="text-[11px] text-indigo-500 px-3 py-1 rounded-md leading-none bg-indigo-100 font-medium text-end"
                        >Refunded</span
                      >
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      25 Jan, 2023
                    </td>

                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ editTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600"
                            x-on:mouseenter="editTooltip = true"
                            x-on:mouseleave="editTooltip = false"
                          >
                            View Details
                          </button>
                          <div
                            x-show="editTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Details</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ printTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="printTooltip = true"
                            x-on:mouseleave="printTooltip = false"
                          >
                            <svg
                              class="-translate-y-px"
                              width="16"
                              height="16"
                              viewBox="0 0 32 32"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill="currentColor"
                                d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z"
                              />
                              <path
                                fill="currentColor"
                                d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z"
                              />
                              <path
                                fill="currentColor"
                                d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z"
                              />
                            </svg>
                          </button>
                          <div
                            x-show="printTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Print</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                        <div class="relative" x-data="{ viewTooltip: false }">
                          <a
                            href="order-details.html"
                            class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="viewTooltip = true"
                            x-on:mouseleave="viewTooltip = false"
                          >
                            <svg
                              width="16"
                              height="16"
                              xmlns="http://www.w3.org/2000/svg"
                              x="0px"
                              y="0px"
                              viewBox="0 0 488.85 488.85"
                            >
                              <path
                                fill="currentColor"
                                d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"
                              />
                            </svg>
                          </a>
                          <div
                            x-show="viewTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >View</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="bg-white border-b border-gray6 last:border-0 text-start mx-9"
                  >
                    <td class="pr-3 whitespace-nowrap">
                      <div class="tp-checkbox">
                        <input id="product-4" type="checkbox" />
                        <label for="product-4"></label>
                      </div>
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B]">
                      #373F9567
                    </td>
                    <td class="pr-8 py-5 whitespace-nowrap">
                      <a
                        href="#"
                        class="flex items-center space-x-5 text-hover-primary text-heading"
                      >
                        <img
                          class="w-[50px] h-[50px] rounded-full"
                          src="assets/img/users/user-6.jpg"
                          alt=""
                        />
                        <span class="font-medium">Robert Downy</span>
                      </a>
                    </td>

                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      15
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      $1450.00
                    </td>
                    <td class="px-3 py-3 text-end">
                      <span
                        class="text-[11px] text-warning px-3 py-1 rounded-md leading-none bg-warning/10 font-medium text-end"
                        >Pending</span
                      >
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      10 Feb, 2023
                    </td>

                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ editTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600"
                            x-on:mouseenter="editTooltip = true"
                            x-on:mouseleave="editTooltip = false"
                          >
                            View Details
                          </button>
                          <div
                            x-show="editTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Details</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ printTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="printTooltip = true"
                            x-on:mouseleave="printTooltip = false"
                          >
                            <svg
                              class="-translate-y-px"
                              width="16"
                              height="16"
                              viewBox="0 0 32 32"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill="currentColor"
                                d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z"
                              />
                              <path
                                fill="currentColor"
                                d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z"
                              />
                              <path
                                fill="currentColor"
                                d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z"
                              />
                            </svg>
                          </button>
                          <div
                            x-show="printTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Print</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                        <div class="relative" x-data="{ viewTooltip: false }">
                          <a
                            href="order-details.html"
                            class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="viewTooltip = true"
                            x-on:mouseleave="viewTooltip = false"
                          >
                            <svg
                              width="16"
                              height="16"
                              xmlns="http://www.w3.org/2000/svg"
                              x="0px"
                              y="0px"
                              viewBox="0 0 488.85 488.85"
                            >
                              <path
                                fill="currentColor"
                                d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"
                              />
                            </svg>
                          </a>
                          <div
                            x-show="viewTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >View</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr
                    class="bg-white border-b border-gray6 last:border-0 text-start mx-9"
                  >
                    <td class="pr-3 whitespace-nowrap">
                      <div class="tp-checkbox">
                        <input id="product-5" type="checkbox" />
                        <label for="product-5"></label>
                      </div>
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B]">
                      #AD6ACDB9
                    </td>
                    <td class="pr-8 py-5 whitespace-nowrap">
                      <a
                        href="#"
                        class="flex items-center space-x-5 text-hover-primary text-heading"
                      >
                        <img
                          class="w-[50px] h-[50px] rounded-full"
                          src="assets/img/users/user-5.jpg"
                          alt=""
                        />
                        <span class="font-medium">Dr. Stephene</span>
                      </a>
                    </td>

                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      1
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      $540.00
                    </td>
                    <td class="px-3 py-3 text-end">
                      <span
                        class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-end"
                        >Delivered</span
                      >
                    </td>
                    <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                      24 Jan, 2023
                    </td>

                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ editTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600"
                            x-on:mouseenter="editTooltip = true"
                            x-on:mouseleave="editTooltip = false"
                          >
                            View Details
                          </button>
                          <div
                            x-show="editTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Details</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-9 py-3 text-end">
                      <div class="flex items-center justify-end space-x-2">
                        <div class="relative" x-data="{ printTooltip: false }">
                          <button
                            class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="printTooltip = true"
                            x-on:mouseleave="printTooltip = false"
                          >
                            <svg
                              class="-translate-y-px"
                              width="16"
                              height="16"
                              viewBox="0 0 32 32"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                fill="currentColor"
                                d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z"
                              />
                              <path
                                fill="currentColor"
                                d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z"
                              />
                              <path
                                fill="currentColor"
                                d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z"
                              />
                            </svg>
                          </button>
                          <div
                            x-show="printTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >Print</span
                            >
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                        <div class="relative" x-data="{ viewTooltip: false }">
                          <a
                            href="order-details.html"
                            class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white"
                            x-on:mouseenter="viewTooltip = true"
                            x-on:mouseleave="viewTooltip = false"
                          >
                            <svg
                              width="16"
                              height="16"
                              xmlns="http://www.w3.org/2000/svg"
                              x="0px"
                              y="0px"
                              viewBox="0 0 488.85 488.85"
                            >
                              <path
                                fill="currentColor"
                                d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z"
                              />
                            </svg>
                          </a>
                          <div
                            x-show="viewTooltip"
                            class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1"
                          >
                            <span
                              class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block"
                              >View</span
                            >
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
              <p class="mb-0 text-tiny">Showing 10 items of 120</p>
              <div
                class="pagination py-3 flex justify-end items-center sm:mx-8"
              >
                <a
                  href="#"
                  class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme"
                >
                  <svg
                    class="-translate-y-[2px] -translate-x-px"
                    width="12"
                    height="12"
                    viewBox="0 0 12 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11.9209 1.50495C11.9206 1.90264 11.7623 2.28392 11.4809 2.56495L3.80895 10.237C3.57673 10.4691 3.39252 10.7447 3.26684 11.0481C3.14117 11.3515 3.07648 11.6766 3.07648 12.005C3.07648 12.3333 3.14117 12.6585 3.26684 12.9618C3.39252 13.2652 3.57673 13.5408 3.80895 13.773L11.4709 21.435C11.7442 21.7179 11.8954 22.0968 11.892 22.4901C11.8885 22.8834 11.7308 23.2596 11.4527 23.5377C11.1746 23.8158 10.7983 23.9735 10.405 23.977C10.0118 23.9804 9.63285 23.8292 9.34995 23.556L1.68795 15.9C0.657711 14.8677 0.0791016 13.4689 0.0791016 12.0105C0.0791016 10.552 0.657711 9.15322 1.68795 8.12095L9.35995 0.443953C9.56973 0.234037 9.83706 0.0910666 10.1281 0.0331324C10.4192 -0.0248017 10.7209 0.00490445 10.9951 0.118492C11.2692 0.232079 11.5036 0.424443 11.6684 0.671242C11.8332 0.918041 11.9211 1.20818 11.9209 1.50495Z"
                      fill="currentColor"
                    />
                  </svg>
                </a>
                <a
                  href="#"
                  class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme"
                  >2</a
                >
                <a
                  href="#"
                  class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border mr-2 last:mr-0 text-white bg-theme border-theme hover:bg-theme hover:text-white hover:border-theme"
                  >3</a
                >
                <a
                  href="#"
                  class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme"
                  >4</a
                >
                <a
                  href="#"
                  class="inline-block rounded-md w-10 h-10 text-center leading-[33px] border border-gray mr-2 last:mr-0 hover:bg-theme hover:text-white hover:border-theme"
                >
                  <svg
                    class="-translate-y-px"
                    width="12"
                    height="12"
                    viewBox="0 0 12 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0.0790405 22.5C0.0793906 22.1023 0.237656 21.7211 0.519041 21.44L8.19104 13.768C8.42326 13.5359 8.60747 13.2602 8.73314 12.9569C8.85882 12.6535 8.92351 12.3284 8.92351 12C8.92351 11.6717 8.85882 11.3465 8.73314 11.0432C8.60747 10.7398 8.42326 10.4642 8.19104 10.232L0.52904 2.56502C0.255803 2.28211 0.104612 1.90321 0.108029 1.50992C0.111447 1.11662 0.269201 0.740401 0.547313 0.462289C0.825425 0.184177 1.20164 0.0264236 1.59494 0.0230059C1.98823 0.0195883 2.36714 0.17078 2.65004 0.444017L10.312 8.10502C11.3423 9.13728 11.9209 10.5361 11.9209 11.9945C11.9209 13.4529 11.3423 14.8518 10.312 15.884L2.64004 23.556C2.43056 23.7656 2.16368 23.9085 1.87309 23.9666C1.58249 24.0247 1.2812 23.9954 1.00723 23.8824C0.733259 23.7695 0.498891 23.5779 0.333699 23.3319C0.168506 23.0858 0.0798928 22.7964 0.0790405 22.5Z"
                      fill="currentColor"
                    />
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

  <!-- Mirrored from weblearnbd.net/tphtml/ebazer/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:51 GMT -->
</html>
