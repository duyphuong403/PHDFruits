<?php
if(!isset($bien_bao_mat)){exit();}
?>
<?php
require_once 'config.php';
$res = mysqli_query($connect, "SELECT * FROM articles order by id desc");
$data = mysqli_fetch_all($res);
mysqli_free_result($res);

?>
    <style>
        h1{
            color: orange;
        }
        #createpost{
            padding: 30px;
            width: 800px;
            margin-left: 50px;
            padding: 20px;
        }
        .noi_dung p {
            font-size: 15px;
        }
    </style>

<div class="col-md-9">
    <!--  Tạo Bài Viết Mới  -->
    <div style="background-color: #D3D3D3; width: 900px; margin-left: 50px; border-radius: 20px;">
        <div id="createpost">
            <h2>Tạo Bài Viết Mới</h2>
            <br/>

            <form method="post" action="">
                <label for="title">Tiêu Đề Bài Viết:</label>
                <input type="text" name="title" id="title" placeholder="Nhập Tiêu Đề Bài Viết" class="form-control" value="" required>
                <br/>
                <label for="link">Ảnh Đại Diện: </label><br/>
                <input type="text" name="link" value="" class="form-control" placeholder="Dán Link Ảnh Đại Diện Vào Đây" required/>
                <br/>

                <!--   CKEditor     -->
                <label for="post">Soạn Thảo Nội Dung Bài Viết:</label><br>
                <textarea rows="5" cols="100" id="post" name="post"></textarea>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'post' );
                </script>
                <br/>
                <label for="tacgia">Người Đăng: </label><br/>
                <input type="text" name="tacgia" value="Admin" class="form-control" required/>
                <br/>
                <label for="date">Ngày Đăng: </label><br/>
                <input type="text" name="date" value="<?php echo date("Y-m-d");?>" class="form-control" required/>
                <br/>
                <input type="submit" id="save" name="insert_blog" value="Đăng Bài" class="btn btn-info" style="width: 90px; height: 40px">
            </form>
        </div>
    </div>


    <br/><br/><br/>

    <!--Quản lý Comment khách hàng-->
    <div style="background-color: #d1ecf1; margin-left: 50px; margin-right: 50px; border-radius: 20px;">
        <br/>
        <center><h2>Quản Lý Bài Viết</h2></center>
        <br/>
        <div class="jumbotron" style="margin-left:  50px; margin-right: 50px; background-color: white">
            <table class="table table-hover">
                <thead>
                <tr style="font-weight: bold;">
                    <td>ID</td>
                    <td>Tiêu Đề Bài Viết</td>
                    <td>Nội Dung</td>
                    <td>Người Đăng</td>
                    <td>Ngày Đăng</td>
                    <td>Hành Động</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item) { ?>
                    <form method="post" action="" style="display: inline-block">
                        <tr class="t-row">
                            <td><?php echo "<input name='id' type='hidden' value='$item[0]'/> $item[0]" ?></td>
                            <td><?php echo $item[1]; ?></td>
                            <td class="noi_dung"><?php $str = $item[3];
                                $lenghtstr = strlen($str);
                                if ($lenghtstr > 195){
                                    $getstr =  substr( $str,  0, 191);
                                    $str = $getstr."...";
                                }else{
                                    $str = $str."...";
                                }
                                echo $str;?></td>
                            <td><?php echo $item[4]; ?></td>
                            <td><?php echo $item[5]; ?></td>
                            <td>
                                <button type="submit" name="delete_blog" class="btn btn-danger" onclick="return confirm('Bạn Có Chắc Chắn Xóa Bài Viết Này Không?')" style="margin-top: 5px;">Xóa</button>
                    </form>
                    <form method="post" action="?ref=edit_blog" style="display: inline-block">
                            <?php echo "<input name='id' type='hidden' value='$item[0]'/>" ?>
                            <?php echo "<input name='title' type='hidden' value='$item[1]'/>" ?>
                        <?php echo "<input name='link' type='hidden' value='$item[2]'/>" ?>
                            <?php echo "<input name='post' type='hidden' value='$item[3]'/>" ?>
                            <?php echo "<input name='tacgia' type='hidden' value='$item[4]'/>" ?>
                            <?php echo "<input name='date' type='hidden' value='$item[5]'/>" ?>
                                <button type="submit" class="btn btn-warning" style="margin-top: 5px;">Sửa</button>
                    </form>
                            </td>
                        </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
        <br/>
    </div>
    <br/><br/><br/><br/>
</div>
