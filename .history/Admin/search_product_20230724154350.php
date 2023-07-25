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
            echo "<div>" . $row['title'] . "</div>";




            // 
            echo `<table class="w-full text-base text-left text-gray-500">
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
            <tbody>`
        }
    } else {
        // Hiển thị thông báo nếu không có sản phẩm nào tìm thấy
        echo "Không có sản phẩm nào phù hợp.";
    }
}
?>