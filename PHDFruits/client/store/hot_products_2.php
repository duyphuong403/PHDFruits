<div class="widget widget_recent_entries">
    <h3 class="widget_title">Sản phẩm nổi bật</h3>
    <ul>
        <?php
        $tv = mysqli_query($connect,'select * from products where hot = "Có" order by id desc limit 3 ');
        while ($tv_1 = mysqli_fetch_array($tv)){
            $gia_goc=$tv_1['price'];
            $gia_goc=number_format($gia_goc,0,",",".");
            $gia_giam=$tv_1['price_sale'];
            $gia_giam=number_format($gia_giam,0,",",".");
            $so_luong = $tv_1['quantity'];
            ?>
            <li>
                <div class="product" style="height: auto !important;">
                    <a href="?ref=detail_product&id=<?php echo $tv_1['id'];?>&id_menu=<?php echo $tv_1['category']?>" class="media">
                        <span class="product-image">
                            <img src="admin/products/uploads/<?php echo $tv_1['file_name'];?>" alt="Image" class="img-fluid" style="width:150px;">
                        </span>
    <span class="product-info media-body">
                        <span class="product-title"><strong><?php echo $tv_1['name'];?></strong></span>
        <?php
        if ($so_luong == 0){
            echo "<h3 style='color: red;'>Hết hàng</h3>";
        }else{ ?>
            <span class="price"><del><?php echo $gia_goc?><sup>đ</sup></del><?php echo $gia_giam?><sup>đ</sup></span>
        <?php } ?>
                        </span>
                    </a>
                </div><!-- /.product -->
            </li>
        <?php } ?>
    </ul>
</div><!-- /.widget -->