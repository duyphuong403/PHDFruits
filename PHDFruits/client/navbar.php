<?php
include 'admin/config.php';
$res = mysqli_query($connect, "SELECT * FROM company_info");
$data = mysqli_fetch_array($res);
?>

<div class="tr-topbar">
    <div class="container">
        <div class="topbar-content">
            <div class="float-left">
                <span><span class="icon icon-phone-call"></span> Liên hệ <a href="tel:<?php echo $data['sdt1'] ?>"><span class="number"><?php echo $data['sdt1'] ?></span></a></span>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-topbar -->

<div class="tr-menu">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-none">
                <a class="navbar-brand" href="index.php"><img class="img-fluid" src="logo.png" alt="Logo" width="70px"></a>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav tr-d-md-none">
                    <li class="nav-item tr-dropdown"><a class="nav-link" href="index.php">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=store">Sản phẩm</a></li>
                    <li class="tr-middle-logo"><a class="navbar-brand" href="index.php"><img class="img-fluid" src="client/images/logo.png" alt="Logo" style="max-width: 60px;"></a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=blog">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=contact">Liên hệ</a></li>
                </ul>
                <ul class="navbar-nav d-lg-none">
                    <li class="nav-item tr-dropdown active"><a class="nav-link" href="index.php">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=store">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=blog">Tin tức</a></li>
                    <li class="nav-item"><a class="nav-link" href="?ref=contact">Liên hệ</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="find-option float-right">
                <ul class="global-list">
                    <?php
                    include "button_back_to_top.php";
                    include 'client/form_search.php';
                    include 'client/cart/form_cart.php';
                    ?>
                </ul>
            </div><!-- /.find-option -->
        </div><!-- /.container -->
    </nav>
</div><!-- /.tr-menu -->