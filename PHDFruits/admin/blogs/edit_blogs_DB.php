<?php
if(!isset($bien_bao_mat)){exit();}
    require 'config.php';
        $id = $_POST['id'];
        $title = $_POST['title'];
        $link = $_POST['link'];
        $post = $_POST['post'];
        $author = $_POST['tacgia'];
        $date = $_POST['date'];

        $sql = "UPDATE articles SET title = '$title', link = '$link', post = '$post', author = '$author', date = '$date' WHERE id = '$id'";
        mysqli_query($connect, $sql);
//        mysqli_stmt_bind_param($stmt, "sssssi",$title, $link, $post, $author, $date, $id);

?>



