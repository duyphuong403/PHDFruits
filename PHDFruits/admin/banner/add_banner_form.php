<?php
if(!isset($bien_bao_mat)){exit();}
?>
<div class="col-md-9">
    <center>
        <br><br>
        <h2>Thêm Banner Mới</h2>
        <a href="?ref=banner"><h3>Quản lý Banner</h3></a>
        <br><br>
    </center>
    <form action="" method="post" style="padding: 20px;" enctype="multipart/form-data">
        <table>
            Chọn hình:
            <input type="file" id="gallery-photo-add" name="file" multiple onchange="readURL(this);" style="display: inline-block;">
            <center>
                <div class="gallery" style="display: inline-block;width: 100%;">
                    <?php include_once 'js/showImage.php' ?>
                </div>
                <br>
                Rộng: <input class="form-control" style="display: inline-block; width: 50%" name="width" ><br><br>
                Cao: &nbsp;<input class="form-control" style="display: inline-block; width: 50%" name="height">
            </center>
            <center>
                <input type="submit" value="Thêm" name="add_banner" class="btn btn-success hvr-float">
            </center>
        </table>
    </form>
</div>