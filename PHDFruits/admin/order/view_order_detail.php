<?php
	if(!isset($bien_bao_mat)){exit();}
	include "config.php";
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from list_order where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten_nguoi_mua=$tv_2['cus_name'];
	$email=$tv_2['email'];
	$dien_thoai=$tv_2['phone'];
	$dia_chi=$tv_2['address'];
	$noi_dung=$tv_2['note'];
	$hang_duoc_mua=$tv_2['list_products'];
	$trang_thai = $tv_2['status'];
	$link_dong="?ref=order&page=".$_GET['page'];
	$link_xoa="?delete_order_detail=co&id=".$id."&page=".$_GET['page'];
    $link_report="?report&id=".$id;

?>

<div class="col-md-9">
    <center>
        <br><br>
        <a href="?ref=order"><h2>Quản lý đơn hàng</h2></a>
    </center>
    <a class="hvr-float" href="<?php echo $link_dong; ?>" style="float: right;"><button type="button" class="btn btn-warning">Đóng</button></a>
    <a href="<?php echo $link_xoa; ?>" class="hvr-float" style="float: right;margin-right:10px;"><button class="btn btn-danger" onclick="return confirm('Bạn Có Chắc Chắn Xóa Đơn Hàng Này Không?'">Xóa</button></a>
    <a style="margin-right:10px;float: right;" class="hvr-float" href="<?php echo $link_report ?>" target="_blank"><button type="button" class="btn btn-primary">In Hoá Đơn</button></a><br><br>
    <center>
        <h5 style="display: inline-block">Trạng thái đơn hàng: </h5>
        <?php
            if ($trang_thai == 0){
                echo "<b style='color: red'>Chưa giao</b>";
            }else{
                echo "<b style='color: blue'>Đã giao</b>";
            }
        ?>
    </center>
    <table border="1" class="table table-striped">
        <tr style="font-weight: bold; text-align: center">
            <td colspan="5"><b style="color:blue;font-size:20px;text-transform: uppercase;padding: 20px;" >Sản phẩm được đặt hàng </b></td>
        </tr>
        <tr>
            <td><b>STT</b></td>
            <td><b>Tên</b></td>
            <td><b>Giá bán</b></td>
            <td><b>Số lượng</b></td>
            <td><b>Tổng cộng</b></td>
        </tr>
        <?php
            $m=explode("[|||||]",$hang_duoc_mua);
            $tong_lon=0;
            for($i=0;$i<count($m);$i++)
            {
                if(isset($m[$i]))
                {
                    if($m[$i]!="")
                    {
                        $stt=$i+1;
                        $m_2=explode("[|||]",$m[$i]);
                        $id_sp=$m_2[0];
                        $sl_sp=$m_2[1];
                        $tv_sp="select id,name,price_sale from products where id='$id_sp' ";
                        $tv_sp_1=mysqli_query($connect,$tv_sp);
                        $tv_sp_2=mysqli_fetch_array($tv_sp_1);
                        $ten=$tv_sp_2['name'];
                        $gia=$tv_sp_2['price_sale'];
                        $gia_duoc_dinh_dang=number_format($gia,0,",",".");
                        $tong=$gia*$sl_sp;
                        $tong_duoc_dinh_dang=number_format($tong,0,",",".");
                        $tong_lon=$tong_lon+$tong;
                        if($sl_sp!=0)
                        {
                        ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $ten; ?></td>
                                <td><?php echo $gia_duoc_dinh_dang; ?></td>
                                <td><?php echo $sl_sp; ?></td>
                                <td><?php echo $tong_duoc_dinh_dang; ?></td>
                            </tr>
                        <?php
                        }
                    }
                }
            }
        ?>
        <tr>
            <td colspan="5" style="text-transform: uppercase">
                <br><br>
                Tổng tiền:
                <?php
                    $tong_lon_duoc_dinh_dang=number_format($tong_lon,0,",",".");
                    echo "<b style='color: red;font-size: 20px;'>".$tong_lon_duoc_dinh_dang."</b>";
                ?>
                <br><br>
            </td>
        </tr>
    </table>
    <br><br>
    <table border="1" class="table table-striped">
        <tr>
            <td colspan="6" style="color:blue;font-size:20px;text-transform: uppercase;padding: 20px;"><b>Thông tin người mua</b></td>
        </tr>
        <tr style="font-weight: bold;">
            <td>Tên người mua</td>
            <td>Email</td>
            <td>Điện thoại</td>
            <td>Địa chỉ</td>
            <td width="30%">Yêu cầu</td>
<!--            <td>Action</td>-->
        </tr>
        <tr>
            <td>
                <?php echo $ten_nguoi_mua; ?>
            </td>
            <td >
                <?php echo $email; ?>
            </td>
            <td >
                <?php echo $dien_thoai; ?>
            </td>
            <td >
                <?php echo $dia_chi; ?>
            </td>
            <td >
                <?php echo $noi_dung; ?>
            </td>
        </tr>
    </table>
    <br><br><br><br>
</div>
