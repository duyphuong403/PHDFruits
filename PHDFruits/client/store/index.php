<?php
include 'admin/config.php';
$_SESSION['detail_cart']="co";
if(!isset($_GET['id_menu']))
{
    $id_menu="all_category";
}
else
{
    if($_GET['id_menu']!="" and $_GET['id_menu']!="all_category")
    {
        $id_menu=$_GET['id_menu'];
    }
    else
    {
        $id_menu="all_category";
    }
}


?>


<div class="tr-breadcrumb text-center bg-image" style="background-image: url(client/images/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="page-title">
            <h1>Sản phẩm phổ biến</h1>
            <h2>Organic Fruits</h2>
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->
<div class="main-content popup-one">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 push-md-4 push-lg-3">
                <div class="tr-products">
                    <?php
                    $so_dong_tren_mot_trang=9;
                    if(!isset($_GET['page'])){
                        $_GET['page']=1;
                    }

                    if($id_menu=="all_category")
                    {
                        $tv="select count(*) from products";
                    }
                    else
                    {
                        $tv="select count(*) from products where category='$id_menu' ";
                    }
                    $tv_1=mysqli_query($connect,$tv);
                    $tv_2=mysqli_fetch_array($tv_1);
                    $so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

                    $vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
                    if($id_menu=="all_category")
                    {
                        $tv="select * from products order by id desc limit $vtbd,$so_dong_tren_mot_trang";
                    }
                    else
                    {
                        $tv="select * from products where category ='$id_menu' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
                    }
                    $tv_1=mysqli_query($connect,$tv);

                    while($tv_2=mysqli_fetch_array($tv_1))
                    {
                        echo "<div class='row'>";
                        for($i=1;$i<=3;$i++)
                        {
                            if($tv_2!=false)
                            {
                                $link_anh = 'admin/products/uploads/' . $tv_2['file_name'];
                                $link_chi_tiet="?ref=detail_product&id=".$tv_2['id']."&id_menu=".$tv_2['category'];
                                $ten = $tv_2['name'];
                                $gia_goc=$tv_2['price'];
                                $gia_goc=number_format($gia_goc,0,",",".");
                                $gia_giam=$tv_2['price_sale'];
                                $gia_giam=number_format($gia_giam,0,",",".");
                                $so_luong = $tv_2['quantity'];
                                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
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
                            }
                            else
                            {
                                echo "&nbsp;";
                            }
                            if($i!=3)
                            {
                                $tv_2=mysqli_fetch_array($tv_1);
                            }
                        }
                        echo "</div>";
                    }?>

                </div><!-- /.tr-product -->
                <div class="tr-pagination text-center">
                    <ul class="pagination">
                        <?php
                        for($i=1;$i<=$so_trang;$i++)
                        {
                            $link_phan_trang="?ref=store&id_menu=".$id_menu."&page=".$i;
                            echo "<li><a href='$link_phan_trang' class='phan_trang page-numbers'>";
                            echo $i;
                            echo "</a></li> ";
                        }
                        ?>

                    </ul>
                </div><!-- /.tr-pagination -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4 col-lg-3 pull-md-8 pull-lg-9">
                <div class="gb-sidebar">
                    <div class="widget-area">
                        <?php
                        include 'client/store/form_category.php';
                        include "client/store/hot_products_2.php";
                        ?>
                    </div><!-- /.widget-area -->
                </div><!-- /.gb-sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.main-content -->
