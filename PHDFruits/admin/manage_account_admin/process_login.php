<?php
	if(!isset($bien_bao_mat)){exit();}
	require 'config.php';
	function thong_bao_abc($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<style type="text/css">
				a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
				a.trang_truoc_c8w:hover{color:red;}
				</style>

                <script type="text/javascript">
                    alert("<?php echo $c; ?>");
                        window.history.back();
                </script>
			</body>
			</html>
		<?php
		exit();
	}
	function trang_truoc_abc()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>
			</body>
			</html>
		<?php
	}
	
	if(isset($_POST['login_admin']))
	{
		$ky_danh=$_POST['username'];
		$ky_danh=str_replace("'","",$ky_danh);
		$ky_danh=str_replace('"',"",$ky_danh);
		
		$mat_khau=md5($_POST['password']);
		$mat_khau=md5($mat_khau);
		
		$tv="select count(*) from account_admin where username='$ky_danh' and password='$mat_khau' ";
		$tv_1=mysqli_query($connect,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$_SESSION['username']=$ky_danh;
			$_SESSION['password']=$mat_khau;
		}
		else 
		{
			thong_bao_abc("Mật khẩu hoặc tài khoản không đúng");
		}
		trang_truoc_abc();
	}
	
	if(isset($_SESSION['username']))
	{
		$ky_danh=$_SESSION['username'];
		$mat_khau=$_SESSION['password'];
		$tv="select count(*) from account_admin where username='$ky_danh' and password='$mat_khau' ";
		$tv_1=mysqli_query($connect,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$xac_dinh_dang_nhap="yes";
		}
	}
?>