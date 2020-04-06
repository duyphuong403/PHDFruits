<?php
$gio_hang="khong";
if(isset($_SESSION['id_them_vao_gio']))
{
    $so_luong=0;
    for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
    {
        $so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
    }
    if($so_luong!=0)
    {
        $gio_hang="co";
    }
}
echo "<div class=\"tr-breadcrumb text-center bg-image\" style=\"background-image: url(client/images/breadcrumb-bg.jpg);\">";
echo "<div class='container'>";
	echo "<br><br><div class='page-title'><h2>Giỏ hàng</h2></div></div></div>";
	echo "<br>";
	echo "<br>";
echo "<div class='container'>";
	if($gio_hang=="khong")
	{
		echo "<h2 style='text-align: center;color: blue;'>Không có sản phẩm nào trong giỏ hàng</h2></div>";
	}
	else 
	{
		echo "<form action='' method='post' >";
		echo "<input type='hidden' name='update_cart' value='co'>";
		echo "<table>";
		    echo "<tr>";
		    echo "<td colspan=4 style='text-align: center;'>";
            echo "<h3>Thông tin sản phẩm</h3>";
            echo "</td>";
            echo "</tr>";
			echo "<tr style='font-weight: bold'>";
				echo "<td width='200px' >Tên</td>";
				echo "<td width='150px' >Số lượng</td>";
				echo "<td width='150px' >Đơn giá</td>";
				echo "<td width='170px' >Thành tiền</td>";
			echo "</tr>";
			$tong_cong=0;
            include 'admin/config.php';
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$tv="select id,name,price_sale,quantity,category from products where id='".$_SESSION['id_them_vao_gio'][$i]."'";
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
					echo "<td style='color: #80b435'><a href='?ref=detail_product&id=".$tv_2['id']."&id_menu=".$tv_2['category']."'>".$tv_2['name']."</a></td>";
					echo "<td>";
					echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
					echo "<input type='text' pattern='[0-9]{1,4}' required style='width:50px;text-align: center;' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
					echo "</td>";
					echo "<td>".$gia_giam."<sup>đ</sup></td>";
					echo "<td>".$tien_1."<sup>đ</sup></td>";
				echo "</tr>";
				}
			}
			echo "<tr>";
			echo "<td colspan='4' style='text-align: center'><b>Nhập Số lượng bằng 0 để xoá sản phẩm đã đặt</b></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td colspan='2' style='text-align: center'><input class='btn btn-primary cart-button' type='submit' value='Cập nhật' > </td>";
			?>
        <td colspan="2" style='text-align: center'><a href="?ref=store"><input class='btn btn-primary cart-button' type='button' value='Tiếp tục mua hàng'></a></td>
    </tr>
<?php
		echo "</table>";
		echo "</form>";
		echo "<br>";
		echo "<h3 style='color: #80b435;text-align: center;'>Tổng giá trị đơn hàng là : ".$tong_cong_1."<sup>đ</sup></h3>";

        echo "<br>";
        echo "<br>";
        echo "<form method='post' action='' name='myForm'>";
        echo "<input type='hidden' name='customer_info' value='co' > ";
        echo "<table>";
        echo "<tr>";
        echo "<td colspan='2' height='30px' style='text-align: center;'>";
        echo "<h3>Thông tin người mua hàng</h3>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td height='40px' >Lưu ý : </td>";
        echo "<td>";
        echo "<b>Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào</b>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td width='180px' >Tên người mua :</td>";
        echo "<td>";
        echo "<input type='text' style='width:400px' id='cus_name' name='cus_name' title='Tên khách hàng không được bỏ trống' required>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Email : </td>";
        echo "<td>";
        echo "<input type='email' style='width:400px' name='email' title='Email không được bỏ trống'>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Địa chỉ : </td>";
        echo "<td>";
        echo "<textarea style='width:400px;' id='address' name='address' title='Địa chỉ không được bỏ trống' required></textarea>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Điện thoại : </td>";
        echo "<td>";
        echo "<input type='text' style='width:400px' id='phone' name='phone' pattern='[0-9]{10,12}' title='Số điện thoại phải từ 10 - 12 số' required>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nội dung :</td>";
        echo "<td>";
        echo "<textarea style='width:400px;height:100px' name='note' placeholder='Yêu cầu (nếu có)' ></textarea>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>&nbsp;</td>";
        echo "<td>";?>
        <input class='btn btn-primary cart-button'  type='submit' value='Đặt Hàng'>
<?php
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        echo "</div>";
	}
?>
