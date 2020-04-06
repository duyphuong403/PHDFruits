<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';
$id=$_GET['id'];
$tv="select * from banner";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);

$truy_van_xoa="DELETE FROM banner WHERE id = $id ";
mysqli_query($connect,$truy_van_xoa);
