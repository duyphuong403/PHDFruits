<?php
require ('admin/config.php');
if(isset($_GET['id']) && $_SESSION['detail_cart']="co") {
    $id = $_GET['id'];
    $tv = mysqli_query($connect, "select * from products where id = '$id'");
    $tv_1 = mysqli_fetch_array($tv);
    $so_luong = $tv_1['quantity'];
    if ($_GET['quantity'] > $so_luong) {
        thong_bao_html("Số lượng tồn kho không đủ");
    } else {
        if (isset($_SESSION['id_them_vao_gio'])) {
            $so = count($_SESSION['id_them_vao_gio']);
            $trung_lap = "khong";
            for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
                if ($_SESSION['id_them_vao_gio'][$i] == $_GET['id']) {
                    $trung_lap = "co";
                    $vi_tri_trung_lap = $i;
                    break;
                }
            }
            if ($trung_lap == "khong") {
                $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
                $_SESSION['sl_them_vao_gio'][$so] = $_GET['quantity'];
            }
            if ($trung_lap == "co") {
                $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['quantity'];
            }
        } else {
            $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
            $_SESSION['sl_them_vao_gio'][0] = $_GET['quantity'];
        }thong_bao_html("Thêm vào giỏ hàng thành công.");
    }
}

//trang_truoc();


