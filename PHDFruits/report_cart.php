<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 13/02/2019
 * Time: 1:46 CH
 */
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thông tin đơn hàng Số </h4>
            </div>
            <div class="modal-body">
                <?php
                echo "<table>";
                echo "<tr>";
                echo "<td colspan=4 style='text-align: center;'>";
                echo "<h3>Thông tin sản phẩm</h3>";
                echo "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td width='200px' >Tên</td>";
                echo "<td width='150px' >Số lượng</td>";
                echo "<td width='150px' >Đơn giá</td>";
                echo "<td width='170px' >Thành tiền</td>";
                echo "</tr>";
                $tong_cong=0;

                for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
                {
                    $tv="select id,name,price_sale,quantity from products where id='".$_SESSION['id_them_vao_gio'][$i]."'";
                    $tv_1=mysqli_query($connect,$tv);
                    $tv_2=mysqli_fetch_array($tv_1);
                    $gia_giam=$tv_2['price_sale'];
                    $gia_giam=number_format($gia_giam,0,",",".");
                    $tien=$tv_2['price_sale']*$_SESSION['sl_them_vao_gio'][$i];
                    $tien_1=number_format($tien,0,",",".");
                    $tong_cong=$tong_cong+$tien;
                    $tong_cong_1=number_format($tong_cong,0,",",".");
                    $name_id="id_".$i;
                    $name_sl="sl_".$i;
                    if($_SESSION['sl_them_vao_gio'][$i]!=0)
                    {
                        echo "<tr>";
                        echo "<td style='color: #80b435'><a href='?ref=detail_product&id=".$tv_2['id']."'>".$tv_2['name']."</a></td>";
                        echo "<td>";
//        echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
                        echo $_SESSION['sl_them_vao_gio'][$i];
                        echo "</td>";
                        echo "<td>".$gia_giam."<sup>đ</sup></td>";
                        echo "<td>".$tien_1."<sup>đ</sup></td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                }
                echo "<h3 style='color: #80b435;text-align: center;'>Tổng giá trị đơn hàng là : ".$tong_cong_1."<sup>đ</sup></h3>";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

