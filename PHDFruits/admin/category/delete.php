<?php
if(!isset($bien_bao_mat)){exit();}
require "config.php";
$id=$_GET['id'];
$tv="select count(*) from products where category ='$id' ";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
if($tv_2[0]==0)
{
    $truy_van_xoa="DELETE FROM category WHERE id = $id ";
    mysqli_query($connect,$truy_van_xoa);
}
else
{
    thong_bao_html("Danh mục này vẫn còn dữ liệu nên không thể xóa");
}