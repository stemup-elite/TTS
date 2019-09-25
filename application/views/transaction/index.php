<!DOCTYPE html>
<html lang="en">
<head>
	<title>STEMUP</title>
	<?php $this->load->view('stemup/head');?>
	<link href="<?php echo base_url('css/stemup_css/style.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/payment.css');?>" rel="stylesheet">
</head>
<style>
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
	.request{
		border: 1px solid #eeeeee;
		padding: 20px;
	}
</style>
<body>
	<header class="container-fluid bg-stemup ">
		<div class="container">	<?php $this->load->view('stemup/home/home_header_login');?>	</div>
	</header>
	<div class="container MT70">
		<div class="table">

			<p>Xin Chào</p>
			<p>Email </p>
			<p style="text-align: center;">Vui lòng lưu lại 2 mã bên dưới để tiến hành các bước kế tiếp</p>
			<div class="request">
				<p>Mệnh giá </p>
				<p>Loại thẻ </p>
				<div class="code-active">
					<ul>
						<li>Code: asd123123123qsadasdasdasdswasd</li>
						<li>Ngày tạo: 24/09/2019</li>
					</ul>
				</div>
				<div class="token-active">
					<ul>
						<li>Token: asdasfas5d11523152311asd15</li>
					</ul>
				</div>
				<div style="text-align: center;">
					<input type="submit" value="Tiếp tục">
				</div>
			</div>

		</div>
	</div>
	<?php $this->load->view('stemup/footer');?>
</body>
</html>
