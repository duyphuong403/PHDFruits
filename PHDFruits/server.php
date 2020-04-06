<?php 
	session_start();
include "admin/config.php";
	// variable declaration
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);
		$address = mysqli_real_escape_string($connect, $_POST['address']);
		$contact = mysqli_real_escape_string($connect, $_POST['phone']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Tên đăng nhập không được bỏ trống");
		}

		if (empty($password_1)) { 
			array_push($errors, "Mật khẩu không được bỏ trống");
		}

		if ($password_1 != $password_2) {
			array_push($errors, "Hai mật khẩu không khớp nhau");
		}

		if (empty($address)) { 
			array_push($errors, "Địa chỉ liên hệ không được bỏ trống"); 
		}
		if (empty($contact)) { 
			array_push($errors, "Số điện thoại liên hệ không được bổ trống");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customer (username, password, address, phone, date_created, status) 
					  VALUES('$username', '$password', '$address', '$contact',NOW(),1)";
			mysqli_query($connect, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Đăng nhập thành công";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($connect, $_POST['username']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>