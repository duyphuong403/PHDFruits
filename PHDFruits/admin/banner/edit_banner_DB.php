<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';

$id = $_GET['id'];
$rong=$_POST['width'];
$cao=$_POST['height'];
$ten_file_anh_tai_len=$_FILES['hinh_anh']['name'];
if($ten_file_anh_tai_len!="")
{
    $ten_file_anh=$ten_file_anh_tai_len;
}
else
{
    $ten_file_anh=$_POST['ten_anh'];
}
if($ten_file_anh_tai_len!="")
{
    $duong_dan_anh_cu="banner/uploads/".$_POST['ten_anh'];
    unlink($duong_dan_anh_cu);
    $duong_dan_anh="banner/uploads/".$ten_file_anh_tai_len;
    move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
}

$tv="
	UPDATE banner SET 
	file_name = '$ten_file_anh',
	width = '$rong',
	height = '$cao',
	date_modified = NOW() 
	WHERE id= '$id';
	";
mysqli_query($connect,$tv);

?>