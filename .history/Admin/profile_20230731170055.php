<?php ob_start(); ?>
<?php require_once './../database/config.php';  ?>
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

      <div style="margin: auto; padding: 50px 200px;" class="body-content px-8 py-8 bg-slate-100">
        <div class="flex justify-between mb-10">
          <div class="page-title">
            <h3 class="mb-0 text-[28px]">My Profile</h3>
          </div>
        </div>

        <!-- content here -->


        <?php
        // Khởi đầu session và kết nối database

        // Xử lý cập nhật thông tin và mật khẩu
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          if (isset($_POST['update_profile'])) {
            // Xử lý cập nhật thông tin
            $fullname = $_POST['fullname'];
            $number_phone = $_POST['number_phone'];
            $address = $_POST['address'];

            // Cập nhật thông tin vào database
            $user_id = $_SESSION["user_id"];
            $sql = "UPDATE User SET fullname='$fullname', phone_number='$number_phone', address='$address' WHERE id=$user_id";

            if ($conn->query($sql) === true) {
              echo "Cập nhật thông tin thành công.";
              // Cập nhật thông tin trong session nếu cần
              $_SESSION["username"] = $fullname;
              $_SESSION["phone_number"] = $number_phone;
              $_SESSION["address"] = $address;
            } else {
              echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
          }

          if (isset($_POST['update_password'])) {
            // Xử lý cập nhật mật khẩu
            $old_password = $_POST['old_password'];
            $new_password = $_POST['new_password'];
            $confirm_new_password = $_POST['confirm_new_password'];

            // Kiểm tra mật khẩu cũ có đúng không
            $user_id = $_SESSION["user_id"];
            $sql = "SELECT password FROM User WHERE id=$user_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $hashed_password = $row['password'];
              if (password_verify($old_password, $hashed_password)) {
                // Mật khẩu cũ đúng, kiểm tra mật khẩu mới và xác nhận
                if ($new_password === $confirm_new_password) {
                  // Mã hóa mật khẩu mới
                  $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

                  // Cập nhật mật khẩu vào database
                  $sql = "UPDATE User SET password='$hashed_new_password' WHERE id=$user_id";

                  if ($conn->query($sql) === true) {
                    echo "Cập nhật mật khẩu thành công.";
                  } else {
                    echo "Lỗi: " . $sql . "<br>" . $conn->error;
                  }
                } else {
                  echo "Mật khẩu mới và xác nhận mật khẩu không khớp.";
                }
              } else {
                echo "Mật khẩu cũ không đúng.";
              }
            }
          }
        }

        // Đóng kết nối
        $conn->close();
        ?>
        <div class="">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-8">
              <div class="py-10 px-10 bg-white rounded-md">
                <h5 class="text-xl mb-6">Basic Information</h5>
                <form method="post">
                  <div class="">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                      <div class="mb-5">
                        <p class="mb-0 text-base text-black">Full Name</p>
                        <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="text" id="fullname" name="fullname" value="<?php echo $_SESSION["username"]; ?>" required />
                      </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                      <div class="mb-5">
                        <p class="mb-0 text-base text-black">Phone</p>
                        <input class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="number" id="number_phone" name="number_phone" value="<?php echo $_SESSION["phone_number"]; ?>" required />
                      </div>
                    </div>
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">Address</p>
                      <textarea class="input w-full h-[200px] py-4 rounded-md border border-gray6 px-6 text-base resize-none text-black" id="address" name="address" value="<?php echo $_SESSION["address"]; ?>" required><?php echo $_SESSION["address"]; ?></textarea>
                    </div>
                    <div class="text-end mt-5">
                      <button type="submit" name="update_profile" class="tp-btn px-10 py-2">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-span-12 2xl:col-span-4">
              <div class="py-10 px-10 bg-white rounded-md">
                <h5 class="text-xl mb-6">Security</h5>
                <form method="post">
                  <div class="">
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">Current Passowrd</p>
                      <input required class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" id="old_password" name="old_password" />
                    </div>
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">New Passowrd</p>
                      <input required class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" id="new_password" name="new_password" />
                    </div>
                    <div class="mb-5">
                      <p class="mb-0 text-base text-black">Confirm Passowrd</p>
                      <input required class="input w-full h-[49px] rounded-md border border-gray6 px-6 text-base text-black" type="password" id="confirm_new_password" name="confirm_new_password" />
                    </div>
                    <div class="text-end mt-5">
                      <button type="submit" name="update_password" class="tp-btn px-10 py-2">Save</button>
                    </div>
                  </div>
                </form>
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

</html>