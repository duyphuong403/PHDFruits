<?php
if(!isset($bien_bao_mat)){exit();}

include 'config.php';
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from category where id='$id' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['name_category'];
	$link_dong="?ref=category&page=".$_GET['page'];
?>
<div class="col-md-9">
    <center>
       <h2>Sửa Danh mục</h2><br><br>

    <form action="" method="post">
        <table border="1" class="table table-bordered" >
            <tr>
                <td>
                    <h4 style="display: inline-block;">Tên &nbsp;</h4>
                    <input class="form-control" style="display: inline-block;width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="<?php echo $ten; ?>" required="required" title="Vui lòng điền tên Danh mục">
                </td>
        <br><br>
            </tr>
            <tr>
                <td>
                    <input class="btn btn-success hvr-float" type="submit" name="edit_category" value="Sửa Danh Mục">&nbsp;
                    <a class="hvr-float" href="<?php echo $link_dong; ?>" style="margin-right:30px;" ><button type="button" class="btn btn-warning">Đóng</button></a>
                </td>
            </tr>
        </table>
    </form>
    </center>
</div>