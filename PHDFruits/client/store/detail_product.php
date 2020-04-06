<?php
include 'admin/config.php';
$_SESSION['detail_cart']="co";
$id=$_GET['id'];
$tv="select * from products where id='$id'";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$ten = $tv_2['name'];
$mo_ta = $tv_2['description'];
$gia_goc=$tv_2['price'];
$gia_goc=number_format($gia_goc,0,",",".");
$gia_giam=$tv_2['price_sale'];
$gia_giam=number_format($gia_giam,0,",",".");
$so_luong = $tv_2['quantity'];
$sql="select * from productS where id = '$id'";
$query=mysqli_query($connect,$sql);
?>
<div class="main-content bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9  push-md-4 push-lg-3">
                <div class="details-content">
                    <div class="product-details section-bg-white">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="details-slider" class="details-slider carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item1">
                                            <?php
                                                while($row=mysqli_fetch_array($query)){;?>
                                            <img class="img-fluid" src="<?php echo "admin/products/uploads/".$row['file_name']; ?>" alt="<?php echo $row['file_name'];?>">
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div><!-- /#details-slider -->
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details-info">
                                    <span class="product-title"><?php echo $ten; ?></span>
                                    <?php
                                    if ($so_luong == 0){
                                        echo "<div style='color: red'><h2>Hết hàng</h2></div>";
                                    }else { ?>
                                        <span class="price"><del><?php echo $gia_goc; ?><sup>đ</sup></del><?php echo $gia_giam; ?><sup>đ</sup></span>
                                    <?php } ?>
                                    <p>100% Trái cây sạch - không chất bảo quản</p>
                                    <ul class="global-list">
                                        <li>Trái cây được trồng từ nông trại PHD</li>
                                        <li>100% Trái Cây Sạch</li>
                                        <li>100% Trái Cây tươi và không hoá chất</li>
                                    </ul>
                                    <?php
                                    if ($so_luong == 0){
                                        echo "<div>&nbsp;</div>";
                                    }else {
                                        echo '<form action="" method="get">';
                                        echo "<div class='quantity-price'>";
                                        echo "<span>Số lượng (kg)</span>";
                                        echo "<div class='quantity' data-trigger='spinner'>";
                                        echo "<a href='#' data-spin='down'><i class='fa fa-minus'></i></a>";
                                        echo "<input type='hidden' name='ref' value='add_to_cart' > ";
                                        echo "<input type='hidden' name='id' value='".$_GET['id']."'>";
                                        echo "<input type='text' name='quantity' value='1' style='width:50px' class='input-text'> ";
                                        echo "<a href='#' data-spin='up'><i class='fa fa-plus'></i></a>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='add-to-cart'>";
                                        echo "<input class='btn btn-primary' type='submit' value='Thêm vào giỏ' style='margin-left:15px' >";
                                        echo "</div><!-- /.add-to-cart -->";
                                        echo "</form>";
                                    }
                                    ?>
                                </div><!-- /.products-details-info -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.products-details -->
                    <div class="products-description section-bg-white">
                        <ul class="nav nav-tabs description-tabs" role="tablist">
                            <li role="presentation" class="nav-item"><a class="nav-link active" href="#details" aria-controls="details" role="tab" data-toggle="tab">Chi tiết</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#payment" aria-controls="payment" role="tab" data-toggle="tab" aria-expanded="true">Thanh toán</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab" aria-expanded="true">Giao hàng</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="details" style="opacity: 1">
                                <?php
//                                    include 'js/view_more.php';
                                    echo $mo_ta ?>
                            </div><!-- /.tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="payment">
                                <div class="payment">
                                    <p>Quý khách hoàn toàn có thể yên tâm với chính sách thanh toán khi nhận hàng</p>
                                </div>
                            </div><!-- /.tab-pane -->

                            <div role="tabpanel" class="tab-pane fade" id="delivery">
                                <div class="delivery">
                                    <p>Chúng tôi miễn phí hoàn toàn phí Ship trong phạm vi bán kính 10km đối với đơn hàng có tổng giá trị từ 500.000đ trở lên.<br>Từ KM thứ 11 - 20 quý khách vui lòng thanh toán thêm 5.000đ/km phí ship Hoặc freeship cho đơn hàng có tổng hoá đơn trên 1.000.000đ. <br>Khách hàng từ KM thứ 21 trở lên hoặc ở các tỉnh lân cận quý khách vui lòng thanh toán thêm 100.000đ cho các phụ kiện gói hàng Hoặc freeship cho đơn hàng trên 2.000.000đ.
                                        <br>Cám ơn quý khách đã tin dùng PHD Fruits.
                                    </p>
                                </div>
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.products-description -->
                    <?php include 'client/store/related_product.php' ?>
                </div><!-- /.details-content -->
            </div>
            <div class="col-md-4 col-lg-3 pull-md-8 pull-lg-9">
                <div class="gb-sidebar">
                    <div class="widget-area">
                        <?php
                        include 'client/store/form_category.php';
//                        include 'client/store/form_range.php';
                        include "client/store/hot_products_2.php";
                        ?>
                    </div><!-- /.widget-area -->
                </div><!-- /.gb-sidebar -->
            </div><!-- /.col-md-4-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.main-content -->
