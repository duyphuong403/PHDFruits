<?php
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
	require 'config.php';
	$tv="select * from account_admin where id='1' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ky_danh=$_POST['username'];
//	$mat_khau=$_POST['password'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];

	$mat_khau_tu_form=trim($_POST['password']);
	if($mat_khau_tu_form!="Mac_D1nh")
	{
		$mat_khau=md5($mat_khau_tu_form);
		$mat_khau=md5($mat_khau);
	}

	$tv="
	UPDATE account_admin SET 
	username = '$ky_danh',
	password = '$mat_khau',
	full_name = '$fullname',
	email = '$email' 
	WHERE id =1;
	";
	mysqli_query($connect,$tv);
	
	$_SESSION['username']=$ky_danh;
	$_SESSION['password']=$mat_khau;
	
	thong_bao_html("Đã cập nhật lại thông tin quản trị");			
	
?>