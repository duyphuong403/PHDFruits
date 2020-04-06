<?php
if(!isset($bien_bao_mat)){exit();}
?>
<?php
include "config.php";
$so_dong_tren_mot_trang=20;
if(!isset($_GET['page'])){$_GET['page']=1;}

$tv="select count(*) from list_order";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

$vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
$tv="select * from list_order where status = 0 order by id desc limit $vtbd,$so_dong_tren_mot_trang";
$tv_1=mysqli_query($connect,$tv);
?>
<div class="col-md-9">
    <center>
       <h2 style="text-transform: uppercase;display: inline-block;padding-right: 60px;color: red">Đơn Hàng Chưa Giao</h2><br>
        <a href="?ref=order" style="float: right"><button class="btn btn-warning hvr-float">Đóng</button></a>
        <br><br>
    </center>
    <table border="1" class="table table-striped" >
        <tr style="font-weight: bold; text-align: center">
            <td><b>ID</b></td>
            <td><b>Tên</b></td>
            <td><b>Email</b></td>
            <td><b>Điện thoại</b></td>
            <td><b>Ngày mua</b></td>
            <td><b>Trạng thái</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php
        while ($tv_2 = mysqli_fetch_array($tv_1)) {
            $id = $tv_2['id'];
            $ten = $tv_2['cus_name'];
            $email = $tv_2['email'];
            $dien_thoai = $tv_2['phone'];
            $ngay_mua = $tv_2['date_created'];
            $link_xem = "?ref=view_order&id=" . $id . "&page=" . $_GET['page'];
            $link_xoa="?delete_order_detail=co&id=". $id;
            ?>
            <tr class="a_1">
                <td>
                    <a href="<?php echo $link_xem; ?>" class="hvr-float"><?php echo $id; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_xem; ?>" class="hvr-float"><?php echo $ten; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_xem; ?>" class="hvr-float"><?php echo $email; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_xem; ?>" class="hvr-float"><?php echo $dien_thoai; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_xem; ?>" class="hvr-float"><?php echo $ngay_mua; ?></a>
                </td>
                <td>
                    <?php if ($tv_2['status'] == 0){
                        echo "<a href='$link_xem' class='hvr-float'><b style='color: red'>Chưa giao</b><a/>";
                    }else{
                        echo "<a href='$link_xem' class='hvr-float'><b style='color: blue'>Đã giao</b></>";
                    } ?>
                </td>
                <td align="center">
                    <a class="hvr-float" href="<?php echo $link_xem ?>">
                        <button class="btn btn-primary">Xem</button>
                    </a>
                    <a class="hvr-float" href="<?php echo $link_xoa ?>">
                        <button class="btn btn-warning">Xóa</button>
                    </a>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="7" align="center" >
                <br>
                <?php
                for($i=1;$i<=$so_trang;$i++)
                {
                    $link_phan_trang="?ref=view_order&page=".$i;
                    echo "<a href='$link_phan_trang' class='phan_trang hvr-float' >";
                    echo $i;
                    echo "</a>";
                }?>
                <br><br>
            </td>
        </tr>
    </table>
</div>
