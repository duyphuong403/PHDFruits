<?php
if(!isset($bien_bao_mat)){exit();}
?>
<div class="col-md-9">
    <center> <h2>Thêm Danh Mục</h2><br><br></center>


        <center>
            <table style="width: 80%;" class="table table-striped" border="1">
                <form action="" method="post">
                    <tr>
                        <td><h3>Tên :</h3></td>
                        <td>
                            <input type="text" class="form-control" name="ten" value="" style="width: 70%;" required title="Vui lòng điền tên Danh mục">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success hvr-float" type="submit" name="add_category" value="Thêm">
                </form>
                        <a class="hvr-float" href="?ref=category"><button class="btn btn-warning">Đóng</button></a></td>

                    </tr>
            </table>
        </center>


</div>