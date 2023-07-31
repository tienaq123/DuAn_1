<?php
require_once('./function.php');
$conn = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
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
                        <h3 class="mb-0 text-[28px]">User</h3>
                        <ul class="text-tiny font-medium flex items-center space-x-3 text-text3">
                            <li class="breadcrumb-item text-muted">
                                <a href="index.php" class="text-hover-primary">
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item flex items-center">
                                <span class="inline-block bg-text3/60 w-[4px] h-[4px] rounded-full"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">User</li>
                        </ul>
                    </div>
                </div>

                <div class="overflow-scroll 2xl:overflow-visible">
                    <div class="w-[1400px] 2xl:w-full">
                        <div class="grid grid-cols-12 border-b border-gray rounded-t-md bg-white px-10 py-5">
                            <div class="table-information col-span-4">
                                <h2 class=" tracking-wide text-slate-800 text-lg mb-0 leading-none">
                                    User
                                </h2>
                                <p class="text-slate-500 mb-0 text-tiny">
                                    List User
                                </p>
                            </div>

                        </div>

                        <div class="">
                            <div class="relative rounded-b-md bg-white px-10 py-7">
                                <!-- table -->
                                <table class="w-full text-base text-left text-gray-500">
                                    <thead class="bg-white">
                                        <tr class="border-b border-gray6 text-tiny">
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                ID
                                            </th>
                                            <th scope="col" class="pr-8 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Name
                                            </th>

                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Email
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Phone Number
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Address
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Role
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold">
                                                Create at
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-tiny text-text2 uppercase font-semibold w-[14%] 2xl:w-[12%]">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>

                                    <!-- List Products -->

                                    <?php
                                    $sql = "SELECT u.id, u.fullname, u.email, u.phone_number, u.address, u.created_at, u.role_id, r.name AS role_name
                                    FROM user u
                                    LEFT JOIN role r ON u.role_id = r.id";

                                    $result = mysqli_query($conn, $sql);
                                    // Kiểm tra xem có sản phẩm nào hay không
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $user_id = $row['id'];
                                            $fullname = $row['fullname'];
                                            $email = $row['email'];
                                            $phone_number = $row['phone_number'];
                                            $address = $row['address'];
                                            $created_at = $row['created_at'];
                                            $role_id = $row['role_id'];
                                            $role_name = $row['role_name'];
                                    ?>
                                            <tbody>
                                                <tr class="bg-white border-b border-gray6 last:border-0 text-start">
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $user_id ?>
                                                    </td>
                                                    <td class="pr-8 whitespace-nowrap">
                                                        <a href="#" class="font-medium text-heading text-hover-primary"><?php echo $fullname ?></a>
                                                    </td>

                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $email ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $phone_number ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $address ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $role_name ?>
                                                    </td>
                                                    <td class="px-3 py-3 font-normal text-slate-600">
                                                        <?php echo $created_at ?>đ
                                                    </td>
                                                    <td class="px-3 py-3">
                                                        <div class="flex items-center space-x-2">
                                                            <form action="" method="post">
                                                                <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                                                <button type="submit" name="update_role_btn" class="bg-success hover:bg-green-600 text-white inline-block text-center leading-5 text-tiny font-medium pt-2 pb-[6px] px-4 rounded-md">
                                                                    <span class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                                        <svg class="-translate-y-px" height="10" viewBox="0 0 492.49284 492" width="10" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill="currentColor" d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0" />
                                                                            <path fill="currentColor" d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0" />
                                                                        </svg>
                                                                    </span>
                                                                    Edit Role
                                                                </button>
                                                            </form>
                                                            <?php
                                                            if (isset($_POST['update_role_btn'])) {
                                                                // Lấy user_id từ yêu cầu POST
                                                                $userId = $_POST['user_id'];

                                                                // Thực hiện câu truy vấn SELECT để lấy role_id hiện tại
                                                                $query_select_role = "SELECT role_id FROM User WHERE id = $userId";
                                                                $result_select_role = mysqli_query($conn, $query_select_role);

                                                                if ($result_select_role) {
                                                                    // Lấy role_id hiện tại từ kết quả truy vấn SELECT
                                                                    $row = mysqli_fetch_assoc($result_select_role);
                                                                    $currentRole = $row['role_id'];

                                                                    // Xác định role_id mới dựa trên role_id hiện tại
                                                                    $newRole = ($currentRole == 1) ? 2 : 1;

                                                                    // Thực hiện câu truy vấn UPDATE để cập nhật role_id mới
                                                                    $query_update_role = "UPDATE User SET role_id = $newRole WHERE id = $userId";
                                                                    $result_update_role = mysqli_query($conn, $query_update_role);

                                                                    if ($result_update_role) {
                                                                        // Cập nhật thành công
                                                                        header("Location: user.php");
                                                                    } else {
                                                                        echo "Error updating role.";
                                                                    }
                                                                } else {
                                                                    echo "Error querying current role.";
                                                                }
                                                            }
                                                            ?>
                                                            <button class="bg-white text-slate-700 border border-slate-200 hover:bg-danger hover:border-danger hover:text-white inline-block text-center leading-5 text-tiny font-medium pt-[6px] pb-[5px] px-4 rounded-md">
                                                                <span class="text-[9px] inline-block -translate-y-[1px] mr-[1px]">
                                                                    <svg class="-translate-y-px" width="10" height="10" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M19.0697 4.23C17.4597 4.07 15.8497 3.95 14.2297 3.86V3.85L14.0097 2.55C13.8597 1.63 13.6397 0.25 11.2997 0.25H8.67967C6.34967 0.25 6.12967 1.57 5.96967 2.54L5.75967 3.82C4.82967 3.88 3.89967 3.94 2.96967 4.03L0.929669 4.23C0.509669 4.27 0.209669 4.64 0.249669 5.05C0.289669 5.46 0.649669 5.76 1.06967 5.72L3.10967 5.52C8.34967 5 13.6297 5.2 18.9297 5.73C18.9597 5.73 18.9797 5.73 19.0097 5.73C19.3897 5.73 19.7197 5.44 19.7597 5.05C19.7897 4.64 19.4897 4.27 19.0697 4.23Z" fill="currentColor" />
                                                                        <path d="M17.2297 7.14C16.9897 6.89 16.6597 6.75 16.3197 6.75H3.67975C3.33975 6.75 2.99975 6.89 2.76975 7.14C2.53975 7.39 2.40975 7.73 2.42975 8.08L3.04975 18.34C3.15975 19.86 3.29975 21.76 6.78975 21.76H13.2097C16.6997 21.76 16.8398 19.87 16.9497 18.34L17.5697 8.09C17.5897 7.73 17.4597 7.39 17.2297 7.14ZM11.6597 16.75H8.32975C7.91975 16.75 7.57975 16.41 7.57975 16C7.57975 15.59 7.91975 15.25 8.32975 15.25H11.6597C12.0697 15.25 12.4097 15.59 12.4097 16C12.4097 16.41 12.0697 16.75 11.6597 16.75ZM12.4997 12.75H7.49975C7.08975 12.75 6.74975 12.41 6.74975 12C6.74975 11.59 7.08975 11.25 7.49975 11.25H12.4997C12.9097 11.25 13.2497 11.59 13.2497 12C13.2497 12.41 12.9097 12.75 12.4997 12.75Z" fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php }
                                    } ?>
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