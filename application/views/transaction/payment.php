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
    <div class="table" style="width: 61%;">

        <p>Xin Chào <?php echo $user['first_name'].' '.$user['last_name'] ?></p>
        <p style="text-align: center;" id='title-thanhtoan'>Thanh toán và kích hoạt mã nạp thẻ</p>
        <div class="request">
            <form action="<?php echo base_url().'index.php/transaction/send_request'?>" method="post">
                <div class="form-group">
                    <h4 style="text-align: center">Nhập token và code đã được gửi để thanh toán</h4>
                </div>
                <div class="form-group row">
                    <div class="col-lg-1" style="padding-right: 0; font-weight: 500; font-size: 15px;">
                        <label for="token" style="line-height: 2;">Token</label>
                    </div>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" id="token" name="token">
                    </div>
                </div>
                <?php
                if ($this->session->flashdata('token')){
                    echo '<div class="form-group">';
                    echo '<div class="alert alert-danger">'.$this->session->flashdata('token').'</div>';
                    echo '</div>';
                }
                ?>
                <div class="form-group row">
                    <div class="col-lg-1" style="padding-right: 0; font-weight: 500; font-size: 15px;">
                        <label for="code" style="line-height: 2;">Code</label>
                    </div>
                    <div class="col-lg-11">
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                </div>
                <?php
                if ($this->session->flashdata('code')){
                    echo '<div class="form-group">';
                    echo '<div class="alert alert-danger">'.$this->session->flashdata('code').'</div>';
                    echo '</div>';
                }
                ?>
                <div style="text-align: center;">
                    <input id="sbm-next" type="submit" value="Tiếp tục">
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('stemup/footer');?>
</body>
</html>
