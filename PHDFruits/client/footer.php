<div class="tr-footer section-bg-white">
    <div class="footer-top section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.php"><img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 100px;"></a>
                        </div>
                        <p>Chất lượng là danh dự</p>
                        <div class="footer-social">
                            <ul class="global-list">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- /.footer-widget -->
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="footer-widget">
                        <h3>Truy cập nhanh</h3>
                        <ul class="global-list">
                            <li><a href="?ref=store">Sản phẩm</a></li>
                            <li><a href="?ref=blog">Tin tức</a></li>
                            <li><a href="?ref=contact">Liên hệ</a></li>
                        </ul>
                    </div><!-- /.footer-widget -->
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="footer-widget">
                        <h3>Địa chỉ liên hệ</h3>
                        <?php
                        $query = mysqli_query($connect,"select * from company_info");
                        $row= mysqli_fetch_array($query);
                        echo $row['map'];?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="row">
        <div class="col-12" style="text-align: center">
            <h3 style="font-weight: normal;">Lượt truy cập <b style="font-family: '7-Led'"><?php echo $visit_f?></b></h3>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container" style="text-align: center;">
            <div class="" style="float: none">
                <span>© 2018-<?php echo date("Y") ?> <a href="admin/index.php" style="color: #80b435;" target="_blank"><b>P.H.D Fruits</b></a> - All Rights Reserved.</span>
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</div><!-- /.tr-footer -->


<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/jquery-ui-min.js"></script>
<script src="js/jquery.spinner.min.js"></script>
<script src="js/carousel-touch.js"></script>
<script src="js/switcher.js"></script>
<script src="js/main.js"></script>