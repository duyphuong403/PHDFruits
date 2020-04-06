<?php
    require 'admin/config.php';
        $name = $_GET['name'];
        $email = $_GET['email'];
        $message = $_GET['message'];

        $sql = "INSERT INTO comments (name, email, message) VALUES ('$name', '$email', '$message')";
        mysqli_query($connect, $sql);
//        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
trang_truoc();

?>

