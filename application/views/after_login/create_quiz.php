<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tạo bài kiểm tra</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/ico.png');?>"/>
    <!-- Bootstrap -->
	<link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/style-hu.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('css/setbackground.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/card.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/star-rating.css');?>" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="<?php echo base_url('js/manage_group.js');?> "></script>
	<script src="<?php echo base_url('js/jquery-1.11.3.min.js');?> "></script>
    	<script src="<?php echo base_url('js/jquery.dataTables.js');?>"></script>
	<link href="<?php echo base_url('css/jquery.dataTables.css');?>" rel="stylesheet">
	<script src="<?php echo base_url('js/addclass.js');?>"></script>
	<script src="<?php echo base_url('js/group.js');?>"></script>
	<script src="<?php echo base_url('js/newuserpage.js');?>"></script>
    	<script src="<?php echo base_url('js/create_quiz.js');?>"></script>

	<script>

	
	var base_url="<?php echo base_url();?>";
	var site_url="<?php echo site_url();?>";
	var su="<?php echo $su ?>";   
	var id_mcq_fun="";
	 var id_quiz_fun="";
    var arr_qt= [];
	</script>
	<link href="<?php echo base_url('css/select2.min.css');?>" rel="stylesheet" />
	<script src="<?php echo base_url('js/select2.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url();?>editor/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/formattoolbar.js')?>"></script>

	<script src="<?php echo base_url('js/left-menu.js');?>"></script>
	<script src="<?php echo base_url('js/notification.js');?>"></script>
	<script src="<?php echo base_url('js/star-rating.js');?>"></script>
	<script src="<?php echo base_url('js/paginate.js');?>"></script>
	<script src="<?php echo base_url('js/assign.js');?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=latin,vietnamese" rel="stylesheet" type="text/css">
	  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-3948834986570227", enable_page_level_ads: true }); </script>
  </head>
  <body class="bg-body">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav class="navbar navbar-stem navbar-fixed-top">
  <div class="container">
       
  	    <!-- Brand and toggle get grouped for better mobile display -->
		 <div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand navbar-brand1" href="<?php echo site_url('home_user') ?>">
					<img class="hidden-xs" src="<?php echo base_url('images/hu_logo_home1.png');?>" alt="">
					<img class="visible-xs-block logo-s" src="<?php echo base_url('images/hu_logo_home1.png');?>" height="32" alt="">
			  </a>
			<div class="pull-right text-trang-mobile visible-xs-block">
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('library/video'); ?>">
					<i class="mr-5 fas fa-cloud"></i>
					<br class="hidden-xs">
				</a>
				<a class="text-trang hover text-center text-l"  href="<?php echo site_url('home_user/notifications') ?>">
					<i class="far fa-bell"></i>
					<span class="badge badge-sm up bg-pink count ncount mr-5"></span>
					<!-- <i class="mr10 fa fa-angle-right"></i> -->
				</a>
				<a href="#" class="text-trang hover " data-toggle="collapse" data-target="#search_top" id="icosearch_top">
					<i class="fas fa-search"></i>
				</a>
			     
			</div>
	    </div>
  	    <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="panel-collapse collapse" id="search_top">
			 <form class="navbar-form navbar-left" role="search">
			  <div class="input-group">
			    <input id="inpsearch_top"  class="form-control form-TK1 w350" placeholder="Tìm kiếm" type="text">
			    <a  class="input-group-addon addon-TK1  searchbt"><i class="fa fa-search" aria-hidden="true"></i></a>
			  </div>
			</form>
		</div>
		<div class="panel-collapse" id="search_top_dt">
			 <form class="navbar-form navbar-left" role="search">
			  <div class="input-group">
			    <input id="inpsearch_top_dt"  onkeyup="search_question(this, event)" class="form-control form-TK1 w350" placeholder="Tìm kiếm" type="text">
			    <a  class="input-group-addon addon-TK1 pointer searchbt"><i class="fa fa-search" aria-hidden="true"></i></a>
			  </div>
			</form>
		</div>
  	    <div class="collapse navbar-collapse" id="defaultNavbar1">
  	       
 	        <ul class="nav navbar-nav navbar-right">
  	        <li>
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('home_user'); ?>"><i class="mr-5 fas fa-home"></i><br class="hidden-xs">Trang chủ</a>
			</li>
			<li>
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('home_user/assign_quiz'); ?>"><i class="mr-5 far fa-calendar-check"></i><br class="hidden-xs">Nhiệm vụ</a>
			</li>
			<li>
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('home_user/results'); ?><?php echo site_url('home_user/results'); ?>"  ><i class="mr-5 far fa-chart-bar"></i><br class="hidden-xs">Kết quả</a>
			</li>
			<li>
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('library/video'); ?>"><i class="mr-5 fas fa-cloud"></i><br class="hidden-xs">Thư viện</a>
			</li>
			<!--<li>
				<a class="text-trang hover text-center text-l" href="<?php echo site_url('message'); ?>"><i class="far fa-envelope"></i><span class="badge badge-sm up bg-pink count mcount"></span><br  class="hidden-xs">Tin nhắn</a>
			</li>-->
			<li class="dropdown ndropdown pointer">
				<a class="text-trang hover text-center text-l" data-toggle="dropdown">
					<i class="far fa-bell"></i>
					<span class="badge badge-sm up bg-pink count ncount mr-5"></span>
					<br  class="hidden-xs">Thông báo
				</a>
				<div  class="dropdown-menu" id="notifications">
                    <!-- <h3>Notifications</h3> -->
                    <header class="dropdown__header fx-lt">
                    	<div class="dropdown__title fx mr10"> 
	                    	<span translate="">
	                    		<span>Thông báo</span>
	                    	</span> 
                    	</div>
                    	<a class="dropdown__setting">
                    		<i class="udi fas fa-cog"></i>
                    	</a>
                    </header>
                    <div class="notification__list">
                    </div>
                    <div class="dropdown__footer">
                    	<a class="link--dropdown-footer link--see-all" href="<?php echo site_url('home_user/notifications') ?>">
                    		Xem tất cả
                    		<i class="mr10 fa fa-angle-right"></i>
                    	</a>
                    </div>
                </div>
			</li>
			<?php if($su==6){?>
				   <li>
					<a class="text-trang hover text-center text-l" href="<?php echo site_url('home_user/moderate_question'); ?>"  ><i class="fas fa-check-circle"></i><span class="badge badge-sm up bg-pink count modcount"></span><br  class="hidden-xs">Kiểm duyệt</a>
				</li>
				 <?php } ?>
  	        <li class="dropdown"><a href="#" class="dropdown-toggle bt-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
  	        	<?php if($link_photo) { ?>
    			    <img id="avt" class=" img-circle MR5" src="<?php echo $link_photo;?> " alt="" width="32" height="32">
    			<?php } else{ ?>   
    			   <img id="avt" class=" img-circle MR5" src="<?php echo base_url('upload/avatar/default.png');?> " alt="" width="32">
    			<?php } ?> 
  	        	<span class=" 
