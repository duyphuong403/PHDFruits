<?php
require 'admin/config.php';
$res = mysqli_query($connect, "SELECT * FROM company_info");
$data = mysqli_fetch_all($res);
mysqli_free_result($res);

?>

    <style>
        #banner {
        padding: 25px;
        background: url(images/background.jpg);
        background-repeat: no-repeat;
        background-size: 1400px 480px;
        height: 350px;
        background-position: center;
        background-size: cover;
        }
        #title{
            color: #fbfdff;
            /*font-family: "Times New Roman";*/
            margin-top: 60px;
        }
        #form {
            background-color: white;
        }
        h3 {
            font-family: Arimo;
            color: dimgrey;
        }
        #content{
            color: gray;
        }
        .iconstyle{
            color: #80b435;
            width: 50px;
            height: 50px;
            font-size: 25px;
        }
    </style>

    <!-- Javascript -->
    <script>
        function validate() {
            var name = document.getElementById('name');
            var email = document.getElementById('email');
            var message = document.getElementById('message');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (name.value == '') {
                alert("Vui Lòng Nhập Tên");
                return false;
            }
            if (!filter.test(email.value)) {
                alert('Sai Email...!!! Vui Lòng Nhập Lại Email. \nVí Dụ: Example@gmail.com');
                email.focus;
                return false;
            }
            if (message.value == ''){
                alert("Vui Lòng Nhập Yêu Cầu Của Bạn");
                return false;
            }else {
                alert ("Gửi thành công. Cám ơn quý khách đã gửi yêu cầu. Chúng tôi sẽ phản hổi trong thời gian sớm nhất.");
                return true;
            }
        }
    </script>

    <!--Banner Liên Hệ-->
    <div id="banner" class="tr-breadcrumb text-center bg-image" style="background-image: url(client/images/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="page-title">
                <h1 id="title">Liên Hệ</h1>
            </div>
        </div><!-- /.container -->
    </div><!-- /.tr-breadcrumb -->
    <br><br>

    <!--Google Map-->
    <center><?php foreach ($data as $item) { echo $item[5];}?></center>
    <br><br>

    <!--Nội Dung Form-->
    <div id="form" class="container">
        <br>

        <div class="row">
            <div class ="col-sm-6" style="padding-left: 70px">
                <div>
                    <h3>Thông Tin Liên Hệ</h3><br/>
                    <div>
                        <span class="glyphicon glyphicon-earphone iconstyle" style="display: inline-block"></span>
                        <div style="display: inline-block">
                            <?php foreach ($data as $item) { ?>
                                <span id="content"><a href="tel:<?php echo $item[1]; ?>"><?php echo $item[1]; ?></a></span>
                            <?php } ?>
                            <span id="content"><?php foreach ($data as $item) { echo $item[2];}?></span>
                        </div>
                    </div>
                        <span class="glyphicon glyphicon-envelope iconstyle"></span>
                        <span id="content">
                            <?php foreach ($data as $item) {?>
                                <a href="email:<?php echo $item[3]; ?>"><?php echo $item[3]; ?></a>
                            <?php }?>
                        </span>
                    <h3>Vị Trí Của Chúng Tôi</h3><br/>
                    <div>
                        <span class="glyphicon glyphicon-map-marker iconstyle"></span>
                        <span id="content"><?php foreach ($data as $item) { echo $item[4];}?></span>
                    </div>
                </div>
            </div>

            <div class ="col-sm-6" style="padding-right: 70px; padding-left: 70px;">
                <h3>Thông Tin Bạn Muốn Yêu Cầu</h3>
                <form action="" method="get" onsubmit="return validate()">
                    <input type="hidden" name="ref" value="send_comment">
                    <input type="text" name="name" id="name" placeholder="Tên Của Bạn" class="form-control"><br/>
                    <input type="email" name="email" id="email" placeholder="Địa Chỉ Email" class="form-control"><br/>
                    <textarea name="message" id="message" placeholder="Nội Dung" class="form-control" rows="4"></textarea><br/>
                    <input type="submit" value="Gửi" class="btn" style="width: 90px; height: 40px; background-color: #80b435; color: white; font-weight: bold;"><br/><br/>
                </form>
            </div>
        </div>
    </div>
    <br><br>
