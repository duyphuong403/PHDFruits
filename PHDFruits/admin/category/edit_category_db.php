<?php
if(!isset($bien_bao_mat)){exit();}

?>
<?php
	require "config.php";
	$ten_menu=trim($_POST['ten']);
	$ten_menu=str_replace("'","&#39;",$ten_menu);
	$id=$_GET['id'];
	if($ten_menu!="")
	{
		$tv="UPDATE category SET name_category = '$ten_menu' WHERE id =$id;";
		mysqli_query($connect,$tv);
	}
	else 
	{
		thong_bao_html("Tên Danh Mục chưa được điền vào");
	}
?>