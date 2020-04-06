<?php
require 'config.php';
$id=$_GET['id'];
$tv="select * from list_order where id='$id' ";
$tv_1=mysqli_query($connect,$tv);
$tv_2=mysqli_fetch_array($tv_1);
$ten_nguoi_mua=$tv_2['cus_name'];
$email=$tv_2['email'];
$dien_thoai=$tv_2['phone'];
$dia_chi=$tv_2['address'];
$noi_dung=$tv_2['note'];
$hang_duoc_mua=$tv_2['list_products'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../logo.png">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tohoma";
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .page {
            width: 21cm;
            overflow:hidden;
            min-height:297mm;
            padding: 1.5cm;
            margin-left:auto;
            margin-right:auto;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        @page {
            size: A4;
            margin: 0;
        }
        button {
            width:100px;
            height: 24px;
        }
        .header {
            overflow:hidden;
        }
        .logo {
            background-color:#FFFFFF;
            float:right;
            width: 50%;
        }
        .company {
            text-transform:uppercase;
            background-color:#FFFFFF;
            float:left;
            font-size:16px;
        }
        .title {
            text-align:center;
            position:relative;
            /*color:#0000FF;*/
            font-size: 24px;
            top:1px;
        }
        .footer-left {
            text-align:center;
            /*text-transform:uppercase;*/
            padding-top:24px;
            position:relative;
            height: 150px;
            width:50%;
            color:#000;
            float:left;
            font-size: 12px;
            bottom:1px;
        }
        .footer-right {
            text-align:center;
            /*text-transform:uppercase;*/
            padding-top:24px;
            position:relative;
            height: 150px;
            width:50%;
            color:#000;
            font-size: 12px;
            float:right;
            bottom:1px;
        }
        .TableData {
            background:#ffffff;
            font: 11px;
            width:100%;
            border-collapse:collapse;
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size:12px;
            border:thin solid #d3d3d3;
        }
        .TableData TH {
            background: rgba(0,0,255,0.1);
            text-align: center;
            font-weight: bold;
            color: #000;
            border: solid 1px #ccc;
            height: 24px;
        }
        .TableData TR {
            height: 24px;
            border:thin solid #d3d3d3;
        }
        .TableData TR TD {
            padding-right: 2px;
            padding-left: 2px;
            border:thin solid #d3d3d3;
        }
        .TableData TR:hover {
            background: rgba(0,0,0,0.05);
        }
        .TableData .cotSTT {
            text-align:center;
            width: 10%;
        }
        .TableData .cotTenSanPham {
            text-align:left;
            width: 40%;
        }
        .TableData .cotHangSanXuat {
            text-align:left;
            width: 20%;
        }
        .TableData .cotGia {
            text-align:right;
            width: 120px;
        }
        .TableData .cotSoLuong {
            text-align: center;
            width: 50px;
        }
        .TableData .cotSo {
            text-align: right;
            width: 120px;
        }
        .TableData .tong {
            text-align: center;
            font-weight:bold;
            text-transform:uppercase;
            padding-right: 4px;
        }
        .TableData .cotSoLuong input {
            text-align: center;
        }
        @media print {
            @page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
    <title>Xuat_Hoa_Don_so_<?php echo date("d").date("m").date("Y")."-".$id?></title>
</head>
<body style="overflow-y: hidden;">

<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="../logo_black.png" style="width: 17%;float: right;"/></div>
        <div class="company"><b>CÔNG TY TNHH PHD FRUITS</b> <br>123-456-789 <br>590 Cách Mạng Tháng 8, Q.3</div>
    </div>
    <br/>
    <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        <h5>Số: <?php echo date("d").date("m").date("Y")."-".$id?></h5>
        -------oOo-------
    </div>
    <br/>
    <br/>
    <h5>Thông tin khách hàng</h5>
    <table class="TableData">
        <tr>
            <th>Tên KH</th>
            <th>Điện Thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Yêu cầu</th>
        </tr>
        <tr>
            <td width="17%">
                <?php echo $ten_nguoi_mua; ?>
            </td>
            <td>
                <?php echo $dien_thoai; ?>
            </td>
            <td>
                <?php echo $email; ?>
            </td>
            <td width="30%">
                <?php echo $dia_chi; ?>
            </td>
            <td width="30%">
                <?php echo $noi_dung; ?>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <h5>Chi tiết đơn hàng</h5>
    <table class="TableData">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php
        $m=explode("[|||||]",$hang_duoc_mua);
        $tong_lon=0;
        for($i=0;$i<count($m);$i++)
        {
            if(isset($m[$i]))
            {
                if($m[$i]!="")
                {
                    $stt=$i+1;
                    $m_2=explode("[|||]",$m[$i]);
                    $id_sp=$m_2[0];
                    $sl_sp=$m_2[1];
                    $tv_sp="select id,name,price_sale from products where id='$id_sp' ";
                    $tv_sp_1=mysqli_query($connect,$tv_sp);
                    $tv_sp_2=mysqli_fetch_array($tv_sp_1);
                    $ten=$tv_sp_2['name'];
                    $gia=$tv_sp_2['price_sale'];
                    $gia_duoc_dinh_dang=number_format($gia,0,",",".");
                    $tong=$gia*$sl_sp;
                    $tong_duoc_dinh_dang=number_format($tong,0,",",".");
                    $tong_lon=$tong_lon+$tong;
                    if($sl_sp!=0)
                    {
                        ?>
                        <tr>
                            <td class='cotSTT'><?php echo $stt; ?></td>
                            <td class='cotTenSanPham'><?php echo $ten; ?></td>
                            <td class='cotGia'><?php echo $gia_duoc_dinh_dang; ?></td>
                            <td class='cotSoLuong' align='center'><?php echo $sl_sp; ?></td>
                            <td class='cotSo'><?php echo $tong_duoc_dinh_dang; ?> <sup>đ</sup></td>
                        </tr>

                        <?php
                    }
                }
            }
        }
        ?>
        <tr>
            <td colspan="4" class="tong">Tổng cộng</td>
            <td class="cotSo"><b><?php echo number_format($tong_lon,0,",",".") ?></b><sup>đ</sup></td>
        </tr>
    </table>
    <br><br>
    <div class="footer-left">TP Hồ Chí Minh, ngày <?php echo date("d");?> tháng <?php echo date("m");?> năm <?php echo date("Y");?><br/>
        Khách hàng </div>
    <div class="footer-right">TP Hồ Chí Minh, ngày <?php echo date("d");?> tháng <?php echo date("m");?> năm <?php echo date("Y");?><br/>
        Nhân viên </div>
</div>
</body>
</html>

