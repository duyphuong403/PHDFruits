<?php
include 'config.php';
if(trim($_GET['key'])!=""){
    $m=explode(" ",$_GET['key']);
    $chuoi_tim_sql="";
    for($i=0;$i<count($m);$i++)
    {
        $tu=trim($m[$i]);
        if($tu!="")
        {
            $chuoi_tim_sql=$chuoi_tim_sql." name like '%".$tu."%' or";
        }
    }

    $m_2=explode(" ",$chuoi_tim_sql);
    $chuoi_tim_sql_2="";
    for($i=0;$i<count($m_2)-1;$i++)
    {
        $chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
    }

    $so_du_lieu=5;
    $tv="select count(*) from products where $chuoi_tim_sql_2";
    $tv_1=mysqli_query($connect,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_du_lieu);

    if(!isset($_GET['page']))
    {
        $_GET['page'] = 1;
        $vtbd=0;
    }else{
        $vtbd=($_GET['page']-1)*$so_du_lieu;
    }

    $tv="select * from products where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";

    $tv_1=mysqli_query($connect,$tv);?>
    <div class="col-md-9">
        <center>
            <br><br>
            <a href="?ref=products"><h2>Quản lý sản phẩm</h2></a>
        </center>
        <?php include 'products/form_search.php';?>

        <?php
        if(!isset($_GET['id_menu']))
        {
            $id_menu="all_category";
        }
        else
        {
            if($_GET['id_menu']!="" and $_GET['id_menu']!="all_category")
            {
                $id_menu=$_GET['id_menu'];
            }
            else
            {
                $id_menu="all_category";
            }
        }
        ?>
        <br>

        <br>
        <br>
        <table border="1" class="table table-striped table-bordered">
            <tr>
                <td><b>id</b></td>
                <td><b>Hình ảnh</b></td>
                <td><b>Tên</b></td>
                <td><b>Giá</b></td>
                <td><b>Giá giảm</b></td>
                <td><b>Ngày tạo</b></td>
                <td><b>Ngày sửa</b></td>
                <td><b>Action</b></td>
            </tr>
            <?php
            while($tv_2=mysqli_fetch_array($tv_1))
            {
                $id=$tv_2['id'];
                $ten=$tv_2['name'];
                $tenhinh= $tv_2['file_name'];
                $gia=$tv_2['price'];
                $gia=number_format($gia,0,",",".");
                $gia_giam=$tv_2['price_sale'];
                $gia_giam=number_format($gia_giam,0,",",".");
                $link_hinh="products/uploads/".$tv_2['file_name'];
                $ngay_tao = $tv_2['date_created'];
                $ngay_sua = $tv_2['date_modified'];
                $link_sua="?ref=edit_product&id_menu=".$id_menu."&id=".$id."&page=".$_GET['page'];
                $link_xoa="?delete_product=yes&id=".$id;
                ?>
                <tr>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $id; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>" >
                            <img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" ><p><?php echo $tenhinh; ?></p>
                        </a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ten; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $gia; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $gia_giam; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ngay_tao; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ngay_sua; ?></a>
                    </td>
                    <td>
                        <a class="hvr-float" href="<?php echo $link_sua; ?>" ><button class="btn btn-warning">Sửa</button></a>
                        <a class="hvr-float" href="<?php echo $link_xoa; ?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <center>
            <?php
                for($i=1;$i<=$so_trang;$i++)
                {
                    $link="?ref=search&key=".$_GET['key']."&page=".$i;
                    echo "<a href='$link' >";
                    echo $i;echo " ";
                    echo "</a>";
                }?>
        </center>
    </div>
<?php
}
else
{
    echo "<div class='col-md-9'><center>
            <h3>Bạn chưa nhập từ khóa</h3><br>
            <button onclick='goBack()' class='btn btn-success'>Quay lại</button>
        </center></div>";
}
?>
<script>
    function goBack() {
        window.history.back();
    }
</script>
