<?php
    require_once 'connection.php';
        $id = $_POST['id'];
        $title = $_POST['title'];
        $link = $_POST['link'];
        $post = $_POST['post'];
        $author = $_POST['tacgia'];
        $date = $_POST['date'];
        $conn = getConnection();

        $sql = "UPDATE articles SET title = ?, link = ?, post = ?, author = ?, date = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssi",$title, $link, $post, $author, $date, $id);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

    </style>
    <title>Update</title>
</head>

<body>

<center>
    <h3><?php if (mysqli_stmt_execute($stmt)) {
            echo "Bài Viết Của Bạn Đã Được Cập Nhật.";
        }
        mysqli_stmt_close($stmt);

        mysqli_close($conn);
        ?>
    </h3>
    <form action="index.php">
        <button type="submit" class="btn btn-warning">Quay Lại Trang Quản Lý</button>
    </form>
</center>



</body>

</html>
