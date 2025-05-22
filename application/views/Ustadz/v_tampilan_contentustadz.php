<?php 
$data = $this->M_model_security->getJumlahdata();
?>
<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<center><h1>Selamat Datang</h1></center>
	<center><h3>Ustadz</h3></center>
</div>
<div class="col-md-12" align="center">
	<div class="col-xs-12">

		<div class="row">
			<div class="col-xs-12">
				<h3 class="header smaller lighter black"><strong>AL-Haris Makassar - DASHBOARD</strong></h3>

				<p></p>
				<a href="<?php echo base_url();?>Ustadz" class="btn btn-success btn-app radius-4">
					Ustadz</br>
					<b1><?php echo $data['jml_Ustadz']; ?></b1>
					<span class="badge badge-pink badge-left"><?php echo $data['jml_Ustadz']; ?></span>
				</a>
				<a href="<?php echo base_url();?>Santri" class="btn btn-app btn-primary no-radius">
					Santri</br>
					<b1><?php echo $data['jml_Santri']; ?></b1>
					<span class="badge badge-warning badge-left"><?php echo $data['jml_Santri']; ?></span>
				</a>
				<a href="<?php echo base_url();?>Kitab" class="btn btn-app btn-default no-radius">
					Kitab</br>
					<b1><?php echo $data['jml_Pelajaran']; ?></b1>
					<span class="badge badge-warning badge-left"><?php echo $data['jml_Pelajaran']; ?></span>
				</a>
				<a href="<?php echo base_url();?>Kelas" class="btn btn-app btn-danger no-radius">
					Kelas</br>
					<b1><?php echo $data['jml_Kelas']; ?></b1>
					<span class="badge badge-warning badge-left"><?php echo $data['jml_Kelas']; ?></span>
				</a>
			</div>
		</div>
	</div>
</div>