caret caret_e 
"></span></a>
  	          <ul class="dropdown-menu dropdown-menu1">
  	           <!-- <li><a href="#"><i class="MR10 far fa-file-alt text-primary" aria-hidden="true"></i>Bảng tin</a></li>
  	            <li><a href="#"><i class="MR10 far fa-comments text-danger" aria-hidden="true"></i>Tin nhắn</a></li>
  	            <li><a href="#"><i class="MR10 fas fa-th-large text-success" aria-hidden="true"></i>Khóa học</a></li>
  	            <li><a href="#"><i class="MR10 fas fa-calendar text-danger" aria-hidden="true"></i>Sự kiện</a></li>
  	            <li><a href="#"><i class="MR10 fas fa-users text-info" aria-hidden="true"></i>Nhóm</a></li>
  	            <li><a href="#"><i class="MR10 fa fa-address-book text-warning" aria-hidden="true"></i>Dánh sách bạn bè</a></li> -->
				<li><a data-toggle="modal" data-target="#transferModal" href="#"><i class="MR10 fas fa-exchange-alt text-warning" aria-hidden="true"></i>Chuyển điểm</a></li>
  	            <li><a href="<?php echo site_url('profile')?>"><i class="MR10 fas fa-user text-success" aria-hidden="true"></i>Thông tin cá nhân</a></li>
				<li><a data-toggle="modal" data-target="#changepwdModal" href="#"><i class="MR10 fas fa-cog" aria-hidden="true"></i>Đổi mật khẩu</a></li>
  	            <li><a href="<?php echo site_url('user/logout');?>"><i class="MR10 fas fa-sign-out-alt"></i> Đăng xuất</a></li>
              </ul>
            </li>
				<!-- <li>
				<a class="text-trang hover text-center text-TV" href="#">Mời thành viên</a>
			</li> -->
          </ul>
        </div>
  	    <!-- /.navbar-collapse -->
  </div>
  	  <!-- /.container-fluid -->
	   <section class="visible-xs-block nav-mobile" >
			<ul class="ul-mobile list-unstyled">
				<li class="mbqmn"><a data-toggle="collapse" href="#">Trắc nghiệm</a></li>
				<li class="mbclmn"><a  data-toggle="collapse" href="#">Lớp</a></li>
				<li class="mbgrmn"><a  data-toggle="collapse" href="#">Nhóm</a></li>
				<li><a >Hướng dẫn</a></li>
			</ul>

		<ul id="tnmncl" class="panel-collapse collapse">
              
              <a href="#" class="list-group-item close_menu_mb" style="float:right; z-index:100" > x</a>
			  <a href="<?php echo site_url('home_user'); ?>#fun_question" class="list-group-item" onclick="fun_question(event);"> <i class="fas fa-question" style="margin-right:5px"></i> Câu hỏi vui</a>
			  <a href="<?php echo site_url('home_user/create_question'); ?>" class="list-group-item createQuestionItem"> <i class="fas fa-question-circle" style="margin-right:5px"></i> Tạo câu hỏi</a>
			  <a href="<?php echo site_url('home_user/recommend_question');?>" class="list-group-item createQuestionItem"><i class="far fa-question-circle" style="margin-right:5px"></i> Câu hỏi cho bạn</a>
			  <a href="<?php echo site_url('home_user/manage_qbank'); ?>" class="list-group-item"> <i class="fas fa-book" style="margin-right:5px"></i> Quản lý câu hỏi</a>
			  <a href="<?php echo site_url('home_user/create_quiz'); ?>" class="list-group-item"> <i class="fas fa-plus-circle" style="margin-right:5px"></i> Tạo bài kiểm tra</a>
			  <a href="<?php echo site_url('home_user/quiz_list'); ?>" class="list-group-item" > <i class="fas fa-briefcase" style="margin-right:5px"></i> Kiểm tra</a>
			  <a href="<?php echo site_url('home_user/assign_quiz'); ?>" class="list-group-item" > <i class="fas fa-bullhorn" style="margin-right:5px"></i> <?php if($su!=2) echo 'Bài đã giao'; else echo 'Bài được giao'; ?></a>
			  <a href="<?php echo site_url('home_user/results'); ?>" class="list-group-item"> <i class="fas fa-bullseye" style="margin-right:5px"></i> Kết quả</a>
              <?php if($su==6){?>
			  <a href="<?php echo site_url('home_user/moderate_question'); ?>" class="list-group-item"> <i class="fas fa-check-circle" style="margin-right:5px"></i> Kiểm duyệt</a>
	          <?php } ?>
			  <?php if($su==1) {?>
					<a href="<?php echo site_url('library/insert_video'); ?>" class="list-group-item"> <i class="fas fa-video" style="margin-right:5px"></i> Thêm video</a>
			   <?php } ?>
		</ul>
		<ul id="clmncl" class="panel-collapse collapse">	
                <a href="#" class="list-group-item close_menu_mb" style="float:right; z-index:100" > x</a>   
			  <a href="<?php echo site_url('home_user/manage_class'); ?>" class="list-group-item"> <i class="fa fa-box" style="margin-right:5px"></i> Danh sách lớp</a>
			 <a href="<?php echo site_url('home_user'); ?>#create_class" class="list-group-item" onclick="create_class(event);"> <i class="fab fa-dropbox" style="margin-right:5px"></i> Tạo một lớp</a>
		</ul>
		<ul id="grmncl" class="panel-collapse collapse">	
	          <a href="#" class="list-group-item close_menu_mb" style="float:right; z-index:100" > x</a>
			 <a href="<?php echo site_url('home_user/manage_group') ?>" class="list-group-item""> <i class="fas fa-object-group" style="margin-right:5px"></i> Quản lý nhóm</a>
			  <a href="<?php echo site_url('home_user/create_group'); ?>" class="list-group-item"> <i class="fas fa-folder-open" style="margin-right:5px"></i> Tạo một nhóm</a>
			  <a data-toggle="modal" data-target="#joinGroupModal"  class="list-group-item"> <i class="far fa-handshake" style="margin-right:5px"></i> Tham gia nhóm</a>
		</ul>
			
	  </section>
  </nav><!--end nav-->
 
