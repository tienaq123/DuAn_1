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