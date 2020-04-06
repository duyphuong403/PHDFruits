<?php
include 'admin/config.php';

if (isset($_GET['id_menu'])){
    $id_menu = $_GET['id_menu'];
    $tv = mysqli_query($connect,"select * from products where category = '$id_menu' limit 3");

    ?>

    <div class="tr-products popup-one related-products">
        <h1><strong>Sản phẩm</strong> liên quan</h1>
        <div class="row">
            <?php while ($tv_1 = mysqli_fetch_array($tv)){
                $gia_goc=$tv_1['price'];
                $gia_goc=number_format($gia_goc,0,",",".");
                $gia_giam=$tv_1['price_sale'];
                $gia_giam=number_format($gia_giam,0,",",".");
                $so_luong = $tv_1['quantity'];
                ?>
                <div class="col-lg-4">
                    <div class="product">
<!--                        <a href="?ref=detail_product&id=--><?php //echo $tv_1['id']?><!--&id_menu=--><?php //echo $tv_1['category']?><!--">-->
<!--                                                    <span class="product-image">-->
<!--                                                        <img src="admin/products/uploads/--><?php //echo $tv_1['file_name']?><!--" alt="--><?php //echo $tv_1['file_name']?><!--" class="img-fluid" style="max-height: 150px;min-height: 150px;">-->
<!--                                                    </span>-->
<!--                            <span class="product-title"><strong>--><?php //echo $tv_1['name']?><!--</strong></span>-->
<!--                            --><?php
//                            if ($so_luong == 0){
//                                echo "<h3 style='color: red;'>Hết hàng</h3>";
//                            } else { ?>
<!--                                <span class="price"><del>--><?php //echo $gia_goc?><!--<sup>đ</sup></del>--><?php //echo $gia_giam?><!--<sup>đ</sup></span>-->
<!--                            --><?php //}
//                            ?>
<!--                        </a>-->
<!--                        <div class="product-icon">-->
<!--                            <ul class="global-list">-->
<!--                                <li><a href="#"><span class="icon icon-shopping-cart"></span></a></li>-->
<!--                                <li><a class="image-link" href="admin/products/uploads/--><?php //echo $tv_1['file_name']?><!--"><span class="icon icon-full-screen"></span></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->

                        <form action="" method="get">
                            <input type='hidden' name='ref' value='add_to_cart' >
                            <input type='text' name='id' value='<?php echo $tv_1['id']?>' hidden>
                            <input type='text' name='quantity' value='1' style='width:50px' class='input-text' hidden>
                            <a href="?ref=detail_product&id=<?php echo $tv_1['id']?>&id_menu=<?php echo $tv_1['category']?>">
                                                <span class="product-image">
                                                     <img src="admin/products/uploads/<?php echo $tv_1['file_name']?>" alt="<?php echo $tv_1['file_name']?>" class="img-fluid" style="max-height: 150px;min-height: 150px;">
                                                </span>
                                <span class="product-title"><?php echo $tv_1['name'] ?></span>
                                <?php
                                if ($so_luong == 0){
                                    echo "<h3 style='color: red;'>Hết hàng</h3>";
                                }else { ?>
                                    <span class="price"><del><?php echo $gia_goc; ?><sup>đ</sup></del>
                                        <?php echo $gia_giam; ?><sup>đ</sup></span>
                                <?php }
                                ?>
                            </a>
                            <div class="product-icon">
                                <ul class="global-list">
                                    <?php
                                    if ($so_luong == 0){
//                                        echo "<li><button class=\"icon icon-shopping-cart\" type='button' disabled></button></li>";
                                    }else { ?>
                                        <li><button class="icon icon-shopping-cart" type="submit"></button></li>
                                    <?php } ?>
                                    <li><a class="image-link" href="admin/products/uploads/<?php echo $tv_1['file_name']?>"><span class="icon icon-full-screen"></span></a></li>
                                </ul>
                            </div>
                        </form>

                    </div><!-- /.product -->
                </div>
            <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.tr-products -->
<?php } ?>

