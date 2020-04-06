<?php
if (!isset($bien_bao_mat)){exit();}
require_once 'config.php';
$res = mysqli_query($connect, "SELECT * FROM company_info");
$data = mysqli_fetch_all($res);
$res2 = mysqli_query($connect, "SELECT * FROM comments");
$data2 = mysqli_fetch_all($res2);
mysqli_free_result($res);

?>

    <style>
        h1{
            color: orange;
        }
        #form{
            margin-left: 50px;
            width: 500px;
            padding: 20px;
        }
        h4{
            text-align: center;
            color: red;
            font-weight: bold;
        }
    </style>

<div class="col-md-9">
    <!--Chỉnh sửa thông tin liên hệ-->
    <div style="background-color: #D3D3D3; width: 700px; margin-left: 50px; border-radius: 20px;">
        <div id="form">
            <form action="" method="post">
                <h2>Cài Đặt Thông Tin Liên Hệ</h2>
                Số Điện Thoại 1: <br/>
                <input type="text" name="sdt1" placeholder="Nhập Số Điện Thoại 1" class="form-control" value="<?php foreach ($data as $item) { echo $item[1];}?>" maxlength="12" minlength="10" required><br/>
                Số Điện Thoại 2: <br/>
                <input type="text" name="sdt2" placeholder="Nhập Số Điện Thoại 2" class="form-control" value="<?php foreach ($data as $item) { echo $item[2];}?>"  maxlength="12" minlength="10"><br/>
                Email Công Ty: <br/>
                <input type="email" name="email" placeholder="Nhập Email Cty" class="form-control" value="<?php foreach ($data as $item) { echo $item[3];}?>" required><br/>
                Địa Chỉ Công Ty: <br/>
                <input type="text" name="address" placeholder="Nhập Địa Chỉ Cty" class="form-control" value="<?php foreach ($data as $item) { echo $item[4];}?>"  maxlength="100" minlength="10" required><br/>
                Mã Nhúng Google Map: <br/>
                <textarea name="map" placeholder="Dán Mã Nhúng Google Map Vào Đây" class="form-control" rows="4" required><?php foreach ($data as $item) { echo $item[5];}?></textarea><br/>
                <input type="submit" value="Áp Dụng" name="update_contact" class="btn btn-info" style="width: 90px; height: 40px" required>
            </form>
        </div>
    </div>

    <br/><br/><br/><br/>

    <!--Quản lý Comment khách hàng-->
    <div style="background-color: #d1ecf1; margin-left: 50px; margin-right: 50px; border-radius: 20px;">
        <br/><br/>
        <center><h1>Quản Lý Phản Hồi Của Khách Hàng</h1></center>
        <br/><br/>
        <div class="jumbotron" style="margin-left:  50px; margin-right: 50px; background-color: white;">
            <table class="table table-hover">
                <thead>
                <tr style="font-weight: bold;">
                    <td>ID</td>
                    <td>Tên Khách Hàng</td>
                    <td>Email</td>
                    <td>Nội Dung</td>
                    <td>Hành Động</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data2 as $item2) { ?>
                    <form action="" method="post">
<!--                        <input type="hidden" name="ref" value="delete_comment">-->
                        <input type="text" name="id" value="<?php echo $item2[0]?>" hidden>
                        <tr class="t-row">
                            <td class="userid"><?php echo $item2[0]; ?></td>
                            <td><?php echo $item2[1]; ?></td>
                            <td><?php echo $item2[2]; ?></td>
                            <td><?php echo $item2[3]; ?></td>
                            <td>
                                <button type="submit" name="delete_comment" class="remove btn btn-danger">Xóa</button>
                            </td>
                        </tr>
                    </form>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <br/>
    </div>
    <br/><br/><br/><br/>


    <!--Confirm Modal -->
    <div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Bạn có chắc chắn xóa phản hồi này không?</h5>

                </div>

                <div class="modal-footer">
                    <button id="btn-yes" type="button" class="btn btn-outline-danger" data-dismiss="modal">Xóa</button>
                    <button id="btn-no" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>
</div>
