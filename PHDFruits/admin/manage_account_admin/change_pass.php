<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
require "config.php";
	$tv="select * from account_admin where id='1' ";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ky_danh=$tv_2['username'];
	$full_name = $tv_2['full_name'];
	$email = $tv_2['email'];
?>
<div class="col-md-9">
    <form action="" method="post" >
        <h2>Sửa thông tin quản trị</h2><br><br>
        <table>
            <tr>
                <td>Tên đăng nhập<br><br></td>
                <td><input class="form-control" name="username" value="<?php echo $ky_danh; ?>" style="display: inline-block;" required><br><br></td>
            </tr>
            <tr>
                <td>Tên hiển thị<br><br></td>
                <td><input class="form-control" name="fullname" value="<?php echo $full_name; ?>" style="display: inline-block;" ><br><br></td>
            </tr>
            <tr>
                <td>Email<br><br></td>
                <td><input class="form-control" name="email" value="<?php echo $email; ?>" style="display: inline-block;"><br><br></td>
            </tr>
            <tr>
                <td>Mật khẩu<br><br></td>
                <td><input type="password" class="form-control" id="password" name="password" value="Mac_D1nh" style="display: inline-block;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu phải có ít nhất 1 ký tự viết hoa, 1 ký tự thường, 1 số và dài hơn 8 ký tự"><br><br></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu<br><br> &nbsp;</td>
                <td><input type="password" class="form-control" id="confirm_password" name="confirm_password" value="Mac_D1nh" style="display: inline-block;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mật khẩu phải có ít nhất 1 ký tự viết hoa, 1 ký tự thường, 1 số và dài hơn 8 ký tự"><br><br><br></td>
            </tr>
            <tr>
                <td colspan="2"><i>- Mật khẩu sẽ không thay đổi nếu không sửa</i></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="form_change_pass" value="Sửa" class="btn btn-success hvr-float">
        <br><br>
    </form>
    <script type="text/javascript">
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Không Khớp !");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</div>