<main class="container MT70">
  
	<div class="modal fade" id="transferModal" role="dialog">
		<div class="modal-dialog">	 
			 <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Chuyển điểm</h4>
				 
				</div>
				<div class="modal-body">
				     <form method="post" action="<?php echo site_url('tranfer_point/tranfer_1/');?>">
						<div class="col-md-12">
						   <p class="col-md-4">Chuyển tới:</p>
						   <input  class="col-md-8" type="text" class="form-control" name="user_received" value="" placeholder="Nhập vào email của người bạn muốn cho điểm"  required />
					   </div>
					  <div class="col-md-12">
						   <p class="col-md-4">Số điểm cần chuyển:</p>
						   <input  class="col-md-8"  type="number" class="form-control" name="point_tranfer" value="" placeholder="Nhập số điểm cần chuyển" min=0 required />
					   </div>
					   <div class="col-md-12">
							<p class="col-md-4">Mật khẩu:</p>
							<input class="col-md-8" type="password" class="form-control" name="pwd_tranfer" value="" placeholder="Nhập mật khẩu tài khoản của bạn"  required />
					  </div> 
					  <div class="col-md-12">
							<p class="col-md-4">Nhập lại mật khẩu:</p>
							<input class="col-md-8" type="password" class="form-control" name="cmf_pwd_tranfer" value="" placeholder="Nhập lại mật khẩu tài khoản của bạn"  required />
					  </div> 
					  <div class="col-md-offset-10">
						<button  style="margin-top:30px" class="btn btn-success" type="submit">Xác nhận</button>
					  </div>
				    </form>
				    
				</div>
			
			 </div>
			  
		</div>
	</div>
	<div class="modal fade" id="joinGroupModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tham gia nhóm</h4>
					</div>
					<div class="modal-body row col-xs-12">
								<div class="col-xs-9">
									<input type="text" class="form-control form-TK1 col-xs-8 " id="group_code" autocomplete="off" name="group_code" onkeyup="checkcodegroup(event,this.value)" placeholder="Nhập Mã nhóm">
								</div>
								<div class="col-xs-3" style="text-align:right">
									<button class="btn btn-primary" id="btjoingroup" onclick="checkcodegroupbt()" style="margin-left:3%" >Xác nhận</button>
								</div>
								<div class="col-xs-9">
								<p id="errorrr" style="color:red"></p>
								</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
  	</div>
   
	
	<div class="modal fade" id="changepwdModal" role="dialog">
 		<div class="modal-dialog">	 
 			 <div class="modal-content">
 				<div class="modal-header">
 				  <button type="button" class="close" data-dismiss="modal">&times;</button>
 				  <h4 class="modal-title">Đổi mật khẩu</h4>
 				 
 				</div>
 				<div class="modal-body">
 				     
 						  <div class="form-group">
 							<p>Mật khẩu hiện tại</p>
 							<input type="password" name="old_pwd" minlength="1" autofocus="autofocus" class="form-control" id="old_pwd" />
 						</div>
 						<div id="error" style="color: red;"></div>
 						<div class="form-group">
 						<p>Nhập mật khẩu mới</p>
 							<input type="password" name="new_pwd" minlength="1" class="form-control" id="new_pwd" />
 						</div>
 						<div id="error1" style="color: red;"></div>
 						<div>
 						</div>
 						 <div class="form-group">
 							<p>Nhập lại mật khẩu mới</p>
 							<input type="password" name="confirm_pwd" minlength="1" class="form-control" id="confirm_pwd" />
 						</div>
 						<div id="error2" style="color: red;"></div>
 						<div id="error3" style="color: green;"></div>
 						<div class="form-group">
 							<button type="submit" class="btn btn-primary oe_form_button" id="submit_cpw" name = "submit">Cập nhật</button>
 						</div>
 						<script type="text/javascript">
 							$('#submit_cpw').on("click",function(){
 								$("#error").empty();
 								$("#error1").empty();
 								$("#error2").empty();
 								$("#error3").empty();
 								var old_pwd =$("#old_pwd").val();
 								var new_pwd =$("#new_pwd").val();
 								var confirm_pwd =$("#confirm_pwd").val();
 								if(old_pwd==''){
 									$("#error").html("(<i>Mời bạn nhập Mật khẩu hiện tại</i>)");
 								}else 
 								if(new_pwd==''){
									$("#error1").html("(<i>Mật khẩu mới không được để trống</i>)");
								}else
								if (confirm_pwd==''){
									$("#error2").html("(<i>Mời bạn nhập vào Mật khẩu mới</i>)");
								}else
								if (confirm_pwd!=new_pwd){
									$("#error2").html("(<i>Mật khẩu xác nhận không trùng khớp</i>)");
								}
								else{
									$.ajax({
							        type: 'POST',
							        data: {old_pwd:old_pwd,new_pwd:new_pwd,confirm_pwd:confirm_pwd},
							        url: "<?php  echo site_url('/user/changepassword') ?>",
							        success: function(data){
							        	// console.log(data);
	                                    if(data==0){
	                                    	 // console.log("Mật khẩu hiện tại không đúng nhé");
	                                    	 $("#error").html("(<i>Mật khẩu hiện tại không đúng</i>)");
	                                    }else
	                                     if(data==2){
	                                    	 // console.log("Mật khẩu xác nhận không trùng khớp với mật khẩu mới");
	                                    	 $("#error2").html("(<i>Mật khẩu xác nhận không trùng khớp với mật khẩu mới</i>)");
	                                    }else
	                                    if(data==3){
	                                    	// console.log("Thay đổi mật khẩuthành công");
	                                    	 $('#changepwdModal').modal('hide');
	                                    	 alert("Thay đổi mật khẩu thành công!");
	                                    	 sendemail_changepassword();
	                                    }
							        },
							        error: function(data) {
							            // console.log(data);
							        }
								    });
							    }

						    });

 						</script>
 						
	 					<!-- 	if($this->session->flashdata('wrong_password')){ 
					  			$wrong_password=$this->session->flashdata('wrong_password');}
							if($this->session->flashdata('matkhaudetrong')){
								$matkhaudetrong=$this->session->flashdata('matkhaudetrong');}
							if($this->session->flashdata('matkhaumoi')){
								$matkhaumoi= $this->session->flashdata('matkhaumoi');}		
							if($this->session->flashdata('change_sucsess')){
								$change_sucsess=$this->session->flashdata('change_sucsess');}
 					 -->
 						 
 						<!-- <script type="text/javascript">
						$('#submit_cpw').on("click",function(){
								var old_pwd =$("#old_pwd").val();
								var new_pwd =$("#new_pwd").val();
								var confirm_pwd =$("#confirm_pwd").val();
								var error =$("#error");
								error.html("");
								
								if(old_pwd==""){
									console.log('aaaaaaaaaaaa');
									error.html("(<i>Mời bạn nhập Mật khẩu hiện tại</i>)");
									return false;
								}else {
									var wrong_password= '<php echo $wrong_password; ?>';
									var matkhaudetrong= '<php echo $matkhaudetrong; ?>';
									var matkhaumoi= '<php echo $matkhaumoi; ?>';
									var change_sucsess= '<php echo $change_sucsess; ?>';
									if(wrong_password!=''){
										error.html(wrong_password);
									}else if(matkhaudetrong!=''){
										$("#error1").html(matkhaudetrong);
									}else if(matkhaumoi!=''){
										$("#error1").html(matkhaudetrong);
									}else if(change_sucsess!=''){
										$("#error1").html(change_sucsess);
									}
									
									/**/
									console.log('ccccccccccc');
								}
							});
 						</script> -->
 				    
 				    
 				</div> 
 				<div class="modal-footer">
 				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 				</div>
 		 </div>
 		</div>
 	</div>
  
	<div class="modal fade" id="previewquestionModal" role="dialog">
		<div class="modal-dialog" style="width:60%">	 
			 <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title" id="prqt"></h4>
				</div>
				<div class="modal-body">
					 <div class="form-group MT20">
						<div id="questionp"></div>
					 </div>
					 <p><h5><b>Đáp án</b></h5></p>
					 <div id="answer-areap">
					 </div>
					 <div id="optionareap">
					 </div>	
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				
			 </div>
			  
		</div>
	</div>
	<div class="modal fade" id="previewquizModal" role="dialog">
		<div class="modal-dialog" style="width:50%">	 
			 <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title" id="quiztitlepr"></h4>
				</div>
				<div class="modal-body" id="quizbodypr">
					
					
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				
			 </div>
			  
		</div>
	</div>
	
	
	<div class="modal fade" id="ratingModal" role="dialog" >
		<div class="modal-dialog">	 
			 <div class="modal-content" >
				<div class="modal-header">
				  <button type="button" class="close" onclick="manageQuestionItem(event);" data-dismiss="modal">&times;</button>
				  <h3 class="modal-title ratingtitle" >Đánh giá</h3>
				</div>
				<div class="modal-body"  id= "bodyratingmodal">
					<p id="msgRating" style="display: none;" class="text-danger"></p>
					<form method="post" id="ratingform">
						<div class="form-group">
							<div class="rating-vl">
								<input id="value-vl" name="value-vl" class="rating-loading" data-min="0" data-max="5" data-step="1" data-size="cs">
								<a class="seeAllReviews"></a>
							</div>
							<div>
								<ul class="ratings_chart_vl">
								</ul>
							</div>
						</div>
						<div class="form-group rxs">
						    <label for="rvalue" class="control-label"></label>
							<input id="rvalue" name="rvalue" class="rating" data-min="0" data-max="5" data-step="1" data-size="xs">
						</div>
						<div class="form-group">
							<textarea  name="rcontent" class="form-control tinymce_textarea"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
				  <button type="button" id="ratingBtn" class="btn btn-success">Đánh giá</button>
				  <button type="button" class="btn btn-default" onclick="manageQuestionItem(event);" data-dismiss="modal">Hủy</button>
				</div>
			 </div>
			  
		</div>
	</div>
	<div class="modal fade" id="classModal" role="dialog" >
		<div class="modal-dialog" style="width:70%">	 
			 <div class="modal-content" >
				<div class="modal-header">
				  <button type="button" class="close" onclick="manage_class(event);" data-dismiss="modal">&times;</button>
				  <div id="titleclassmodal"></div>
				 
				</div>
				<div class="modal-body"  id= "bodyclassmodal">
				  
				    
				</div>
				<div class="modal-footer">
				  <!-- <button type="button" class="btn btn-success" data-dismiss="modal">Cập nhật</button> -->
				  <button type="button" class="btn btn-default" onclick="manage_class(event);" data-dismiss="modal">Close</button>
				</div>
			 </div>
			  
		</div>
	</div>
   
	<div class="modal fade" id="classaddstdModal" role="dialog">
		<div class="modal-dialog" style="width:70%">	 
			 <div class="modal-content" >
				<div class="modal-header">
				  <button type="button" class="close"  onclick="manage_class_modal_rl();"  data-dismiss="modal">&times;</button>
				 <h3 class="modal-title" > Thêm học sinh</h3>
				 
				</div>
				<div class="modal-body"  id= "bodyclassaddstdmodal">
				  
				    
				</div>
				<div class="modal-footer">
				 <!--  <button type="button" class="btn btn-success" data-dismiss="modal">Cập nhật</button> -->
				  <button type="button" class="btn btn-default" onclick="manage_class_modal_rl();" data-dismiss="modal">Close</button>
				</div>
			 </div>
			  
		</div>
	</div>

	<div class="modal fade" id="groupModal" role="dialog" >
        <div class="modal-dialog" style="width:70%">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" onclick="manageGroup(event);" data-dismiss="modal">&times;</button>
                    <div id="titlegroupmodal"></div>

                </div>
                <div class="modal-body"  id= "bodygroupmodal">


                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-success" data-dismiss="modal">Cập nhật</button> -->
                    <button type="button" class="btn btn-default" onclick="manageGroup(event);" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="question_wbg" role="dialog" >
        <div class="modal-dialog" style="width:40%">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" id="clmdprbg" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
                <div class="modal-body">
                	<font id="fclqpr" color="white" >
		                <div contenteditable="true" id="qwbgpr" style="font-size: 33px; text-align:center ;font-weight: 700;padding: 100px 27px;" >

		                 
		                </div>
		          </font>
		     </div>
                <div class="modal-footer" style="min-height:100px">
      				<table >
				    	<tr>
						    <?php for($i=0 ; $i<10; $i++){?>
				    		<td class="tranbtsbg"  style="opacity: 1; transform: translateX(<?php echo 30*$i ?>px);">
				    			<a id="mbgq<?php echo $i+1 ?>">
				    				<img src="<?php echo base_url('upload/background/'.($i+1).'.jpg')?>" class="imgbgrbt" >
				    			</a>
				    		</td>	
							<?php }?>
				    	</tr>	
						
						<tr>
						    <?php for($i=10 ; $i<20; $i++){?>
				    		<td class="tranbtsbg"  style="opacity: 1; transform: translate(<?php echo 30*($i-10) ?>px, 40px);">
				    			<a id="mbgq<?php echo $i+1 ?>">
				    				<img src="<?php echo base_url('upload/background/'.($i+1).'.jpg')?>" class="imgbgrbt" >
				    			</a>
				    		</td>	
							<?php }?>

							 
				    	</tr>	
						 <button type="button" id="clmdprbg_1" class="btn btn-success hidden-xs" style="float:right;margin-top:30px;"  data-dismiss="modal">Xác nhận</button>
				    </table>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="groupaddstdModal" role="dialog">
        <div class="modal-dialog" style="width:70%">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" onclick="manage_group_modal_rl();" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" >Thêm thành viên</h3>
                </div>
                <div class="modal-body" id= "bodygroupaddstdmodal">


                </div>
                <div class="modal-footer">
                    <!--  <button type="button" class="btn btn-success" data-dismiss="modal">Cập nhật</button> -->
                    <button type="button" class="btn btn-default" onclick="manage_group_modal_rl();" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

	<section class="row">
  	  <aside class="col-md-2">
		 
		 <div class="box-bor MB20 visible-xs-block">
			  <div class="media-object-default">
				 <div class="media">
				   <div class="media-left">
					   <a href="#">
					    <?php if($link_photo) { ?>
						 <img class="media-object img-thumbnail" src="<?php echo $link_photo;?> " width="80" alt="placeholder image">
    					<?php } else{ ?>   
						 <img class="media-object img-thumbnail" src="<?php echo base_url('upload/avatar/default.png');?>" width="80" alt="placeholder image">
    					<?php } ?> 
					      
					   </a>
				   </div>
				   <div class="media-body">
					 <h4 class="media-heading"><a href="#" class="border-B1"><?php echo $user_name; ?><br><span class="text-small1">
					   <?php if($su==3){?> Giáo viên <?php }?>
						 <?php if($su==1){?> Admin  <?php }?>
						 <?php if($su==8){?> Tổ chức  <?php }?>
						 <?php if($su==6){?> Quản trị <?php }?>
					 </span></h4>
					 <div class="box-diem-mobile">
						  <p class="text-diem1"><span class="text-diem"><?php echo $user_point." Sao" ?></span></p>
					 </div>
				   </div>
					

			  </div>
			</div>
		  </div>
		  <div class="box-bor MB20 hidden-xs">
			  <div class="text-center mb-10"  style="">
			   <?php if($link_photo) { ?>
					<div style="height: 143px; background: url('<?php echo $link_photo;?>'); background-size: cover; background-position: center;margin-bottom: -8px"></div>
					<?php } else{ ?> 
                    <img class="MR5 img-thumbnail mb-10" src="<?php echo base_url('upload/avatar/default.png');?>" alt="">					
					<?php } ?> 
				 
				  <br>
				  <a href="#" class="border-B1"style="font-size: 16px"><?php echo $user_name; ?></a> <br><span class="text-small">(<?php if($su==3){?>Giáo viên<?php }?><?php if($su==1){?>Admin<?php }?><?php if($su==8){?>Tổ chức<?php }?><?php if($su==6){?> Quản trị <?php }?>)</span>
			  </div>	  
			
					  <div class="box-diem">
						  <p class="text-diem1"><span class="text-diem"><?php echo $user_point." Sao" ?></span></p>
					  </div>
				  	
				  </div>
			  </div>
		  </div>
		  <div class="list-group hidden-xs" id="top_menu">
			 <div style="display:none;" id="topname">quiz_menu</div>
			 <h3 class="list-group-item active1">Trắc nghiệm</h3>
			 <a href="<?php echo site_url('home_user'); ?>#fun_question" class="list-group-item" onclick="fun_question(event);"> <i class="fas fa-question" style="margin-right:5px"></i> Câu hỏi vui</a>
			  <a href="<?php echo site_url('home_user/create_question'); ?>" class="list-group-item createQuestionItem"><i class="fas fa-question-circle" style="margin-right:5px"></i> Tạo câu hỏi</a>
			  <a href="<?php echo site_url('home_user/recommend_question');?>" class="list-group-item createQuestionItem"><i class="far fa-question-circle" style="margin-right:5px"></i> Câu hỏi cho bạn</a>
			  <a href="<?php echo site_url('home_user/manage_qbank'); ?>" class="list-group-item" onclick="manageQuestionItem(event);"> <i class="fas fa-book" style="margin-right:5px"></i> Quản lý câu hỏi</a>
			  <a href="<?php echo site_url('home_user/create_quiz'); ?>" class="list-group-item"> <i class="fas fa-plus-circle" style="margin-right:5px"></i> Tạo bài kiểm tra</a>
			  <a href="<?php echo site_url('home_user/quiz_list'); ?>" class="list-group-item"> <i class="fas fa-briefcase" style="margin-right:5px"></i> Kiểm tra</a>
			  <a href="<?php echo site_url('home_user/assign_quiz'); ?>" class="list-group-item"> <i class="fas fa-bullhorn" style="margin-right:5px"></i> <?php if($su!=2) echo 'Bài đã giao'; else echo 'Bài được giao'; ?></a>
			  <a href="<?php echo site_url('home_user/results'); ?>" class="list-group-item"> <i class="fas fa-bullseye" style="margin-right:5px"></i> Kết quả</a>
			  <?php if($su==6){?>
			  <a href="<?php echo site_url('home_user/moderate_question'); ?>" class="list-group-item"> <i class="fas fa-check-circle" style="margin-right:5px"></i> Kiểm duyệt</a>
	          <?php } ?>
			  <?php if($su==1) {?>
					<a href="<?php echo site_url('library/insert_video'); ?>" class="list-group-item"> <i class="fas fa-video" style="margin-right:5px"></i> Thêm video</a>
			   <?php } ?>
		  </div>
		 <div class="list-group hidden-xs" id="quiz_menu" style="display:none;">
			  <h3 class="list-group-item active1">Trắc nghiệm</h3>
			  <a href="<?php echo site_url('home_user'); ?>#fun_question" class="list-group-item" onclick="fun_question(event);"> <i class="fas fa-question" style="margin-right:5px"></i> Câu hỏi vui</a>
			  <a href="<?php echo site_url('home_user/create_question'); ?>" class="list-group-item createQuestionItem"> <i class="fas fa-question-circle" style="margin-right:5px"></i> Tạo câu hỏi</a>
			  <a href="<?php echo site_url('home_user/recommend_question');?>" class="list-group-item createQuestionItem"><i class="far fa-question-circle" style="margin-right:5px"></i> Câu hỏi cho bạn</a>
			  <a href="<?php echo site_url('home_user/manage_qbank'); ?>" class="list-group-item" onclick="manageQuestionItem(event);"> <i class="fas fa-book" style="margin-right:5px"></i> Quản lý câu hỏi</a>
			  <a href="<?php echo site_url('home_user/create_quiz'); ?>" class="list-group-item"> <i class="fas fa-plus-circle" style="margin-right:5px"></i> Tạo bài kiểm tra</a>
			  <a href="<?php echo site_url('home_user/quiz_list'); ?>" class="list-group-item"> <i class="fas fa-briefcase" style="margin-right:5px"></i> Kiểm tra</a>
			  <a href="<?php echo site_url('home_user/assign_quiz'); ?>" class="list-group-item"> <i class="fas fa-bullhorn" style="margin-right:5px"></i> <?php if($su!=2) echo 'Bài đã giao'; else echo 'Bài được giao'; ?></a>
			  <a href="<?php echo site_url('home_user/results'); ?>" class="list-group-item"> <i class="fas fa-bullseye" style="margin-right:5px"></i> Kết quả</a>
			  <?php if($su==6){?>
			  <a href="<?php echo site_url('home_user/moderate_question'); ?>" class="list-group-item"> <i class="fas fa-check-circle" style="margin-right:5px"></i> Kiểm duyệt</a>
	          <?php } ?>
			   <?php if($su==1) {?>
					<a href="<?php echo site_url('library/insert_video'); ?>" class="list-group-item"> <i class="fas fa-video" style="margin-right:5px"></i> Thêm video</a>
			   <?php } ?>
		  </div>
		  <div class="list-group hidden-xs" id="class_menu">
			  <h3 class="list-group-item active1">Lớp</h3>
			 <!-- <a href="#" class="list-group-item">Tạo một nhóm nhỏ</a>-->
			  <div id ="classpage_menu"></div>
			  <a href="<?php echo site_url('home_user/manage_class'); ?>" class="list-group-item"> <i class="fa fa-box" style="margin-right:5px"></i> Quản lý lớp</a>
			 <a href="<?php echo site_url('home_user'); ?>#create_class" class="list-group-item" onclick="create_class(event);"> <i class="fab fa-dropbox" style="margin-right:5px"></i> Tạo một lớp</a>
			 <!-- <a href="#" class="list-group-item">Tham gia lớp</a>-->
		  </div>
		  <div class="list-group hidden-xs" id="group_menu">
			  <h3 class="list-group-item active1">Nhóm</h3>
			  <a href="<?php echo site_url('home_user/manage_group') ?>" class="list-group-item""> <i class="fas fa-object-group" style="margin-right:5px"></i> Quản lý nhóm</a>
			  <a href="<?php echo site_url('home_user/create_group'); ?>" class="list-group-item"> <i class="fas fa-folder-open" style="margin-right:5px"></i> Tạo một nhóm</a>
			  <a data-toggle="modal" data-target="#joinGroupModal" class="list-group-item"> <i class="far fa-handshake" style="margin-right:5px"></i> Tham gia nhóm</a>
		  </div>
		  <div class="list-group hidden-xs" >
				 <h3 class="list-group-item active1">Về chúng tôi</h3>
				 <a href="<?php echo site_url('home/about1') ?>"  class="list-group-item"><i class="fas fa-bullseye" style="margin-right:5px"></i> Giới thiệu</a>
				 <a href="<?php echo site_url('home/detail3') ?>"  class="list-group-item"><i class="fas fa-object-group" style="margin-right:5px"></i> Điều khoản sử dụng</a>
				 <a href="<?php echo site_url('home/detail1') ?>"  class="list-group-item"><i class="fas fa-folder-open" style="margin-right:5px"></i> Hướng dẫn</a>
				 <a href="<?php echo site_url('home/detail2') ?>"  class="list-group-item"><i class="fa fa-window-restore" style="margin-right:5px"></i> Chính sách riêng tư</a> 
			</div>
  	  </aside>
  	  <aside class="col-md-7"  >
	   <?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
	    if($this->session->flashdata('message2')){
 			echo $this->session->flashdata('message2');	
 		}
		?>	
		  <div class="box-lop" id="bannerpage">
			  <div class="line-L">
				  <h1>Trắc nghiệm</h1>
				  <!--<p>Văn Long Thạch - Lớp 9 - Tiếng Anh </p>-->
				 
		      </div>
		  </div>
		  <div role="tabpanel">
		    <ul class="nav nav-tabs MB20 bg-tab" role="tablist">
		      <li role="presentation" class="active" style="display: none;"><a href="#home2a" data-toggle="tab" role="tab" aria-controls="tab1">Đăng bài</a></li>
		     <!-- <li role="presentation"><a href="#paneTwo2" data-toggle="tab" role="tab" aria-controls="tab2">Thư mục</a></li>
			  <li role="presentation"><a href="#paneTwo3" data-toggle="tab" role="tab" aria-controls="tab2">Thành viên</a></li>
			  <li class="pull-right MR10">
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fas fa-cog MR10"></i>Cài đặt<span class=" 
caret caret_e 
"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			  </li>-->
	        </ul>
		    <div id="tabContent2" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home2a">
					<div class="box-bor MB20">
						<div role="tabpanel" id="tabs">
						  <ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home1"  id="text-tabs" data-toggle="tab" role="tab" aria-controls="tab1">Tạo bài kiểm tra</a></li>
							<li role="presentation"><a href="#home2" data-toggle="tab" role="tab" aria-controls="tab2" id="text-tabs2" style="display:none">Ghi chú</a></li>
						<!--	<li role="presentation" class="dropdown"><a href="#" id="tabDropOne1" class="dropdown-toggle" data-toggle="dropdown" role="tab" aria-controls="tab3" aria-haspopup="true" aria-expanded="false">Giao bài<span class=" 
