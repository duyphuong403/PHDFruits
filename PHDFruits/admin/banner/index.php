<?php
if(!isset($bien_bao_mat)){exit();}

include 'config.php';
?>
<?php
$so_dong_tren_mot_trang=10;
if(!isset($_GET['page'])){$_GET['page']=1;}

$tv="select count(*) from banner";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

$vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
$tv="select * from banner order by id limit $vtbd,$so_dong_tren_mot_trang";
$tv_1=mysqli_query($connect,$tv);
?>
<div class="col-md-9">
    <center>
        <br><br>
       <h2>Quản lý Banner</h2>
        <br><br>
    </center>
    <table border="1" class="table table-striped" >
        <tr style="font-weight: bold; text-align: center">
            <!--                <td><input type="checkbox" id="selectall" /></td>-->
            <td>ID</td>
            <td><b>Tên ảnh</b></td>
            <td><b>Độ rộng (px)</b></td>
            <td><b>Chiều cao(px)</b></td>
            <td><b>Ngày tạo</b></td>
            <td><b>Ngày sửa</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php
        while($tv_2=mysqli_fetch_array($tv_1))
        {
            $id=$tv_2['id'];
            $ten=$tv_2['file_name'];
            $rong = $tv_2['width'];
            $cao = $tv_2['height'];
            $ngay_tao=$tv_2['date_created'];
            $ngay_sua=$tv_2['date_modified'];
            $link_sua="?ref=edit_banner&id=".$id."&page=".$_GET['page'];
            $link_xoa="?delete_banner=yes&id=".$id;
            $targetDir = "banner/uploads/";
            $file_path = $targetDir.$ten
            ?>
            <tr>
                <td>
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" ><?php echo $id; ?></a>
                </td>
                <td width="50%">
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" >
                        <img src="<?php echo $file_path ?>" alt="<?php echo $ten ?>" style="width: 100%"><br>
                    <?php echo $ten; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" ><?php echo $rong; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" ><?php echo $cao; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" ><?php echo $ngay_tao; ?></a>
                </td>
                <td>
                    <a href="<?php echo $link_sua; ?>" class="hvr-float" ><?php echo $ngay_sua; ?></a>
                </td>
                <td align="center" >
                    <a href="<?php echo $link_sua; ?>"><button class="btn btn-warning hvr-float">Sửa</button></a><br>&nbsp;<br>
                    <a href="<?php echo $link_xoa; ?>"><button class="btn btn-danger hvr-float" onclick="return confirm('Bạn Có Chắc Chắn Xóa Ảnh Này Không?')">Xóa</button></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="?ref=add_banner"><button class="btn btn-success hvr-float" style="width: 160px;height: 55px;font-size: 22px;">Thêm Banner</button></a>
    <br>
    <?php
    for($i=1;$i<=$so_trang;$i++)
    {
        $link_phan_trang="?ref=banner&page=".$i;
        echo "<a href='$link_phan_trang' class='phan_trang hvr-float' >";
        echo $i;
        echo "</a> ";
    }
    ?>
    <br><br>
</div>