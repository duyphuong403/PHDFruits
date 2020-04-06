<?php
if (!isset($bien_bao_mat)){ exit();}

include "config.php";
if (isset($_GET['status'])){
    $status = $_GET['status'];
}
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$tv = mysqli_query($connect,"update list_order set status = b'$status' where id = '$id'");
trang_truoc_html();

