<head>
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
</head>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Tabel datauji</li>
						</ul> <!-- /.breadcrumb 
 -->
					</div>
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
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
						<br>

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										
										<br>
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											

											<table id="dt-basic" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<!-- <th>ID Data Uji</th> -->
														<th>ID Pasien</th>
														<th>ID Gejala</th>
														<th>Nilai</th>
														<th>Aksi</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_datauji as $hasil){ 
                									?>
                  									<tr>
									                    <td><?php echo $no++ ?></td>
									                    <!-- <td><?php echo $hasil->id_datauji ?></td> -->
									                    <td><?php echo $hasil->nama_pasien ?></td>
									                    <td><?php echo $hasil->nama_gejala ?></td>
									                    <td><?php echo $hasil->nilai ?></td>
									                    <td>
									                        <a href="<?php echo base_url() ?>index.php/Tabeldatauji/hapus/<?php echo $hasil->id_datauji ?>" class="btn btn-sm btn-danger">Hapus</a>
									                    </td>
									                  </tr>

									                <?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- Plugins -->
		<script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>
		<!-- Custom -->
		<script src="<?php echo base_url() ?>assets/js/custom.js"></script>

		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
		<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
		<script>
		    jQuery(document).ready(function(){

		        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
		        // #dt-basic adalah id html dari tabel yang diinisialisasi
		        $('#dt-basic').DataTable();
		    });
		</script>