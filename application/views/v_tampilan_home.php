<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>AL-Haris Makassar</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->


	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />


	<!-- Jdatapicker -->

	<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>
	<link rel="shortcut icon" href="./assets/front/img/logo.png">

</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default">

		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="<?php echo base_url();?>home" class="navbar-brand">
					<small>
						AL-Haris Makassar
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-check"></i>
								4 Tasks to complete
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:65%" class="progress-bar"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Hardware Upgrade</span>
												<span class="pull-right">35%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:35%" class="progress-bar progress-bar-danger"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Unit Testing</span>
												<span class="pull-right">15%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:15%" class="progress-bar progress-bar-warning"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Bug Fixes</span>
												<span class="pull-right">90%</span>
											</div>

											<div class="progress progress-mini progress-striped active">
												<div style="width:90%" class="progress-bar progress-bar-success"></div>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See tasks with details
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

						<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-exclamation-triangle"></i>
								8 Notifications
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
													New Comments
												</span>
												<span class="pull-right badge badge-info">+12</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="btn btn-xs btn-primary fa fa-user"></i>
											Bob just signed up as an editor ...
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
													New Orders
												</span>
												<span class="pull-right badge badge-success">+8</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
													Followers
												</span>
												<span class="pull-right badge badge-info">+11</span>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See all notifications
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>


						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-envelope-o"></i>
								5 Messages
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#" class="clearfix">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Alex:</span>
													Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>a moment ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Susan:</span>
													Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>20 minutes ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
\											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Bob:</span>
													Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>3:15 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Kate:</span>
													Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>1:33 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Fred:</span>
													Vestibulum id penatibus et auctor  ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>10:09 am</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="inbox.html">
									See all messages
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<span class="user-info">
								<small>Welcome,</small>
								<!-- Iqbal Fauzi -->
								<?php echo $this->session->userdata('username') ?>
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>Profile">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="<?php echo base_url();?>home/logout" onClick="return confirm('Apakah Anda ingin logout?')">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar                  responsive">
			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>

			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

				</div>
			</div><!-- /.sidebar-shortcuts -->

			<?php $this->load->view('v_tampilan_menu');?>


			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>

			<script type="text/javascript">
				try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo base_url();?>home">Home</a>
						</li>
						<li class="active">Dashboard</li>
					</ul><!-- /.breadcrumb -->
				</div>

				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-130"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<div class="page-header">
						<h1>
							<?php echo $judul;?>
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								<?php echo $sub_judul ;?>
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->

							<?php
							$status = $this->session->userdata('status');

							if($status == 'admin'){
								$this->load->view($content);
							}else if ($status == 'ustadz'){
								$this->load->view($content_ustadz);
							}else if ($status =='santri'){
								$this->load->view($content_santri);
							}
							?>

							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Pesantren</span>
						AL-Haris Makassar
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
	<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
	</script>
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

</body>
</html>
