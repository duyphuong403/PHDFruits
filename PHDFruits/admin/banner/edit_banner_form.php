<?php
if(!isset($bien_bao_mat)){exit();}
include 'config.php';
$id=$_GET['id'];
$tv="select * from banner where id = '$id'";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$rong=$tv_2['width'];
$cao=$tv_2['height'];
$ten_anh=$tv_2['file_name'];
$link_hinh="banner/uploads/".$tv_2['file_name'];
?>
<div class="col-md-9">
    <form action="" method="post" enctype="multipart/form-data" >
        <table width="990px" >
            <tr>
                <center>
                    <br><br>
                    <h2>Sửa banner</h2>
                    <br><br>
                </center>
            </tr>
            <tr>
                <td colspan="2" valign="top" >
                    <br><br>
                    <a href="<?php echo $link_hinh; ?>" target="_blank"><img src="<?php echo $link_hinh; ?>" width="<?php echo $rong; ?>" height="<?php echo $cao; ?>" ></a>
                    <br><br><br>
                    <input type="file" name="hinh_anh" >
                    <input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
                    <br><br><br>
                </td>
            </tr>
            <tr style="float: left;">
                <td>Rộng :
                    <input type="number" class="form-control" style="display: inline-block;width:400px;margin-top:3px;margin-bottom:3px;" name="width" value="<?php echo $rong; ?>" required min="1000" max="2000" title="Độ rộng từ 1000-2000">&nbsp;
                </td>
                <td>Cao :
                    <input type="number" min="200" max="700" required class="form-control" style="display: inline-block;width:400px;margin-top:3px;margin-bottom:3px;" name="height" value="<?php echo $cao; ?>" >
                </td>
            </tr>
        </table>
        <center>
            <br><br>
            <input type="submit" class="btn btn-success hvr-float" name="edit_banner" value="Lưu" style="width:75px;height:50px;font-size:24px" >
            <a class="hvr-float" href="?ref=banner"><button type="button" class="btn btn-warning" style="width:75px;height:50px;font-size:24px" >Đóng</button></a><br><br><br><br>
        </center>
    </form>
</div>