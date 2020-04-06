<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="admin/css/styles/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin/css/styles/login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="overflow:hidden">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-34">
                        Thông tin thành viên
					</span>
					<?php include('errors.php'); ?>
					<div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="username" class="input100" type="text" name="username" placeholder="Tên đăng nhập" value="<?php echo $username; ?>" minlength="8" maxlength="50">
						<span class="focus-input100"></span>
					</div><br>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password" style="border: 1px solid #e6e6e6">
						<input class="input100" type="password" name="password_1" placeholder="Mật Khẩu" minlength="8" maxlength="100">
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password_2" placeholder="Xác nhận mật khẩu" minlength="8" maxlength="100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="address" class="input100" type="text" name="address" placeholder="Địa chỉ liên hệ" maxlength="100">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="contact" class="input100" type="text" name="phone" placeholder="Số điẹn thoại liên lạc" maxlength="12" pattern="[0-9]">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="reg_user" class="login100-form-btn">
							Đăng ký
						</button>
                    </div>
                    
                    <div class="w-full text-center p-t-27 p-b-162">
						<span class="txt1">
							Quên
						</span>

						<a href="#" class="txt2">
							Tài khoản / mật khẩu
						</a>
					</div>

					<div class="w-full text-center">
                        <p>
                            Đã là thành viên? <a href="login.php">Đăng nhập</a>
                        </p>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('admin/css/styles/login/images/login_bg.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>