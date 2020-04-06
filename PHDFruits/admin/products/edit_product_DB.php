<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';

$id=$_GET['id'];
$ten=trim($_POST['name']);
$ten=str_replace("'","&#39;",$ten);
$ton_kho= $_POST['quantity'];
if ($ton_kho == ""){$ton_kho = 0;}
$gia_goc=trim($_POST['price']);
$gia_giam=trim($_POST['price_sale']);
if($gia_goc==""){$gia_goc=null;}
if($gia_giam==""){$gia_giam=0;}
$danh_muc = $_POST['category'];
$trang_chu=$_POST['homepage'];
$noi_bat=$_POST['hot'];
$noi_dung=$_POST['description'];
$sap_xep_trang_chu = $_POST['sort_home'];
$noi_dung=str_replace("'","&#39;",$noi_dung);
$ten_file_anh_tai_len=$_FILES['image']['name'];
if($ten_file_anh_tai_len !="")
{
    $ten_file_anh=$ten_file_anh_tai_len;
}
else
{
    $ten_file_anh=$_POST['image_name'];
}


if($ten!="")
{
    $tv_k = "select count(*) from products where file_name='$ten_file_anh' ";
    $tv_k_1 = mysqli_query($connect, $tv_k);
    $tv_k_2 = mysqli_fetch_array($tv_k_1);
    if ($tv_k_2[0] == 0 or $ten_file_anh_tai_len == "")
    {
        $tv = "UPDATE products SET name = '$ten',quantity = '$ton_kho',price = '$gia_goc',price_sale = '$gia_giam',file_name = '$ten_file_anh',category = $danh_muc,description = '$noi_dung',homepage = '$trang_chu',hot = '$noi_bat',sort_homepage = '$sap_xep_trang_chu', date_modified = NOW() WHERE id ='$id';
    ";
        mysqli_query($connect, $tv);
        if ($ten_file_anh_tai_len != "")
        {
            $duong_dan_anh = "products/uploads/" . $ten_file_anh_tai_len;
            move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);
            $duong_dan_anh_cu = "products/uploads/" . $_POST['image_name'];
            unlink($duong_dan_anh_cu);
        }
    }else{
        thong_bao_html("Hình ảnh bị trùng tên");
    }
}
else
{
    thong_bao_html("Tên sản phẩm không được bỏ trống");
}

?>