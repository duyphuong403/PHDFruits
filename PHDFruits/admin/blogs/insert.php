<?php
    require 'config.php';
        $title = $_POST['title'];
        $link = $_POST['link'];
        $post = $_POST['post'];
        $author = $_POST['tacgia'];
        $date = $_POST['date'];

        $sql = "INSERT INTO articles (title, link, post, author, date) VALUES ('$title', '$link', '$post', '$author', '$date')";
       mysqli_query($connect, $sql);
//        mysqli_stmt_bind_param($stmt, "sssss", $title, $link, $post, $author, $date);


?>

