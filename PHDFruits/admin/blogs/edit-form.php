<?php
if(!isset($bien_bao_mat)){exit();}
?>
<style>
    h2{
        font-weight: bold;
    }
    #createpost{
        padding: 30px;
        width: 1000px;
        margin: auto;
        padding: 20px;
    }
</style>

<div class="col-md-9">

    <!--  Tạo Bài Viết Mới  -->
    <br/><br/><br/><br/>
    <div style="background-color: #D3D3D3; width: 1100px; margin: auto; border-radius: 20px;">
        <div id="createpost">
            <h2>Chỉnh Sửa Bài Viết</h2>
            <br/>

            <form method="post">
                <?php
                    $id = $_POST['id'];
                    echo "<input name='id' type='text' value='$id' hidden/>";
                ?>
                <label for="title">Tiêu Đề Bài Viết:</label>
                <input type="text" name="title" id="title" placeholder="Nhập Tiêu Đề Bài Viết" class="form-control" value="<?php $title = $_POST['title']; echo $title ?>" required>
                <br/>
                <label for="link">Ảnh Đại Diện: </label><br/>
                <input type="text" name="link" value="<?php $link = $_POST['link']; echo $link ?>" class="form-control" placeholder="Dán Link Ảnh Đại Diện Vào Đây" required/>
                <br/>

                <!--   CKEditor     -->
                <label for="post">Soạn Thảo Nội Dung Bài Viết:</label><br>
                <textarea rows="5" cols="148" id="post" name="post"><?php $post = $_POST['post']; echo $post ?></textarea>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'post' );
                </script>
                <br/>
                <label for="tacgia">Người Đăng: </label><br/>
                <input type="text" name="tacgia" value="<?php $tacgia = $_POST['tacgia']; echo $tacgia ?>" class="form-control" required/>
                <br/>
                <label for="date">Ngày Đăng: </label><br/>
                <input type="text" name="date" value="<?php $date = $_POST['date']; echo $date ?>" class="form-control" required/>
                <br/>
                <input type="submit" name="edit_blogs" value="Hoàn Tất" class="btn btn-info" style="width: 90px; height: 40px">
                <a class="hvr-float" href="?ref=blogs"><button type="button" class="btn btn-warning" style="width: 90px; height: 40px" >Đóng</button></a>
            </form>
        </div>
    </div>
    <br/><br/><br/><br/>
</div>

