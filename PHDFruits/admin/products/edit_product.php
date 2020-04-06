<?php
    if(!isset($bien_bao_mat)){exit();}
    include 'config.php';

    $id=$_GET['id'];
    $tv="select * from products where id='$id' ";
    $tv_1=mysqli_query($connect,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $link_dong="?ref=products&page=".$_GET['page'];
//    $id=$tv_2['id'];
    $ten=$tv_2['name'];
    $ton_kho=$tv_2['quantity'];
    $id_danh_muc = $tv_2['category'];
    $sap_xep_trang_chu = $tv_2['sort_homepage'];
    $gia_goc=$tv_2['price'];
//    $gia_goc=number_format($gia_goc,0,",",".");
    $gia_giam=$tv_2['price_sale'];
//    $gia_giam=number_format($gia_giam,0,",",".");
    $tenhinh= $tv_2['file_name'];
    $noi_dung=$tv_2['description'];
    $noi_bat=$tv_2['hot'];
    $trang_chu=$tv_2['homepage'];
    $link_hinh="products/uploads/".$tv_2['file_name'];
    $ngay_tao = $tv_2['date_created'];
    $ngay_sua = $tv_2['date_modified'];
    $link_xoa="?delete_product=yes&id=".$id;
?>
<style>
    .form-control {
        width: 100%;
        display: inline-block;
        text-align: center;
    }
    b {
        text-transform: uppercase;
    }
</style>
<div class="col-md-9">
    <center>
        <h2>Sửa sản phẩm</h2><br><br>
    </center>
        <form action="" method="post" enctype="multipart/form-data">
            <table border="1" class="table table-striped">
                <tr>
                    <td><b>id </b></td>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <td><b>Hình ảnh</b></td>
                    <td>
                        <a href="<?php echo $link_hinh; ?>" class="lk_a1" style="font-size:24px" target="_blank" >
                            <img src="<?php echo $link_hinh; ?>" style="width:35%;margin-top:10px;margin-bottom:10px;" border="0" >
                            <input type="hidden" name="image_name" value="<?php echo $tenhinh; ?>" >
                        </a>
                        <input class="btn btn-block" type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td><b>Tên</b></td>
                    <td><input type="text" name="name" class="form-control" value="<?php echo $ten; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Số lượng</b></td>
                    <td><input type="text" name="quantity" class="form-control" value="<?php echo $ton_kho; ?>"></td>
                </tr>
                <tr>
                    <td><b>Giá</b></td>
                    <td><input type="text" name="price" class="form-control" value="<?php echo $gia_goc; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Giá giảm</b></td>
                    <td><input type="text" name="price_sale" class="form-control" value="<?php echo $gia_giam; ?>" required></td>
                </tr>
                <tr>
                    <td><b>Sắp xếp trang chủ</b></td>
                    <td><input type="number" min="1" max="1000" name="sort_home"  class="form-control" value="<?php echo $sap_xep_trang_chu;?>"></td>
                </tr>
                <tr>
                    <td><b>Danh Mục</b></td>
                    <td>
                        <select class="form-control" name="category" style="margin-top:3px;margin-bottom:3px;width:20%" >
                            <?php
                            $id_menu=$id_danh_muc;
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
                    </td>
                </tr>
                <tr>
                    <td><b>Trang chủ</b></td>
                    <td>
                        <?php
                        $a_1="";
                        $a_2="";
                        if($trang_chu=="Có" || $trang_chu=="có")
                        {
                            $a_2="selected";
                        }
                        ?>
                        <select class="form-control" style="width:10%" name="homepage" style="margin-top:3px;margin-bottom:3px;" >
                            <option value="" <?php echo $a_1; ?> >Không</option>
                            <option value="Có" <?php echo $a_2; ?> >Có</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Nổi bật</b></td>
                    <td>
                        <?php
                        $a_1="";
                        $a_2="";
                        if($noi_bat=="Có" || $noi_bat=="có")
                        {
                            $a_2="selected";
                        }
                        ?>
                        <select class="form-control" style="width:10%" name="hot" style="margin-top:3px;margin-bottom:3px;" >
                            <option value="" <?php echo $a_1; ?> >Không</option>
                            <option value="Có" <?php echo $a_2; ?> >Có</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Nội dung</b></td>
                    <td>
                        <textarea id="description" name="description" style="width: 100%;height: 200px"><?php echo $noi_dung; ?></textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'description' );
                        </script>
                    </td>
                </tr>
                <tr>
                    <td><b>Ngày tạo</b></td>
                    <td><?php echo $ngay_tao; ?></td>
                </tr>
                <tr>
                    <td><b>Ngày sửa</b></td>
                    <td><?php echo $ngay_sua; ?></td>
                </tr>
            </table>
            <input class="btn btn-success hvr-float" type="submit" name="edit_product" value="Lưu">&nbsp;
<!--            <a class="hvr-float" href="--><?php //echo $link_xoa; ?><!--"><button class="btn btn-danger" onclick="return confirm('Bạn Có Chắc Chắn Xóa Sản Phẩm Này Không?')">Xóa</button></a>&nbsp;-->
            <a class="hvr-float" href="<?php echo $link_dong; ?>" style="margin-right:30px;" ><button type="button" class="btn btn-warning">Đóng</button></a>
        </form>
    <br><br><br><br><br><br>
</div>