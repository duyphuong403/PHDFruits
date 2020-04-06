

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title p-b-34">
                        Đăng nhập Quản trị
                    </span>
                <div class="wrap-input100 rs1-wrap-input100 m-b-20">
                    <input required type="text" class="input100" id="email"
                           placeholder="Tài khoản" name="username" minlength="5" maxlength="50">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs2-wrap-input100 m-b-20">
                    <input required type="password" class="input100" id="pwd"
                           placeholder="Mật khẩu" name="password" minlength="5" maxlength="50">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="hidden" name="login_admin" value="login_admin" >
                    <button type="submit" name="login_admin" class="login100-form-btn">
                        Đăng nhập
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('css/styles/login/images/login_bg.jpg');"></div>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/bootstrap/js/popper.js"></script>
<script src="css/styles/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/daterangepicker/moment.min.js"></script>
<script src="css/styles/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="css/styles/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="css/styles/login/js/main.js"></script>
