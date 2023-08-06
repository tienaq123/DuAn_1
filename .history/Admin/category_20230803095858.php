<?php ob_start(); ?>
<?php require_once './../database/config.php';  ?>
<?php require_once('./delete_item.php') ?>
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
      <?php
      include '../Template/header_admin.php'
      ?>

      <div class="body-content px-8 py-8 bg-slate-100">
        <div class="grid grid-cols-12">
          <div class="col-span-10">
            <div class="flex justify-between mb-10 items-end">
              <div class="page-title">
                <h3 class="mb-0 text-[28px]">Category</h3>
                <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                  <li class="breadcrumb-item text-muted">
                    <a href="index.php" class="text-hover-primary">
                      Home</a>
                  </li>
                  <li class="breadcrumb-item flex items-center">
                    <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                  </li>
                  <li class="breadcrumb-item text-muted">Category List</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- add Category -->
        <?php
        // Kiểm tra xem người dùng đã nhấn nút "Add Category" hay chưa
        if (isset($_POST['add_category'])) {
          if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
          }
          $name = $_POST['category_name'];
          // Chuẩn bị truy vấn SQL để thêm danh mục vào bảng Category
          $sql = "INSERT INTO Category (name) VALUES ('$name')";
          // Thực thi truy vấn
          if (mysqli_query($conn, $sql)) {
            header("Location: category.php");
          } else {
            echo "Lỗi: " . mysqli_error($conn);
          }
        }
        ?>

        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 lg:col-span-4">
            <div class="mb-6 bg-white px-8 py-8 rounded-md">
              <div class="mb-6">
                <h3 style="text-align: center; font-weight: 600; color: #333;" class="mb-2 text-black">Create new category</h3>
              </div>
              <form method="post">
                <!-- input -->
                <div class="mb-6">
                  <p class="mb-0 text-base text-black">Name</p>
                  <input required class="input w-full h-[44px] rounded-md border border-gray6 px-6 text-base" type="text" name="category_name" placeholder="Name" />
                </div>

                <button type="submit" name="add_category" class="tp-btn px-7 py-2">Add Category</button>
              </form>
            </div>
          </div>
          <!-- End add cate -->
          <div class="col-span-12 lg:col-span-8">
            <div class="relative overflow-x-auto bg-white px-8 py-4 rounded-md">
              <div class="overflow-scroll 2xl:overflow-visible">
                <div class="w-[975px] 2xl:w-full">

                  <table class="w-full text-base text-left text-gray-500">
                    <thead>
                      <tr class="border-b border-gray6 text-tiny">
                        <th width="20%" scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold ">
                          ID
                        </th>
                        <th width="30%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px]">
                          Name
                        </th>
                        <th width="25%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[150px] text-end">
                          Items
                        </th>
                        <th width="25%" scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[13%] text-end">
                          Action
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $sql = "SELECT * FROM Category WHERE deleted = 0";
                      // Thực thi truy vấn
                      $result = mysqli_query($conn, $sql);

                      // Kiểm tra xem có bản ghi trả về không
                      if (mysqli_num_rows($result) > 0) {
                        // Hiển thị danh sách danh mục lên giao diện
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
                            <td class="px-3 py-3 font-normal text-[#55585B]">
                              <?php echo "#" . $row['id']; ?>
                            </td>
                            <td class="pr-8 py-5 whitespace-nowrap">
                              <a href="#" class="flex items-center space-x-5">
                                <span class="font-medium text-heading text-hover-primary transition"><?php echo $row['name']; ?></span>
                              </a>
                            </td>

                            <td class="px-3 py-3 font-normal text-[#55585B] text-end">
                              <?php
                              // Đếm số lượng sản phẩm thuộc danh mục này và hiển thị
                              $categoryId = $row['id'];
                              $countProductsSql = "SELECT COUNT(*) AS count FROM Product WHERE category_id = $categoryId";
                              $countProductsResult = mysqli_query($conn, $countProductsSql);
                              $countProductsRow = mysqli_fetch_assoc($countProductsResult);
                              echo $countProductsRow['count'];
                              ?>
                            </td>
                            <td class="px-9 py-3 text-end">
                              <div class="flex items-center justify-end space-x-2">

                                <!-- Edit Category form -->
                                <div class="relative" x-data="{ editTooltip: false }">
                                  <a href="edit_category.php?id=<?php echo $row['id'] ?>">
                                    <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">

                                      <svg class="-translate-y-[2px]" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                        <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                      </svg>

                                    </button>
                                  </a>
                                </div>

                                <!-- Delete Category form -->
                                <form method="post" action="delete_item.php?action=delete_category">
                                  <input type="hidden" name="category_id" value="<?php echo $row['id'] ?>">
                                  <div class="relative" x-data="{ deleteTooltip: false }">
                                    <button type="submit" name="delete_category" class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                                      <box-icon type='solid' name='trash'></box-icon>
                                    </button>
                                    <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                                      <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                                      <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </td>
                          </tr>
                      <?php
                        }
                      } else {
                        echo "<tr><td colspan='5'>Không có danh mục nào.</td></tr>";
                      }
                      mysqli_close($conn);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
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