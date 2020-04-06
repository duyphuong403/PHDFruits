<?php
    if(!isset($bien_bao_mat)){exit();}
include 'config.php';
    if (!isset($_POST['width'])){
        $rong = null;
    }else{
        $rong=$_POST['width'];
    }
    if (!isset($_POST['height'])){
        $cao = null;
    }else{
        $cao=$_POST['height'];
    }
    $targetDir = "banner/uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        // Check if file already exists
        if (file_exists($fileName)) {
            echo "Sorry, file already exists.";
        } else {
            // Upload file to server
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $tv = "insert into banner (file_name, width, height, date_created) values ('$fileName','$rong','$cao', NOW())";
                mysqli_query($connect, $tv);
            }
        }
    }else {
        thong_bao_html("Xin vui lòng chọn ảnh ");
    }

?>