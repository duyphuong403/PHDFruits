
<?php
if (!isset($bien_bao_mat)) {exit();}
include 'config.php';

?>

<div class="col-md-9">
    <center>
        <br><br>
       <h2>Quản lý sản phẩm</h2>
        <a href="?ref=add_product" class="hvr-shutter-out-horizontal"><h3>Thêm sản phẩm</h3></a>
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
    <div style="float: left;width: 20%;" >
       <select class="form-control" name="danh_muc" onchange="window.location='?ref=products&id_menu='+this.value" >
            <option value="" >Chọn toàn bộ danh mục</option>
            <?php
            $tv="select * from category order by id ";
            $tv_1=mysqli_query($connect,$tv);
            $a="";
            while($tv_2=mysqli_fetch_array($tv_1))
            {
                $ten=$tv_2['name_category'];
                $id=$tv_2['id'];
                if($id_menu==$id)
                {
                    $a="selected";
                }
                echo "<option value='$id' $a >";
                echo $ten;
                echo "</option>";
                $a="";
            }
            ?>
        </select>
    </div>
    <br>
    <br>
    <?php
    $so_dong_tren_mot_trang=10;
    if(!isset($_GET['page'])){
        $_GET['page']=1;
    }

    if($id_menu=="all_category")
    {
        $tv="select count(*) from products";
    }
    else
    {
        $tv="select count(*) from products where category='$id_menu' ";
    }
    $tv_1=mysqli_query($connect,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

    $vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
    if($id_menu=="all_category")
    {
        $tv="select * from products order by id desc limit $vtbd,$so_dong_tren_mot_trang";
    }
    else
    {
        $tv="select * from products where category ='$id_menu' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
    }
    $tv_1=mysqli_query($connect,$tv);

    ?>

    <table border="1" class="table table-striped table-bordered">
        <tr>
            <td><b>id</b></td>
            <td><b>Tên</b></td>
            <td><b>Hình ảnh</b></td>
            <td><b>Tồn kho</b></td>
            <td><b>Giá</b></td>
            <td><b>Giá giảm</b></td>
            <td><b>Trang chủ</b></td>
            <td><b>Nổi bật</b></td>
            <td><b>Sắp xếp trang chủ</b></td>
            <td><b>Nội dung</b></td>
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
            $ton_kho= $tv_2['quantity'];
            $gia_goc=$tv_2['price'];
            $gia_goc=number_format($gia_goc,0,",",".");
            $gia_giam=$tv_2['price_sale'];
            $gia_giam=number_format($gia_giam,0,",",".");
            $trang_chu=$tv_2['homepage'];
            $noi_bat= $tv_2['hot'];
            $sap_xep_trang_chu =$tv_2['sort_homepage'];
            $noi_dung =$tv_2['description'];
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
                        <?php echo $ten; ?>
                    </a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" ><p><?php echo $tenhinh; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ton_kho; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $gia_goc; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $gia_giam; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $trang_chu; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $noi_bat; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $sap_xep_trang_chu; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>" style="width: 100px;height: 100%;text-overflow: ellipsis; white-space: nowrap;overflow: hidden;"><?php echo $noi_dung; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ngay_tao; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><?php echo $ngay_sua; ?></a>
                </td>
                <td>
                    <a class="hvr-float" href="<?php echo $link_sua; ?>"><button class="btn btn-warning hvr-float">Sửa</button></a><br><br>
                    <a class="hvr-float" href="<?php echo $link_xoa; ?>"><button onclick="return confirm('Bạn Có Chắc Chắn Xóa Sản Phẩm Này Không?')" class="btn btn-danger hvr-float">Xóa</button></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
        <br>
        <?php
        for($i=1;$i<=$so_trang;$i++)
        {
            $link_phan_trang="?ref=products&id_menu=".$id_menu."&page=".$i;
            echo "<a href='$link_phan_trang' class='phan_trang hvr-float' style='color: #000000;' >";
            echo $i;
            echo "</a> ";
        }
        ?>
                <br><br><br><br><br><br>
</div>