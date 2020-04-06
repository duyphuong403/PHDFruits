<?php
if(!isset($bien_bao_mat)){exit();}

include 'config.php';

?>
<?php
$so_dong_tren_mot_trang=10;
if(!isset($_GET['page'])){$_GET['page']=1;}

$tv="select count(*) from category";

$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

$vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
$tv="select * from category order by id limit $vtbd,$so_dong_tren_mot_trang";
$tv_1=mysqli_query($connect,$tv);
?>
<div class="col-md-9">
    <center>
        <br><br>
        <a href="?ref=category"><h2>Quản lý danh mục</h2></a>
        <br><br>
    </center>
    <table border="1" class="table table-striped" >
        <tr style="font-weight: bold; text-align: center">
            <td>ID</td>
            <td><b>Tên Danh Mục</b></td>
            <td><b>Action</b></td>
        </tr>
        <?php
        while($tv_2=mysqli_fetch_array($tv_1))
        {
            $id=$tv_2['id'];
            $ten=$tv_2['name_category'];
            $link_sua="?ref=edit_category&id=".$id."&page=".$_GET['page'];
            $link_xoa="?delete_category=yes&id=".$id;
            ?>
        <tr>
            <td><a class="hvr-float" href="<?php echo $link_sua?>"><?php echo $id ?></a></td>
            <td><a class="hvr-float" href="<?php echo $link_sua?>"><?php echo $ten ?></a></td>
            <td>
                <a class="hvr-float" href="<?php echo $link_sua?>"><button class="btn btn-warning">Sửa</button></a>
                <a class="hvr-float" href="<?php echo $link_xoa?>"><button class="btn btn-danger" onclick="return confirm('Bạn Có Chắc Chắn Xóa Danh Mục Này Không?')">Xoá</button></a>
            </td>
        <?php } ?>
        </tr>
    </table>
    <a class="hvr-float" href="?ref=add_category"><button class="btn btn-success hvr-float" style="width: 180px;font-size: 20px;">Thêm danh mục</button></a>
    <br>
    <?php
    for($i=1;$i<=$so_trang;$i++)
    {
        $link_phan_trang="?ref=category&page=".$i;
        echo "<a href='$link_phan_trang' class='phan_trang hvr-float' >";
        echo $i;
        echo "</a> ";
    }
    ?>
    <br><br>
</div>