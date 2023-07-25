<div class="bg-white rounded-t-md rounded-b-md shadow-xs py-4">
  <div class="tp-search-box flex items-center justify-between px-8 py-8">
    <div class="search-input relative">
      <input class="input h-[44px] w-full pl-14" type="text" placeholder="Search by product name" />
      <button class="absolute top-1/2 left-5 translate-y-[-50%] hover:text-theme">
        <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>
    </div>
  </div>
  <div class="relative overflow-x-auto mx-8">
    <table class="w-full text-base text-left text-gray-500">
      <thead class="bg-white">
        <tr class="border-b border-gray6 text-tiny">
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