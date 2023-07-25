<!-- <?php
        require_once('./function.php');
        $conn = connectToDatabase();
        ?> -->
<?php


if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Thực hiện truy vấn SQL để tìm kiếm sản phẩm với từ khóa
    $sql = "SELECT * FROM Product WHERE title LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);

    // Hiển thị danh sách sản phẩm tìm thấy
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Hiển thị thông tin sản phẩm ở đây

            echo '<tr class="bg-white border-b border-gray6 last:border-0 text-start mx-9">';
            echo '<td class="pr-8 py-5 whitespace-nowrap">';
            echo '<a style="margin-bottom: 30px;" href="#" class="flex items-center justify-between space-x-5">';
            echo '<div>';
            echo '<img class="w-[60px] h-[60px] rounded-md" src="' . $row['thumbnail'] . '" alt="" />';
            echo '<span class="font-medium text-heading text-hover-primary transition">' . $row['title'] . '</span>';
            echo '</div>';
            echo '<div class="flex items-center justify-end space-x-2">';
            // Các nút sửa và xóa ở đây
            echo '
                    <div class="flex items-center justify-center space-x-2">
                      <!-- Edit Category form -->
                      <div class="relative" x-data="{ editTooltip: false }">
                        <button class="w-10 h-10 leading-10 text-tiny bg-success text-white rounded-md hover:bg-green-600" x-on:mouseenter="editTooltip = true" x-on:mouseleave="editTooltip = false">
                          <svg class="-translate-y-[2px]" height="12" viewBox="0 0 492.49284 492" width="12" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                          </svg>
                        </button>
                        <div x-show="editTooltip" class="flex flex-col items-center z-50 absolute left-1/2 -translate-x-1/2 bottom-full mb-1">
                          <span class="relative z-10 p-2 text-tiny leading-none font-medium text-white whitespace-no-wrap w-max bg-slate-800 rounded py-1 px-2 inline-block">Edit</span>
                          <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                        </div>
                      </div>

                      <form method="post" action="">
                        <input type="hidden" name="category_id" value="">
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
            echo '</a>';
            echo '</td>';



            echo '</td>';
            echo '</tr>';
        }
    } else {
        // Hiển thị thông báo nếu không có sản phẩm nào tìm thấy
        echo "Không có sản phẩm nào phù hợp.";
    }
}
?>