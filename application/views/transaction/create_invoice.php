<!DOCTYPE html>
<html lang="en">
<head>
    <title>STEMUP</title>
    <?php $this->load->view('stemup/head');?>
    <link href="<?php echo base_url('css/stemup_css/style.css');?>" rel="stylesheet">
</head>
<style>
    .main-content {
        padding: 75px 0;
        background-color: #f2f4f6;
    }

    .content-form {
        width: 475px;
        display: block;
        margin: auto;
        padding-top: 45px;
    }

    .title-form {
        text-align: center;
    }

    .title-form span {
        display: inline-block;
        width: 100%;
        padding: 5px 45px;
        border-radius: 5px;
        background-color: #32325d;
        color: #ffffff;
        font-size: 20px;
        font-weight: 600;
        /*text-transform: uppercase;*/
    }

    .body-form {
        margin: 25px 0;
        padding-top: 25px;
        padding-bottom: 25px;
        border: 1px solid #bbbbbb;
        border-radius: 5px;
        position: relative;
    }

    .request-form {
        position: absolute;
        top: -15px;
        left: 31%;
        background: #f2f4f6;
        padding: 5px 10px;
    }

    .form-group label {
        font-size: 14px;
    }

    .form-group input {
        height: 40px;
        padding: 10px 12px;
        color: #32325d;
        background-color: white;
        border: 1px solid transparent;
        border-radius: 4px;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .input-form button {
        width: 100%;
    }
</style>
<body>
<header class="container-fluid bg-stemup ">
    <div class="container">	<?php $this->load->view('stemup/home/home_header_login');?>	</div>
</header>
<div class="main-content col-lg-12">
    <div class="content-form">
        <form action="<?php echo base_url().'index.php/transaction/send_invoice' ?>" method="post">
            <div class="title-form">
                <span>Yêu cầu thanh toán</span>
            </div>
            <div class="body-form col-lg-12">
                <div class="request-form">
                    <span>Nhập thông tin khách hàng</span>
                </div>
                <div class="input-form row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="f-name">Họ</label>
                            <input type="text" class="form-control" id="f-name" name="f-name" placeholder="First name">
                        </div>
                        <?php
                        if ($this->session->flashdata('f-name')){
                            echo $this->session->flashdata('f-name');
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="l-name">Tên</label>
                            <input type="text" class="form-control" id="l-name" name="l-name" placeholder="Last name">
                        </div>
                        <?php
                        if ($this->session->flashdata('l-name')){
                            echo $this->session->flashdata('l-name');
                        }
                        ?>
                    </div>
                </div>
                <div class="input-form row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <?php
                        if ($this->session->flashdata('email')){
                            echo $this->session->flashdata('email');
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone nunmber">
                        </div>
                        <?php
                        if ($this->session->flashdata('phone')){
                            echo $this->session->flashdata('phone');
                        }
                        ?>
                    </div>
                </div>
                <div class="input-form">
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <?php
                    if ($this->session->flashdata('address')){
                        echo $this->session->flashdata('address');
                    }
                    ?>
                </div>
                <div class="input-form" style="margin-top: 25px;">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('stemup/footer');?>
</body>
</html>
