<?php
if (!isset($bien_bao_mat)){exit();}
require 'config.php';
    $id = 1;
    $sdt1 = $_POST['sdt1'];
    $sdt2 = $_POST['sdt2'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $map = $_POST['map'];


    //Xu ly code Embed Google Map
    $map = str_replace( "width=\"600\"", "", $map );
    $map = str_replace( "height=\"450\"", "", $map );
    $map = str_replace( "frameborder=\"0\"", "height=\"400px\"", $map );
    $map = str_replace( "style=\"border:0\"", "class=\"container\"", $map );

    $sql = "UPDATE company_info SET sdt1 = '$sdt1', sdt2 = '$sdt2', email ='$email', address = '$address', map = '$map' WHERE id = '$id'";
   mysqli_query($connect, $sql);

//    mysqli_stmt_bind_param($stmt, "sssssi", $sdt1, $sdt2, $email, $address, $map, $id);

?>
<script type="text/javascript">
    alert("Cập nhật thành công");
</script>
