<?php
session_start();
$bien_bao_mat="co";
include 'config.php';
include("manage_account_admin/process_login.php");
include("js/function.php");
if(isset($xac_dinh_dang_nhap))
{
    if($xac_dinh_dang_nhap=="yes")
    {
        include("process_get_post.php");
    }
}
?>
<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Quản Trị PHD Fruits</title>

    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script src='js/tinymce/js/tinymce/tinymce.min.js'></script>
<!--    <script src="../js/ckeditor.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/styles/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="css/styles/login/css/main.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="icon" href="images/logo.png">

    <script src="../jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <style>
        table {
            display: table;
            text-align: center
        }
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    </style>
</head>
<body class="container-fluid" style="padding: 0">
<?php
if(!isset($xac_dinh_dang_nhap))
{
    include("manage_account_admin/form_login.php");
}
else
{
    if($xac_dinh_dang_nhap=="yes")
    {
        echo "<center>";
        include("home_page.php");
        echo "</center>";
    }
}
?>
</body>
</html>
