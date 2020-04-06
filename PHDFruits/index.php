<?php
session_start();
include 'admin/config.php';
include "js/function.php";
$result = mysqli_query($connect,'select * from products');
if(isset($_POST['customer_info']))
{
    include("client/Cart/check_out_DB.php");
}
if(isset($_POST['update_cart']))
{
    include("client/Cart/update_cart.php");
    trang_truoc();
}

$tv = "update count_visit set visit=visit+1 where id = 1";
$tv_3 = mysqli_query($connect,$tv);
$tv_1 = mysqli_query($connect,"select * from count_visit");
$tv_2 = mysqli_fetch_array($tv_1);
$visit = $tv_2['visit'];
$visit_f = sprintf('%08d', $visit);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHD Fruits - Trái cây tươi mát</title>
        <!-- CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/structure.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="admin/css/pe-icon-7-stroke.css">

        <link id="preset" rel="stylesheet" href="css/preset1.css">
        <link rel="stylesheet" href="css/responsive.css">

        <script src="jquery/dist/jquery.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- font -->
        <link href="css/css_1.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">

        <!-- icons -->
        <link rel="icon" href="logo.png">



    </head>
    <body>
        <div class="container-fluid" style="padding: 0">
            <?php
                include 'client/navbar.php';
                include 'client/navigation.php';
                include 'client/footer.php';
            ?>
        </div>
    </body>
</html>
