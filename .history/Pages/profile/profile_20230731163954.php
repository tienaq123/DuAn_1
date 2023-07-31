<?php session_start();
?>
<?php ob_start(); ?>
<?php require_once(__DIR__ . "/../../database/config.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN Cake</title>
  <link rel="shortcut icon" href="./../Public/img/favicon/favicon.ico" type="image/x-icon" />

  <!-- css links -->
  <!--START CSS-->
  <link rel="stylesheet" href="css/style.css" />
  <!--main-->
  <link rel="stylesheet" href="css/grid.css" />
  <!--grid-->
  <link rel="stylesheet" href="css/responsive.css" />
  <!--grid-->
  <link rel="stylesheet" href="css/isotope.css" />
  <!-- Detail -->
  <link rel="stylesheet" href="css/detail.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!--isotope-->
  <link rel="stylesheet" href="css/prettyPhoto.css" media="screen" />

  <!--END CSS-->

  <!--FAVICONS-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="img/favicon/favicon.ico" />
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
  <link rel="stylesheet" href="../../Admin/assets/css/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/choices.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/apexcharts.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/quill.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/rangeslider.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/custom.css" />
  <link rel="stylesheet" href="../../Admin/assets/css/main.css" />
</head>
<style>
  #all {
    display: flex;
    flex-direction: column;
  }
</style>

<body>
  <div id="all">
    <?php
    include '../../Template/header.php'
    ?>
    <div>




      <div style="margin: auto; padding: 50px 200px;" class="body-content px-8 py-8 bg-slate-100">
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
                  <div class="mb-5">
                    <p class="mb-0 text-base text-black">Address</p>
                    <textarea class="input w-full h-[200px] py-4 rounded-md border border-gray6 px-6 text-base resize-none text-black" placeholder="Bio">Address</textarea>
                  </div>
                  <div class="text-end mt-5">
                    <button class="tp-btn px-10 py-2">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 2xl:col-span-4">
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
    <div class="sectioncopyright">
      <p>Copyright</p>
    </div>

    <script src="../../Admin/assets/js/alpine.js"></script>
    <script src="../../Admin/assets/js/perfect-scrollbar.js"></script>
    <script src="../../Admin/assets/js/choices.js"></script>
    <script src="../../Admin/assets/js/chart.js"></script>
    <script src="../../Admin/assets/js/apexchart.js"></script>
    <script src="../../Admin/assets/js/quill.js"></script>
    <script src="../../Admin/assets/js/rangeslider.min.js"></script>
    <script src="../../Admin/assets/js/main.js"></script>
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--Jquery-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--pretty photo-->
</body>

</html>