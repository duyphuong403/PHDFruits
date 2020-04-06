<?php
include 'admin/config.php';
if(trim($_GET['search'])!=""){
    $m=explode(" ",$_GET['search']);
    $chuoi_tim_sql="";
    for($i=0;$i<count($m);$i++)
    {
        $tu=trim($m[$i]);
        if($tu!="")
        {
            $chuoi_tim_sql=$chuoi_tim_sql." name like '%".$tu."%' or";
        }
    }

    $m_2=explode(" ",$chuoi_tim_sql);
    $chuoi_tim_sql_2="";
    for($i=0;$i<count($m_2)-1;$i++)
    {
        $chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
    }

    $so_du_lieu=9;
    $tv="select count(*) from products where $chuoi_tim_sql_2";
    $tv_1=mysqli_query($connect,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);

    if(!isset($_GET['page']))
    {
        $_GET['page'] = 1;
        $vtbd=0;
    }else{
        $vtbd=($_GET['page']-1)*$so_du_lieu;
    }

    $tv="select * from products where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";

    $tv_1=mysqli_query($connect,$tv);?>

                <?php
                $tv_2=mysqli_fetch_array($tv_1);
                if (!$tv_2){
                    echo "<div class='col-md-12' style='text-align: center;'><h2 style='color: red;'>Không tìm thấy kết quả nào</h2></div>";
                }else {?>
                    <div class="container">
                    <div class="section-title">
                    <h2>Kết quả tìm kiếm</h2>
                    <div class="tr-products popup-one section-padding">
                    <div class="products">
                <?php
                    while ($tv_2) {
                        echo "<div class='row'>";
                        for ($i = 1; $i <= 3; $i++) {
                            if ($tv_2 != false) {
                                $id_menu = $tv_2['category'];
                                $link_anh = 'admin/products/uploads/' . $tv_2['file_name'];
                                $link_chi_tiet = "?ref=detail_product&id=" . $tv_2['id'] . "&id_menu=" . $id_menu;
                                $ten = $tv_2['name'];
                                $gia_goc = $tv_2['price'];
                                $so_luong = $tv_2['quantity'];
                                $gia_goc = number_format($gia_goc, 0, ",", ".");
                                $gia_giam = $tv_2['price_sale'];
                                $gia_giam = number_format($gia_giam, 0, ",", "."); ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
<!--                                        <a href="--><?php //echo $link_chi_tiet; ?><!--">-->
<!--                                                <span class="product-image">-->
<!--                                                    <img class="prod-img"-->
<!--                                                         style="width: auto;max-height: 140px;height: 100%"-->
<!--                                                         src="--><?php //echo $link_anh; ?><!--"-->
<!--                                                         alt="--><?php //echo $tv_2['file_name']; ?><!--" class="img-fluid"/>-->
<!--                                                </span>-->
<!--                                            <span class="product-title">--><?php //echo $ten ?><!--</span>-->
<!--                                            <span class="price"><del>--><?php //echo $gia_goc; ?><!--<sup>đ</sup></del>-->
<!--                                                --><?php //echo $gia_giam; ?><!--<sup>đ</sup></span>-->
<!--                                        </a>-->
<!--                                        <div class="product-icon">-->
<!--                                            <ul class="global-list">-->
<!--                                                <li><a href="#"><span class="icon icon-shopping-cart"></span></a></li>-->
<!--                                                <li><a class="--><?php //echo $link_anh; ?><!--" href="--><?php //echo $link_anh; ?><!--"><span-->
<!--                                                                class="icon icon-full-screen"></span></a></li>-->
<!--                                            </ul>-->
<!--                                        </div>-->

                                        <form action="" method="get">
                                            <input type='hidden' name='ref' value='add_to_cart' >
                                            <input type='text' name='id' value='<?php echo $tv_2['id']?>' hidden>
                                            <input type='text' name='quantity' value='1' style='width:50px' class='input-text' hidden>
                                            <a href="<?php echo $link_chi_tiet; ?>">
                                                <span class="product-image">
                                                    <img class="prod-img" src="<?php echo $link_anh; ?>"
                                                         alt="<?php echo $tv_2['file_name']; ?>"/>
                                                </span>
                                                <span class="product-title"><?php echo $ten ?></span>
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
//                                                        echo "<li><button class=\"icon icon-shopping-cart\" type='button' disabled></button></li>";
                                                    }else { ?>
                                                        <li><button class="icon icon-shopping-cart" type="submit"></button></li>
                                                    <?php } ?>
                                                    <li><a class="image-link" href="<?php echo $link_anh; ?>"><span class="icon icon-full-screen"></span></a></li>
                                                </ul>
                                            </div>
                                        </form>

                                    </div><!-- /.product -->
                                </div>
                                <?php
                            } else {
                                echo "&nbsp;";
                            }
                            if ($i != 3) {
                                $tv_2 = mysqli_fetch_array($tv_1);
                            }
                        }
                        echo "</div>";
                    }
                    for ($i = 1; $i <= $so_trang; $i++) {
                        $link_phan_trang = "?ref=client_search&search=" . $_GET['search'] . "&page=" . $i;
                        echo "<center><a href='$link_phan_trang' class='phan_trang hvr-float' style='color: #000000;' >";
                        echo "<h3>" . $i . "</h3>";
                        echo "</a></center> ";
                    }
                }?>
            </div><!-- /.products -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</div>
    <?php
}
else
{
    echo "<div class='col-md-12' style='text-align: center'>
            <h2 style='color: red;'>Bạn chưa nhập từ khóa</h2>
        </div>";
}
?>
<script>
    function goBack() {
        window.history.back();
    }
</script>
