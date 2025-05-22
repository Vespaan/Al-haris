<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Halaman Login</title>

	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />


	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />
	<link rel="shortcut icon" href="./assets/front/img/logo.png">
	<script type="text/javascript">
		function cekform()
		{
			if(!$("#username").val())
			{
				alert('maaf username tidak boleh kosong');
				$("#username").focus();
				return false;
			}
			if(!$("#password").val())
			{
				alert('maaf password tidak boleh kosong');
				$("#password").focus();
				return false;
			}
		}
	</script>


</head>

<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1"> <br><br><br><br><br><br><br>
					<div class="login-container">
						<div class="center">
							<h1><a href="<?php echo base_url();?>landing">
								<span class="red">Selamat Datang</span>
								<span class="white" id="id-text2">Pesantren AL-Haris Makassar</span></a>
							</h1>
						</div>

						<div class="space-6"></div>

						<div class="position-relative">
							<div id="login-box" class="login-box visible widget-box no-border">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											Login
										</h4>

										<div class="space-6"></div>

										<form method="POST" action="<?php echo base_url();?>Login/getlogin" 
										onsubmit="return cekform();">
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="text" name="username" id="username" class="form-control" placeholder="Username" title="Username" />
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														<input type="password" name="password" id="password" class="form-control" placeholder="Password" title="Password" />
														<?php
															$info = $this->session->flashdata('info');
															if(!empty($info))
															{
																echo $info;
															}
														?>
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<div class="space"></div>


													<button type="submit" class="width-35 btn btn-sm btn-primary">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div><br/>
							
												<div class="space-4"></div>
											</fieldset>
										</form>
									</div><!-- /.widget-main -->

									<div class="toolbar clearfix">
									</div>
								</div><!-- /.widget-body -->
							</div><!-- /.login-box -->

						</div><!-- /.position-relative -->
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.main-content -->
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>


	<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
	</script>

	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		jQuery(function($) {
			$(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});
		});
		</script>
	</body>
	</html>
