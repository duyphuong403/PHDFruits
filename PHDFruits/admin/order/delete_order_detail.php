<?php 
if(!isset($bien_bao_mat)){exit();}
require "config.php";
?>
<?php 
$id=$_GET['id'];
$tv_1 = "select * from list_order where id = '$id'";
$tv_2 = mysqli_query($connect,$tv_1);
$tv_3 = mysqli_fetch_array($tv_2);
$hang_duoc_mua = $tv_3['list_products'];
$m=explode("[|||||]",$hang_duoc_mua);
$tong_lon=0;
for($i=0;$i<count($m);$i++) {
    if (isset($m[$i])) {
        if ($m[$i] != "") {
            $stt = $i + 1;
            $m_2 = explode("[|||]", $m[$i]);
            $id_sp = $m_2[0];
            $sl_sp = $m_2[1];
            $tv_sp = "update products set quantity = quantity + '$sl_sp' where id='$id_sp' ";
            $tv_sp_1 = mysqli_query($connect, $tv_sp);
        }
    }
}
$tv="DELETE FROM list_order WHERE id = $id ";
mysqli_query($connect,$tv);

?>