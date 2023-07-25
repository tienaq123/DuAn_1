<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from weblearnbd.net/tphtml/ebazer/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:53 GMT -->

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

      <!-- Header Admin -->
      <?php
      include '../Template/header_admin.php'
      ?>

      <div class="body-content px-8 py-8 bg-slate-100">
        <div class="flex justify-between mb-10">
          <div class="page-title">
            <h3 class="mb-0 text-[28px]">My Profile</h3>
          </div>
        </div>

        <!-- content here -->



        <div class="">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-8">
              <div class="py-10 px-10 bg-white rounded-md">
                <h5 class="text-xl mb-6">Basic Information</h5>

                <div class="">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">First Name</p>
                      <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="text" placeholder="Name" value="Shahnewaz" />
                    </div>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">Phone</p>
                      <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="text" placeholder="Phone" value="+9542 145 657" />
                    </div>
                  </div>

                  <div class="text-end mt-5">
                    <button class="tp-btn px-10 py-2">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 2xl:col-span-4">
              <div class="py-10 px-10 bg-white rounded-md mb-6">
                <h5 class="text-xl mb-6">Notification</h5>

                <div class="space-y-3 flex flex-col">
                  <div class="tp-checkbox flex items-center mb-3 sm:mb-0">
                    <input id="follows" type="checkbox" />
                    <label for="follows">Like & Follows Notifications</label>
                  </div>
                  <div class="tp-checkbox flex items-center mb-3 sm:mb-0">
                    <input id="comments" type="checkbox" />
                    <label for="comments">Post, Comments & Replies Notifications</label>
                  </div>
                  <div class="tp-checkbox flex items-center mb-3 sm:mb-0">
                    <input id="order" type="checkbox" />
                    <label for="order">New Order Notifications</label>
                  </div>
                </div>
              </div>
              <div class="py-10 px-10 bg-white rounded-md">
                <h5 class="text-xl mb-6">Security</h5>

                <div class="">
                  <div class="mb-5">
                    <p class="mb-0 text-base text-black">Current Passowrd</p>
                    <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" placeholder="Current Passowrd" value="123456" />
                  </div>
                  <div class="mb-5">
                    <p class="mb-0 text-base text-black">New Passowrd</p>
                    <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" placeholder="New Password" value="123456" />
                  </div>
                  <div class="mb-5">
                    <p class="mb-0 text-base text-black">Confirm Passowrd</p>
                    <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" placeholder="Confirm Password" value="123456" />
                  </div>
                  <div class="text-end mt-5">
                    <button class="tp-btn px-10 py-2">Save</button>
                  </div>
                </div>
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

<!-- Mirrored from weblearnbd.net/tphtml/ebazer/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jul 2023 14:34:54 GMT -->

</html>