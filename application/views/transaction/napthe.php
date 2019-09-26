<!DOCTYPE html>
<html lang="en">
<head>
    <title>STEMUP</title>
    <?php $this->load->view('stemup/head');?>
    <link href="<?php echo base_url('css/stemup_css/style.css');?>" rel="stylesheet">
    <!--	<link href="--><?php //echo base_url('css/payment.css');?><!--" rel="stylesheet">-->
</head>
<style>
    .code-active,.token-active {
        width: 310px;
        margin: auto;
        margin-bottom: 25px;
    }

    .code-active input,.token-active input {
        width: 100%;
    }

    .table{
        width: 60%;
        margin: auto;
        padding: 20px;
    }
    .code-active ul{
        display: flex;
    }
    li{
        list-style: none;
        padding: 10px;
    }
    .request {
        border: 1px solid #eeeeee;
        padding: 20px;
        background: #bdbcbc61;
        border-radius: 10px;
        -webkit-box-shadow: 10px 10px 10px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 10px -6px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 10px -6px rgba(0,0,0,0.75);
    }
    p#title-thanhtoan {
        background: #0f92ef;
        padding: 10px;
        color: #fff;
        text-transform: uppercase;
        font-size: 20px;
    }
    .ta-r{
        text-align: right;
    }
    span.text-1 {
        color: red;
        font-weight: 700;
    }

    table.tbl-nhap {
        width: 100%;
    }
    input#sbm-next {
        margin-top: 20px;
        border: 2px solid #fff;
        background: #0f92ef;
        color: #fff;
        padding: 5px 30px;
        border-radius: 5px;
    }
    .pos-f {
        position: absolute;
    }
</style>
<body>
<header class="container-fluid bg-stemup ">
    <div class="container">	<?php $this->load->view('stemup/home/home_header_login');?>	</div>
</header>
<div class="container MT70">
    <div class="table">

        <p>Xin Chào <?php echo $name ?></p>
        <!-- <p>Email: <?php echo $email?></p> -->
        <p style="text-align: center;" id='title-thanhtoan'>Thanh toán và kích hoạt mã nạp thẻ</p>
        <div class="request">
            <div class="row">
                <div class="col-lg-6">

                    <div><p>Mệnh giá: <?php echo '<span class="text-1">'.$menhgia.'</span>' ?> VNĐ</p></div>
                    <div><p>Loại thẻ: <?php echo '<span class="text-1">'.$loaithe.'</span>' ?> </p></div>
                </div>
                <div class="col-lg-6">
                    <div><p></p></div>
                    <div><p class="ta-r">Trang thái: <span class="text-1">Đang xử lý</span></p></div>
                </div>
            </div>
            <table class="tbl-nhap table-borderless">
                <tr>
                    <td style="width: 20%">Nhập token:</td><td><input type="text" id="input_token" class="form-control"></td>
                </tr>
                 <tr>
                    <td style="width: 20%">Nhập code:</td><td><input type="text" id="input_code" class="form-control"></td>
                </tr>
            </table>    

           <!--  <div class="token-active">

                Nhập token: <input type="text" id="input_token" class="">
            </div>
            <div class="code-active">
                Nhập code: <input type="text" id="input_code" class="">
            </div> -->

            <div style="text-align: center;">
                <input id="sbm-next" type="submit" value="Tiếp tục">
            </div>
        </div>
Em chào mọi người. Em thử commit Duong
    </div>
</div>
<?php $this->load->view('stemup/footer');?>
</body>
</html>
