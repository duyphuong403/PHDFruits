<?php
if(!isset($bien_bao_mat)){exit();}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $truy_van_xoa="DELETE FROM products WHERE id = '$id' ";
    mysqli_query($connect,$truy_van_xoa);
}else{
    thong_bao_html("Không xoá được sản phẩm");
}
//header('location: ref=products');


