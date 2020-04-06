<div class="btn-log-out">
    <p style="display: inline-block;padding-top: 6px;">Xin chào <b style="text-transform: uppercase;"><a href="?ref=change_pass" style="color: blue;" class="hvr-float"><?php if (isset($_SESSION['username'])){echo $_SESSION['username'];}?></a></b></p>&nbsp;
    <a href="?ref=logout" style="float: right;display: inline-block;"><button class="btn btn-warning hvr-float" style="height: 33px;">Đăng xuất</button></a>
    <br>
</div>
<div class="row">
    <div class="col-md-3 nav-cus">
        <nav class="navbar" style="border: none">
            <div class="container-fluid" style="padding: 0">
                <div class="collapse navbar-collapse" id="myNavbar" style="padding: 0;">
                    <ul class="nav navbar-nav">
                        <li>
                            <div>
                                <img src="<?php echo $url_domain?>images/logo.png"
                                     alt="Logo" style="width: 25%;padding: 10px;display: inline-block;">
                                <a href="<?php echo $domain?>" style="display: inline-block"><p style="font-size: 33px;color: #69f610;vertical-align: middle;font-family: 'Pacifico-Regular">PHD Fruits</p></a>
                            </div>
                        </li>
                        <li><a class="hvr-underline-from-center" href="index.php"><i class="pe-7s-home"></i><p>TRANG CHỦ</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=banner"><i class="pe-7s-photo"></i><p>Banner</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=blogs"><i class="pe-7s-info"></i><p>tin tức</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=contact"><i class="pe-7s-mail"></i><p>LIÊN HỆ</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=order"><i class="pe-7s-cart"></i><p>ĐƠN HÀNG</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=products"><i class="pe-7s-shopbag"></i><p>SẢN PHẨM</p></a></li>
                        <li><a class="hvr-underline-from-center" href="?ref=category"><i class="pe-7s-albums"></i><p>Danh mục SẢN PHẨM</p></a></li>
                </div>
            </div>
        </nav>
    </div>
    <?php include 'navigation.php'; ?>
</div>
<footer>
    <div style="text-align: center;background-color: #0000001a;padding: 5px;">
        © 2018-<?php echo date("Y") ?> <b>PHD Fruits</b>. ALL RIGHT RESERVED. DESIGN AND DEVELOPED BY P.H.D
    </div>
</footer>