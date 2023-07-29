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