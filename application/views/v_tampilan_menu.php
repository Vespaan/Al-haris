<?php
$status = $this->session->userdata('status');
?>
<ul class="nav nav-list">
	<li class="active">
		<a href="<?php echo base_url();?>home">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Dashboard </span>
		</a>
		<b class="arrow"></b>
	</li>


	<li class="">
			<li class="">
				<a href="<?php echo base_url();?>Ustadz">
					<i class="menu-icon fa fa-caret-right"></i>
					Data ustadz
				</a>
				<b class="arrow"></b>
			</li>
	</li>


	<li class="">
			<li class="">
				<a href="<?php echo base_url();?>Santri">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Santri
				</a>
				<b class="arrow"></b>
			</li>
	</li>


	<li class="">
		<b class="arrow"></b>
			<li class="">
				<a href="<?php echo base_url();?>Kitab">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Mapel
				</a>
				<b class="arrow"></b>
			</li>
	</li>


	<li class="">
			<li class="">
				<a href="<?php echo base_url();?>Kelas">
					<i class="menu-icon fa fa-caret-right"></i>
					Data Kelas
				</a>
				<b class="arrow"></b>
			</li>
	</li>


	
	<li class="">
		<a href="<?php echo base_url();?>">
			<i class="menu-icon fa fa-globe"></i>
			<span class="menu-text"> Website </span>
		</a>
		<b class="arrow"></b>
	</li>


	<?php	
	if(($status == 'admin')){?>
	<li class="">
		<a href="<?php echo base_url();?>Profile">
			<i class="menu-icon fa fa-lock"></i>
			<span class="menu-text"> Admin </span>
		</a>
		<b class="arrow"></b>
	</li>
	<?php }?>
</ul>