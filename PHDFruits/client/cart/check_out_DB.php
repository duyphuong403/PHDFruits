<?php
include 'admin/config.php';
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['cus_name']);
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['phone']);
		$dia_chi=trim(nl2br($_POST['address']));
		$noi_dung=nl2br($_POST['note']);
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}

            $m=explode("[|||||]",$hang_duoc_mua);
            $tong_lon=0;
            for($i=0;$i<count($m);$i++) {
                if (isset($m[$i])) {
                    if ($m[$i] != "") {
                        $stt = $i + 1;
                        $m_2 = explode("[|||]", $m[$i]);
                        $id_sp = $m_2[0];
                        $sl_sp = $m_2[1];
                        $tv_3 = mysqli_query($connect,"select * from products where id = '$id_sp'");
                        $tv_4 = mysqli_fetch_array($tv_3);
                        $so_luong = $tv_4['quantity'];
                        $ten_sp = $tv_4['name'];
                        if ($sl_sp > $so_luong){
                            thong_bao_html("Số lượng tồn kho '$ten_sp' không đủ. Chỉ còn '$so_luong'kg");
                        }else{
                            $tv_sp = "update products set quantity = quantity - '$sl_sp' where id='$id_sp' ";
                            $tv_sp_1 = mysqli_query($connect, $tv_sp);
                        }
                    }
                }
            }
            mysqli_query($connect, "insert into list_order (cus_name ,email ,address , phone , note ,list_products) values ('$ten_nguoi_mua','$email','$dia_chi','$dien_thoai','$noi_dung','$hang_duoc_mua')");
            unset($_SESSION['id_them_vao_gio']);
            unset($_SESSION['sl_them_vao_gio']);
            chuyen_trang_hoa_don("Cảm ơn bạn đã mua hàng tại website chúng tôi. Nhân viên sẽ gọi điện thoại xác minh đơn hàng trong thời gian sớm nhất.", "index.php");
		}
		else
		{
			thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
			trang_truoc();
			exit();
		}
	}
?>