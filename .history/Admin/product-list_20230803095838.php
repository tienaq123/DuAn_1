<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<?php require_once('./search_product.php') ?>
<?php require_once('./delete_item.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>List Product</title>
  <link rel="shortcut icon" href="./../Public/img/favicon/favicon.ico" type="image/x-icon" />

  <!-- css links -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <div class="flex justify-between mb-10">
          <div class="page-title">
            <h3 class="mb-0 text-[28px]">Products</h3>
            <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
              <li class="breadcrumb-item text-muted">
                <a href="index.php" class="text-hover-primary">
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
              <input class="input h-[44px] w-full pl-14" type="text" id="searchKeyword" placeholder="Search by product name" />
              <button class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme" id="searchButton">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>


            <!--  -->
            <script>
              // Lắng nghe sự kiện click vào nút tìm kiếm
              document.getElementById("searchButton").addEventListener("click", function() {
                // Lấy từ khóa tìm kiếm từ input
                var keyword = document.getElementById("searchKeyword").value;

                // Gửi yêu cầu tìm kiếm đến máy chủ bằng Ajax
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    // Khi máy chủ trả về kết quả tìm kiếm, hiển thị danh sách sản phẩm
                    document.getElementById("searchResults").innerHTML = this.responseText;
                  }
                };
                xhttp.open("GET", "./search_product.php?keyword=" + encodeURIComponent(keyword), true);
                xhttp.send();
              });
            </script>
            <!--  -->
            <div class="flex justify-end space-x-6">
              <div class="product-add-btn flex">
                <a style="padding: 10px 25px;" href="add-product.php" class="tp-btn">Add Product</a>
              </div>
            </div>
          </div>
          <div class="relative overflow-x-auto mx-8">
            <div id="searchResults">
              <!-- Danh sách sản phẩm tìm thấy sẽ được hiển thị ở đây -->
            </div>
            <table class="w-full text-base text-left text-gray-500">
              <thead class="bg-white">
                <tr class="border-b border-gray6 text-tiny">
                  <!-- <th scope="col" class="py-3 text-tiny text-text2 uppercase font-semibold w-[3%]">
                    <div class="tp-checkbox -translate-y-[3px]">
                      <input id="selectAllProduct" type="checkbox" />
                      <label for="selectAllProduct"></label>
                    </div>
                  </th> -->
                  <th width="25%" scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                    Product
                  </th>
                  <th width="10%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Id
                  </th>
                  <th width="10%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Price
                  </th>
                  <th width="10%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Old price
                  </th>
                  <th width="10%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Category
                  </th>
                  <th width="20%" scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-end">
                    Created at
                  </th>
                  <th width="15%" scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[12%] text-end">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>


                <?php
                // Lấy danh sách sản phẩm từ database

                $sql = "SELECT p.*, c.name AS category_name 
                FROM Product p
                INNER JOIN Category c ON p.category_id = c.id
                WHERE p.deleted = 0";
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

                    // Hiển thị thông tin sản phẩm trong mẫu HTML
                    echo '<tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">';
                    echo '<td class="pr-8 py-5 whitespace-nowrap">';
                    echo '<a href="#" class="flex items-center space-x-5">';
                    echo '<img class="w-[60px] h-[60px] rounded-md" src="' . $thumbnail . '" alt="" />';
                    echo '<span class="font-medium text-heading text-hover-primary transition">' . $title . '</span>';
                    echo '</a>';
                    echo '</td>';
                    echo '<td class="px-3 py-3 font-normal text-[#55585B] text-end">';
                    echo '#' . $product_id;
                    echo '</td>';
                    echo '<td class="px-3 py-3 font-normal text-[#55585B] text-end">';
                    echo $formattedPrice;
                    echo '</td>';
                    echo '<td class="px-3 py-3 font-normal text-[#55585B] text-end">';
                    echo $formattedOld_Price;
                    echo '</td>';
                    echo '<td class="px-3 py-3 font-normal text-[#55585B] text-end">';
                    echo $category;
                    echo '</td>';
                    echo '<td class="px-3 py-3 font-normal text-[#55585B] text-end">';
                    echo $created_at;
                    echo '</td>';
                    echo '<td class="px-9 py-3 text-end">';
                    echo '<div class="flex items-center justify-end space-x-2">';

                    echo '
                    <div class="flex items-center justify-center space-x-2">
                      <!-- Edit Category form -->
                      <div class="relative" x-data="{ editTooltip: false }">
                      <a href="edit-product.php?id=' . $product_id . '">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-[2px]" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        </a>
                        
                      </div>

                      <form method="post" action="delete_item.php?action=delete_product">
                      <input type="hidden" name="product_id" value="' . $product_id . '">
                        <div class="relative" x-data="{ deleteTooltip: false }">
                          <button type="submit" name="delete_category" class="w-10 h-10 leading-[33px] text-tiny bg-white border border-gray text-slate-600 rounded-md hover:bg-danger hover:border-danger hover:text-white" x-on:mouseenter="deleteTooltip = true" x-on:mouseleave="deleteTooltip = false">
                          <box-icon id="icon-delete" type="solid" name="trash"></box-icon>
                          </button>
                          <div x-show="deleteTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                            <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Delete</span>
                            <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                          </div>
                        </div>
                      </form>
                    </div>';

                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
                  }
                } else {
                  // Hiển thị thông báo nếu không có sản phẩm
                  echo '<tr><td colspan="7">Không có sản phẩm.</td></tr>';
                }
                ?>
              </tbody>

            </table>
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