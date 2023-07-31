<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<?php


if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];

  $sql = "SELECT * FROM orders WHERE id = '$keyword'";
  $result = mysqli_query($conn, $sql);

  // Hiển thị danh sách sản phẩm tìm thấy
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>


      <table class="w-[1500px] 2xl:w-full text-base text-left text-gray-500">
        <thead class="bg-white">
          <tr class="border-b border-gray6 text-tiny">

            <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold w-[170px]">
              Order ID search
            </th>
            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
              Customer
            </th>
            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
              Phone
            </th>
            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
              Total
            </th>
            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
              Status
            </th>
            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[170px] text-center">
              Date
            </th>
            <th scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] text-center">
              Action
            </th>
            <th scope="col" class="px-9 py-3 text-tiny text-text2 uppercase font-semibold w-[4%] text-center">
              Invoice
            </th>
          </tr>
        </thead>

        <tbody>
          <tr id="searchResults" class="bg-white border-b border-gray6 last:border-0 text-start mx-9">
            <!-- Đây là nơi hiển thị kết quả tìm kiếm -->
          </tr>

          <style>
            .active-table {
              display: none;
            }
          </style>
          <tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">

            <td class="px-3 py-3 font-normal text-[#55585B]">
              #<?php echo $row['id'] ?>
            </td>
            <td class="pr-8 py-5 whitespace-nowrap">
              <a href="#" class="flex items-center space-x-5 text-hover-primary text-heading">
                <span class="font-medium"><?php echo $row['fullname'] ?></span>
              </a>
            </td>

            <td class="px-3 py-3 font-normal text-[#55585B] text-center">
              <?php echo $row['phone_number'] ?>
            </td>
            <td class="px-3 py-3 font-normal text-[#55585B] text-center">
              <?php echo $row['total_money'] ?>
            </td>
            <td class="px-3 py-3 text-center">
              <span class="text-[11px] text-success px-3 py-1 rounded-md leading-none bg-success/10 font-medium text-center"><?php echo $row['status'] ?></span>
            </td>
            <td class="px-3 py-3 font-normal text-[#55585B] text-center">
              <?php echo $row['order_date'] ?>
            </td>

            <td class="px-9 py-3 text-center">
              <div class="flex items-center justify-end space-x-2">
                <div class="relative" x-data="{ editTooltip: false }">
                  <button class="w-auto px-3 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                    View Details
                  </button>
                  <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                    <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Details</span>
                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="px-9 py-3 text-end">
              <div class="flex items-center justify-end space-x-2">
                <div class="relative" x-data="{ printTooltip: false }">
                  <button class="w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white" x-on:mouseenter="printTooltip = true" x-on:mouseleave="printTooltip = false">
                    <svg class="-translate-y-px" width="16" height="16" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="m10.9052 29.895h10.18c1.099 0 1.99-.8909 1.99-1.99v-5.92c0-1.099-.891-1.99-1.99-1.99h-10.18c-1.099 0-1.99.891-1.99 1.99v5.92c0 1.099.8909 1.99 1.99 1.99z" />
                      <path fill="currentColor" d="m7.915 26.0044v-6.0093c0-.5522.4478-1 1-1h14.1602c.5522 0 1 .4478 1 1v6.0098h1.5498c2.7461 0 4.98-1.9873 4.98-4.4302v-6.9795c0-2.4375-2.2339-4.4204-4.98-4.4204h-19.2598c-2.7407 0-4.9702 1.9829-4.9702 4.4204v6.9795c0 2.4429 2.2295 4.4302 4.9937 4.4297z" />
                      <path fill="currentColor" d="m11.8751 2.105c-1.1 0-2 .9-2 2v3.84c0 .8174.6627 1.48 1.48 1.48h9.27c.8174 0 1.48-.6626 1.48-1.48v-3.85c0-1.1-.89-1.99-2-1.99z" />
                    </svg>
                  </button>
                  <div x-show="printTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                    <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Print</span>
                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                  </div>
                </div>
                <div class="relative" x-data="{ viewTooltip: false }">
                  <a href="order-details.html" class="inline-block w-auto px-3 h-10 leading-10 text-tiny bg-gray text-black rounded-md hover:bg-theme hover:text-white" x-on:mouseenter="viewTooltip = true" x-on:mouseleave="viewTooltip = false">
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 488.85 488.85">
                      <path fill="currentColor" d="M244.425,98.725c-93.4,0-178.1,51.1-240.6,134.1c-5.1,6.8-5.1,16.3,0,23.1c62.5,83.1,147.2,134.2,240.6,134.2 s178.1-51.1,240.6-134.1c5.1-6.8,5.1-16.3,0-23.1C422.525,149.825,337.825,98.725,244.425,98.725z M251.125,347.025 c-62,3.9-113.2-47.2-109.3-109.3c3.2-51.2,44.7-92.7,95.9-95.9c62-3.9,113.2,47.2,109.3,109.3 C343.725,302.225,302.225,343.725,251.125,347.025z M248.025,299.625c-33.4,2.1-61-25.4-58.8-58.8c1.7-27.6,24.1-49.9,51.7-51.7 c33.4-2.1,61,25.4,58.8,58.8C297.925,275.625,275.525,297.925,248.025,299.625z" />
                    </svg>
                  </a>
                  <div x-show="viewTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                    <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">View</span>
                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                  </div>
                </div>
              </div>
            </td>
          </tr>

        </tbody>
      </table>


<?php }
  } else {
    // Hiển thị thông báo nếu không có sản phẩm nào tìm thấy
    echo "Không có sản phẩm nào phù hợp.";
  }
} ?>