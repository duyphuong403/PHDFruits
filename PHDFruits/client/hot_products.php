<?php
require 'admin/config.php';
$check = "Có";
$tv_1 = mysqli_query($connect,"select * from products where homepage = '$check' order by id desc");

?>
<div class="tr-products popup-one section-padding">
    <div class="container">
        <div class="section-title">
            <h1>Khám phá cùng PHD Fruits</h1>
            <h2>Sản phẩm bán chạy</h2>
        </div>
        <div class="product-slider">
            <?php
            while ($tv_2 = mysqli_fetch_array($tv_1)){?>
            <div class="products">
                <div class="row">
                <?php
                for($i=1;$i<=4;$i++)
                {
                    if($tv_2!=false){
                        $id = $tv_2['id'];
                        $link_detail = "?ref=detail_product&id=$id";
                        $file_name = $tv_2['file_name'];
                        $link_image = "admin/products/uploads/$file_name";
                        $name = $tv_2['name'];
                        $price = $tv_2['price'];
                        $quatity = $tv_2['quantity'];
                        $price = number_format($price,0,",",".");
                        $price_sale = $tv_2['price_sale'];
                        $price_sale = number_format($price_sale,0,",",".");
                        ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="product">
                            <form action="" method="get">
                                <input type='hidden' name='ref' value='add_to_cart' >
                                <input type='text' name='id' value='<?php echo $tv_2['id']?>' hidden>
                                <input type='text' name='quantity' value='1' style='width:50px' class='input-text' hidden>
                                <a href="<?php echo $link_detail ?>">
                                            <span class="product-image">
                                                <img class="prod-img" src="<?php echo $link_image ?>" alt="<?php echo $file_name ?>" class="img-fluid">
                                            </span>
                                    <span class="product-title"><strong><?php echo $name?></strong></span>
                                    <?php
                                    if ($quatity == 0){
                                        echo "<h3>Hết hàng</h3>";
                                    }else{?>
                                        <span class="price"><del><?php echo $price ?><sup>đ</sup></del><?php echo $price_sale?><sup>đ</sup></span>
                                   <?php }
                                    ?>
                                </a>
                                <div class="product-icon">
                                    <ul class="global-list">
                                        <?php
                                        if ($quatity == 0){
//                                            echo "<li><button class=\"icon icon-shopping-cart\" disabled='disabled'></button></li>";
                                        }else{
                                            echo "<li><button class=\"icon icon-shopping-cart\" type=\"submit\"></button></li>";
                                        }
                                        ?>
                                        <li><a class="image-link" href="<?php echo $link_image?>"><span class="icon icon-full-screen"></span></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div><!-- /.product -->
                    </div>
                        <?php
                    }
                    else
                    {
                        echo "&nbsp;";
                    }
                    if($i!=4)
                    {
                        $tv_2=mysqli_fetch_array($tv_1);
                    }
                }
                echo "</div></div><!-- /.products -->";
                }?>
        </div><!-- /.product-slider -->
    </div><!-- /.container -->
</div><!-- /.section-padding -->
