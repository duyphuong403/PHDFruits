<?php
if (!isset($bien_bao_mat)) {exit();}
include 'config.php';
?>
<div class="col-md-9">
    <center>
        <br><br>
        <h2>Thêm Sản Phẩm</h2>
        <a class="hvr-float" style="float: right" href="?ref=products"><button class="btn btn-warning">Đóng</button></a><br><br>
    </center>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="1" class="table table-striped table-bordered">
            <tr>
                <td>Tên : </td>
                <td>
                    <input class="form-control" name="name" value="" required="required">
                </td>
            </tr>
            <tr>
                <td>Số lượng: </td>
                <td>
                    <input class="form-control" type="number"  max="9999" name="quantity" value="0" required="required">
                </td>
            </tr>
            <tr>
                <td>Danh mục : </td>
                <td>
                    <?php
                        if(!isset($_SESSION['category']))
                        {
                            $_SESSION['category']="";
                        }
                    ?>
                    <center>
                        <select class="form-control" name="category" style="width: 20%;text-align: center;" >
                            <?php
                            $tv="select * from category order by id ";
                            $tv_1=mysqli_query($connect,$tv);
                            $a="";
                            while($tv_2=mysqli_fetch_array($tv_1))
                            {
                                $ten=$tv_2['name_category'];
                                $id_menu=$tv_2['id'];
                                if($_SESSION['category']==$id_menu)
                                {
                                    $a="selected";
                                }
                                echo "<option value='$id_menu' $a >";
                                echo $ten;
                                echo "</option>";
                                $a="";
                            }
                            ?>
                        </select>
                    </center>
                </td>
            </tr>
            <tr>
                <td >Hình ảnh : </td>
                <td>
                    <center><input class="btn btn-block" type="file" name="image"></center>
                </td>
            </tr>
            <tr>
                <td>Giá gốc: </td>
                <td>
                    <input type="number" min="1000" max="999999999" class="form-control" style="" name="price" value="1000">
                </td>
            </tr>
            <tr>
                <td>Giá giảm: </td>
                <td>
                    <input type="number" min="1000" max="9999999999" class="form-control" name="price_sale" value="1000" required="required">
                </td>
            </tr>
            <tr>
                <td>Trang chủ : </td>
                <td>
                    <center>
                        <select class="form-control" style="width: 10%" name="homepage" >
                            <option value="">Không</option>
                            <option value="có">Có</option>
                        </select>
                    </center>
                </td>
            </tr>
            <tr>
                <td>Nổi bật : </td>
                <td>
                    <center>
                        <select class="form-control" style="width: 10%" name="hot">
                            <option value="">Không</option>
                            <option value="có">Có</option>
                        </select>
                    </center>
                </td>
            </tr>
            <tr>
                <td valign="top" >Nội dung : </td>
                <td>
                    <textarea id="description" name="description" style="border: 1px solid black;width: 100%;" ></textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'description' );
                    </script>
                </td>
            </tr>
        </table>
        <input class="btn btn-success" type="submit" name="add_product" value="Thêm sản phẩm" style="width:200px;height:50px;font-size:24px" >
        <br><br><br><br><br><br>
    </form>
</div>