caret caret_e 
"></span></a>
							  <ul class="dropdown-menu" aria-labelledby="tabDropOne1">
								<li><a href="#tabDropDownOne1" tabindex="-1" data-toggle="tab">Dropdown Link 1</a></li>
								<li><a href="#tabDropDownTwo2" tabindex="-1" data-toggle="tab">Dropdown Link 2</a></li>
							  </ul>
							</li>
							-->
						  </ul>
						  <div id="tabContent1" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home1">
							     <form id="formAddQuiz">
	    				<div class="form-group">	 
							<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('quiz_name');?></label> 
							<input type="text" id="inpquizname" name="quiz_name"  class="form-control" placeholder="<?php echo $this->lang->line('quiz_name');?>"  required autofocus>
						</div>
						<div class="form-group">	 
							<label for="inputEmail"  ><?php echo $this->lang->line('description');?></label> 
							<textarea   name="description"  class="form-control tinymce_textarea" ></textarea>
						</div>
						<div class="form-group">	 
							<label><?php echo $this->lang->line('assign_to_group');?></label> <br>
							 <?php 
							foreach($group_list as $key => $val){
								?>
								
								 <input type="radio" name="gids[]" value="<?php echo $val['gid'];?>" <?php if($key==1){ echo 'checked'; } ?> > <?php echo $val['group_name'];?> &nbsp;&nbsp;&nbsp;
								<?php 
							}
							?>
						</div>
						<a href="#" data-toggle="collapse" data-target="#advance_options"><?php echo $this->lang->line('advance_options');?></a>
						<div id="advance_options" class="collapse">
			
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('start_date');?></label> 
								<input type="text" name="start_date"  value="<?php echo date('Y-m-d H:i:s',time());?>" class="form-control" placeholder="<?php echo $this->lang->line('start_date');?>"   required >
							</div>
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('end_date');?></label> 
								<input type="text" name="end_date"  value="<?php echo date('Y-m-d H:i:s',(time()+(60*60*24*365)));?>" class="form-control" placeholder="<?php echo $this->lang->line('end_date');?>"   required >
							</div>
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('duration');?></label> 
								<input type="text" name="duration"  value="10" class="form-control" placeholder="<?php echo $this->lang->line('duration');?>"  required  >
							</div>
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('maximum_attempts');?></label> 
								<input type="text" name="maximum_attempts"  value="10000" class="form-control" placeholder="<?php echo $this->lang->line('maximum_attempts');?>"   required >
							</div>
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('pass_percentage');?></label> 
								<input type="text" name="pass_percentage" value="50" class="form-control" placeholder="<?php echo $this->lang->line('pass_percentage');?>"   required >
							</div>
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('correct_score');?></label> 
								<input type="text" name="correct_score"  value="1" class="form-control" placeholder="<?php echo $this->lang->line('correct_score');?>"   required >
							</div>
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('incorrect_score');?></label> 
								<input type="text" name="incorrect_score"  value="0" class="form-control" placeholder="<?php echo $this->lang->line('incorrect_score');?>"  required  >
							</div>
							<div class="form-group">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('ip_address');?></label> 
								<input type="text" name="ip_address"  value="" class="form-control" placeholder="<?php echo $this->lang->line('ip_address');?>"    >
							</div>
							<div class="form-group">	 
								<label for="inputEmail" ><?php echo $this->lang->line('view_answer');?></label> <br>
								<input type="radio" name="view_answer"    value="1" checked > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
								<input type="radio" name="view_answer"    value="0"  > <?php echo $this->lang->line('no');?>
							</div>
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail" ><?php echo $this->lang->line('open_quiz');?></label> <br>
								<input type="radio" name="with_login"    value="0"  > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
								<input type="radio" name="with_login"    value="1" checked > <?php echo $this->lang->line('no');?>
							</div>
						
							<div class="form-group">	 
								<label for="inputEmail" ><?php echo $this->lang->line('show_rank');?></label> <br>
								<input type="radio" name="show_chart_rank"    value="1" checked > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
								<input type="radio" name="show_chart_rank"    value="0"  > <?php echo $this->lang->line('no');?>
							</div>


							<?php 
							if($this->config->item('webcam')==true){
							?>
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail" ><?php echo $this->lang->line('capture_photo');?></label> <br>
								<input type="radio" name="camera_req"    value="1"  > <?php echo $this->lang->line('yes');?>&nbsp;&nbsp;&nbsp;
								<input type="radio" name="camera_req"    value="0"  checked > <?php echo $this->lang->line('no');?>
							</div>
							<?php 
							}else{
							?>
							<input type="hidden" name="camera_req" value="0">
							
							<?php 
							}
							?>

							

							<div class="form-group" style="display:none;">	 
								<label   ><?php echo $this->lang->line('quiz_template');?></label> <br>
								<select name="quiz_template">
								<?php 
								foreach($this->config->item('quiz_templates') as $qk=> $val){
								?>
								<option value="<?php echo $val;?>"><?php echo $val;?></option>
								<?php 
								}
								?>
								 
								</select>
							</div>

							<div class="form-group" style="display:none;">	 
								<label for="inputEmail" ><?php echo $this->lang->line('question_selection');?></label> <br>
								<input type="radio" name="question_selection"    value="1"  > <?php echo $this->lang->line('automatically');?><br>
								<input type="radio" name="question_selection"    value="0"  checked > <?php echo $this->lang->line('manually');?>
							</div>
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail" ><?php echo $this->lang->line('generate_certificate');?></label> <br>
								<input type="radio" name="gen_certificate"    value="1"  > <?php echo $this->lang->line('yes');?><br>
								<input type="radio" name="gen_certificate"    value="0"  checked > <?php echo $this->lang->line('no');?>
							</div>
						 
							<div class="form-group" style="display:none;">	 
								<label for="inputEmail"  ><?php echo $this->lang->line('certificate_text');?></label> 
								<textarea   name="certificate_text"  class="form-control" ></textarea><br>
								<?php echo $this->lang->line('tags_use');?> <?php echo htmlentities("<br>  <center></center>  <b></b>  <h1></h1>  <h2></h2>   <h3></h3>    <font></font>");?><br>
								{email}, {first_name}, {last_name}, {quiz_name}, {percentage_obtained}, {score_obtained}, {result}, {generated_date}, {result_id}, {qr_code}
							</div>
                           
			 			</div>
						<br/>
						 <button id="addQuizFirst" type="button" class="btn btn-primary">Tiếp</button>
			 			<div class="form-group" id="table_question_into_quiz" >
			 			</div>
						 <div style="display:none">
							<input type="text" id="inf_search" value="">
							<input type="text" id="inf_page" value="0">
							<input type="text" id="inf_limit" value="10">
							<input type="text" id="inf_cid" value="0">
							<input type="text" id="inf_lid" value="0">
							<input type="text" id="inf_quid" value="">
						 </div>
			 			</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="home2">
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tabDropDownOne1">
								<p>Dropdown content#1</p>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="tabDropDownTwo2">
								<p>Dropdown content#2 </p>
							  </div>
						  </div>
						</div>
				</div>
					
		      
	        </div>
	    </div>
	   
      </aside>
	  
	  
      <aside class="col-md-3 rightbar">
	    <div class="box-bor MB20">
		  		  <h3 class="text-xanh1"><a href="<?php echo site_url('home_user')?>#manage_quiz">BÀI TRẮC NGHIỆM </a></h3>
		  <?php foreach($quiz_fun_rb as $qz){?>
		      <div style="margin-bottom:25px" class="bo-B">
				<div style="margin-bottom:10px"><a href="<?php echo site_url('quiz/validate_quiz/'.$qz['quid']);?>"> <img src="<?php echo $qz['img'];?> " width="100%"></a><br/>
				</div>
		         <a style="font-size:15px;" href="<?php echo site_url('quiz/validate_quiz/'.$qz['quid']);?>"><b><?php echo $qz['quiz_name'];?></a></b>
			 </div>
		  <?php }?>
		  
        </div>
      </aside>
      	<div class="modal fade" id="inviteModal" role="dialog">
      		<div class="modal-dialog">
      			<div class="modal-content">
      				<div class="modal-header">
	    				<button type="button" class="close" data-dismiss="modal">&times;</button>
	    				<h4 class="modal-title">Giao bài kiểm tra</h4>
	    			</div>
	    			<div class="modal-body">
	    				<form id="inviteModalForm">
	    					<p id="inviteMsg" style="display: none;" class=" text-danger"></p>
	    					<input type="hidden" name="quid" id="quid"/>
	    					<div class="form-group">
    						<label>Ngày bắt đầu</label>
 	    						<input class="form-control" value="<?php echo date("Y-m-d"); ?>" type="date" name="startdate" id="startdate" />
 	    						<label>Ngày kết thúc</label>
 	    						<input class="form-control" value="<?php echo (new DateTime(date("Y-m-d")))->add(new DateInterval("P1D"))->format('Y-m-d'); ?>" type="date" name="enddate" id="enddate" />
 	    					</div>
 	    					<div class="assign-tab">
 	    						<ul class="nav nav-tabs">
 								    <li class="active" id="tabstudent"><a data-toggle="tab" href="#studenttab">Học sinh</a></li>
 								    <li id="tabclass"><a data-toggle="tab" href="#classtab" id="assClass">Lớp</a></li>
 							  	</ul>
 
 							  	<div class="tab-content">
 							    	<div id="studenttab" class="tab-pane fade in active">
 							      		<h3></h3>
 							      		<table id="tblStudentAssign" class="display" style="width:100%"></table>
 							    	</div>
 							    	<div id="classtab" class="tab-pane fade">
 							      		<h3></h3>
 							      		<table id="tblClassAssign" class="display" style="width:100%"></table>
 						    	</div>
 							  	</div>
 							</div>
 	    					<!-- <div class="form-group">
	    						<div class="assStudent" style="float: left;">
									<input type="checkbox" name="uids" value="1">Học sinh&nbsp;&nbsp;&nbsp;
								</div>
								<div class="assClass">
									<input type="checkbox" name="clid" value="0">Lớp
								</div>
							</div>
							<div class="form-group selectUids" style="display: none;">
								<select class="js-invite-basic-multiple form-control" name="uids[]" multiple="multiple"></select>
							</div>
							<div class="form-group classCode"  style="display: none;">
								<input type="text" class="form-control" name="assign_class" placeholder="Nhập mã lớp..."/>
							</div>-->
	    				</form>
	    			</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	      				<!--<button id="btnInvite" type="button" class="btn btn-primary">Lưu</button>-->
	      			</div>
      			</div>
      		</div>
      	</div>
	
    </section>
	
  	</main>

  	
   
  </body>
     <script>create_quiz_1(this)</script> 
  </html>
