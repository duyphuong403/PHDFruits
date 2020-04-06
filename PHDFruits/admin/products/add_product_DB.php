<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';
?>
<?php
$ten=trim($_POST['name']);
$ten=str_replace("'","&#39;",$ten);
$danh_muc=$_POST['category'];
$ton_kho= $_POST['quantity'];
$gia_goc=trim($_POST['price']);
$gia_giam=trim($_POST['price_sale']);
if($gia_goc==""){$gia_goc=0;}
if($gia_giam==""){$gia_giam=0;}
if (isset($_FILES['image'])){
    $ten_file_anh=$_FILES['image']['name'];
}
$trang_chu=$_POST['homepage'];
$noi_bat=$_POST['hot'];
$noi_dung=$_POST['description'];
$noi_dung=str_replace("'","&#39;",$noi_dung);
$tv_m="select max(sort_homepage) from products";
$tv_m_1=mysqli_query($connect,$tv_m);
$tv_m_2=mysqli_fetch_array($tv_m_1);
$sap_xep_trang_chu=$tv_m_2[0]+1;
if($ten!="")
{
    if ($ton_kho < 0){
        thong_bao_html("Số lượng tồn kho không thể nhỏ hơn 0");
    }

    $tv_1 = mysqli_query($connect,"select * from products where name = '$ten'");
    if (mysqli_num_rows($tv_1) >= 1){
        thong_bao_html("Tên sản phẩm đã tồn tại");
    }else {
        if ($ten_file_anh != "") {
            $tv_k = "select count(*) from products where file_name='$ten_file_anh' ";
            $tv_k_1 = mysqli_query($connect, $tv_k);
            $tv_k_2 = mysqli_fetch_array($tv_k_1);
            if ($tv_k_2[0] == 0) {
                $tv = "INSERT INTO products 
  (name,quantity,category,price,price_sale,file_name,description,hot,homepage,sort_homepage,date_created) VALUES
  ('$ten','$ton_kho','$danh_muc','$gia_goc','$gia_giam','$ten_file_anh','$noi_dung','$noi_bat','$trang_chu',
				'$sap_xep_trang_chu',NOW());";
                mysqli_query($connect, $tv);

                $duong_dan_anh = "products/uploads/" . $ten_file_anh;
                move_uploaded_file($_FILES['image']['tmp_name'], $duong_dan_anh);

                $_SESSION['category'] = $danh_muc;
                $_SESSION['option_homepage'] = $trang_chu;
                $_SESSION['option_hot'] = $noi_bat;
            } else {
                thong_bao_html("Hình ảnh bị trùng tên");
            }
        } else {
            thong_bao_html("Chưa chọn ảnh");
        }
    }
}
else
{
    thong_bao_html("Tên sản phẩm chưa được điền vào");
}
?>