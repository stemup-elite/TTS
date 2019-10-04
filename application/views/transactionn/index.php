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


      <p>Xin Chào <?php echo '<span class="text-1">'.$name.'</span>' ?></p>
			<p>Email <?php echo '<span class="text-1">'.$email.'</span>' ?></p>
			 <p style="text-align: center;" id='title-thanhtoan'>Thanh toán và kích hoạt mã nạp thẻ</p>
			<div class="request">
				<form action="<?php echo base_url()?>index.php/transaction/napthe" method="post" class="form-group">
						<table class="tbl-nhap table-borderless">
				<tr>
					<td style="width: 20%">Email:</td><td><input type="text" id="input_email" value="<?php echo $email ?>" class="form-control"></td>
				</tr>
				<tr>
					<td style="width: 20%">Loại thẻ:</td>
					<td>
						<select name="loaithe" class="form-control form-control-sm">
							<option value="<?php echo $loaithe['0'] ?>"><?php echo $loaithe['0'] ?></option>
							<option value="<?php echo $loaithe['1'] ?>"><?php echo $loaithe['1'] ?></option>
							<option value="<?php echo $loaithe['2'] ?>"><?php echo $loaithe['2'] ?></option>
							
						</select>
					</td>
				</tr>
				<tr>
					<td style="width: 20%">Mệnh giá:</td>
					<td>
						<select name="menhgia" class="form-control form-control-sm">
						<option value="<?php echo $menhgia['0'] ?>"><?php echo $menhgia['0'] ?></option>
						<option value="<?php echo $menhgia['1'] ?>"><?php echo $menhgia['1'] ?></option>
						<option value="<?php echo $menhgia['2'] ?>"><?php echo $menhgia['2'] ?></option>
						<option value="<?php echo $menhgia['3'] ?>"><?php echo $menhgia['3'] ?></option>
			
					</select>
					</td>
				</tr>
				
			</table> 
			
				
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
