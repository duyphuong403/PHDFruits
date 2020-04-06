<?php
$so_luong=0;
$message = '';

$tong_cong=0;
$tong_cong_1=0;
include 'admin/config.php';
if(isset($_SESSION['id_them_vao_gio']))
{
for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
{
    $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
}
?>

<li class="cart-content tr-dropdown">
    <a href="?ref=view_cart"><span class="icon icon-shopping-basket"></span> <span class="cart-number"><?php echo $so_luong; ?></span></a>
    <div class="tr-dropdown-menu">
        <ul class="global-list">
            <?php
            for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++) {
                $tv = "select * from products where id='" . $_SESSION['id_them_vao_gio'][$i] . "'";
                $tv_1 = mysqli_query($connect, $tv);
                $tv_2 = mysqli_fetch_array($tv_1);
                $id = $tv_2['id'];
                $gia_goc=$tv_2['price'];
                $gia_goc=number_format($gia_goc,0,",",".");
                $gia_giam=$tv_2['price_sale'];
                $gia_giam=number_format($gia_giam,0,",",".");

                $tien=$tv_2['price_sale']*$_SESSION['sl_them_vao_gio'][$i];
                $tong_cong = $tong_cong + $tien;
                $tong_cong_1=number_format($tong_cong,0,",",".");
                $name_id = "id_" . $i;
                $name_sl = "sl_" . $i;
                if ($_SESSION['sl_them_vao_gio'][$i] != 0) {
                    ?>

                    <li class="remove-item">
                        <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                        <div class="product" style="height: auto !important;">
                            <a href="?ref=detail_product&id=<?php echo $id ?>">
                                    <span class="product-image-1">
                                        <img src="admin/products/uploads/<?php echo $tv_2['file_name'] ?>"
                                             alt="<?php echo $tv_2['file_name'] ?>" class="img-fluid" style="width: 40%;">
                                    </span>
                                <span class="product-title"><?php echo $tv_2['name'] ?></span><br>
                                <span class="price"><del><?php echo $gia_goc ?>
                                        <sup>đ</sup></del><?php echo $gia_giam ?><sup>đ</sup></span><br>
                                <p><?php echo $_SESSION['sl_them_vao_gio'][$i]?><sup>kg</sup></p>
                            </a>
                        </div><!-- /.product -->
                    </li>

                    <?php
                }
            }
            }
            else {?>
            <li class="cart-content tr-dropdown">
                <a href="?ref=view_cart"><span class="icon icon-shopping-basket"></span> <span class="cart-number"><?php echo $so_luong; ?></span></a>
                <div class="tr-dropdown-menu">
                    <ul class="global-list">
                        <li class="remove-item">
                            <span>Không có sản phẩm nào</span>
                        </li>
                        <?php }?>
                    </ul>
                    <div class="total-price">
                        <span><strong>Tổng tiền: </strong><?php echo $tong_cong_1?><sup>đ</sup></span>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-primary cart-button" href="?ref=view_cart" style="padding: 10px 12px">Xem giỏ hàng</a>
                        <a class="btn btn-primary" href="?ref=view_cart">Thanh toán</a>
                    </div>
                </div><!-- /.tr-dropdown-menu -->
            </li>