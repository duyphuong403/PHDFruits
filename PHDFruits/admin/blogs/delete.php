
<?php
if (!isset($bien_bao_mat)){exit();}
    require 'config.php';

    $id = $_POST['id'];
    $sql = "DELETE FROM articles WHERE id = ?";
    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "i", $_POST['id']);

    if (!mysqli_stmt_execute($stmt)) {
        echo mysqli_error($connect);
    }

    mysqli_close($connect);

?>
