<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';
?>
<?php 
	$ten_menu=$_POST['ten'];
	if($ten_menu!="")
	{
		$tv="INSERT INTO category (name_category) VALUES (?);";
        $stmt = mysqli_prepare($connect, $tv);
        mysqli_stmt_bind_param($stmt, "s", $ten_menu);
        mysqli_stmt_execute($stmt);
	}
	else 
	{
		thong_bao_html("Tên Danh Mục chưa được điền vào");
	}
?>