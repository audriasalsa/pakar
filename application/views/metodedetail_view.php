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
							<li class="active">Tabel Gejala</li>
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
										<div>
											<h5>Tabel Euclidien</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Datalatih</th>
														<th>ID Datalatih 2</th>
														<th>Jarak</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_euclidien as $hasil){ 
                									?>
                  									<tr>
									                    <td><?php echo $no++ ?></td>
									                    <td><?php echo $hasil->id_datalatih ?></td>
									                    <td><?php echo $hasil->id_datalatih2 ?></td>
									                    <td><?php echo $hasil->Jarak ?></td>

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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Menghitung Validitas</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Datalatih</th>
														<th>ID Datalatih 2</th>
														<th>Jarak</th>
														<th>ID penyakit 1</th>
														<th>ID penyakit 2</th>
														<th>N</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_ranking as $hasil){ 
                									?>
                  									<tr>
									                    <td><?php echo $no++ ?></td>
									                    <td><?php echo $hasil->id_datalatih ?></td>
									                    <td><?php echo $hasil->id_datalatih2 ?></td>
									                    <td><?php echo $hasil->Jarak ?></td>
									                    <td><?php echo $hasil->id_penyakit1 ?></td>
									                    <td><?php echo $hasil->id_penyakit2 ?></td>
									                    <td><?php echo $hasil->n ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Menghitung Validitas</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Datalatih</th>
														<th>Validitas</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_validitas as $hasil){ 
                									?>
                  									<tr>
									                    <td><?php echo $no++ ?></td>
									                    <td><?php echo $hasil->id_datalatih ?></td>
									                    <td><?php echo $hasil->validitas ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Data Uji</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Pasien</th>
														<th>ID Gejala</th>
														<th>Nilai</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_uji as $hasil){ 
                									?>
                									<tr>
										              <td><?php echo $no++ ?></td>
										              <td><?php echo $hasil->id_pasien ?></td>
										              <td><?php echo $hasil->id_gejala ?></td>
										              <td><?php echo $hasil->nilai ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Data Euclidien Uji</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>ID Pasien</th>
														<th>ID Gejala</th>
														<th>Nilai</th>
													</tr>
												</thead>

												<tbody>
													<?php
														$no = 1; 
                    									foreach($data_euclidienuji as $hasil){ 
                									?>
                									<tr>
										              <td><?php echo $no++ ?></td>
										              <td><?php echo $hasil->id_datalatih ?></td>
										              <td><?php echo $hasil->id_pasien ?></td>
										              <td><?php echo $hasil->Jarak ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Data Weight Voting</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
										          <tr>
										            <th>Ranking</th>
										            <th>ID Data Latih</th>
										            <th>Weight Voting</th>
										          </tr>
										        </thead>
										        <tbody>
										          <?php
										            $no = 1; 
										            foreach($data_weightvoting as $hasil){ 
										          ?>
										            <tr>
										              <td><?php echo $no++ ?></td>
										              <td><?php echo $hasil->id_datalatih ?></td>
										              <td><?php echo $hasil->weightvoting ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Data Weight Voting tetangga terdekat</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
										          <tr>
										            <th>Ranking</th>
										            <th>ID Data Latih</th>
										            <th>Weight Voting</th>
										            <th>Penyakit</th>
										          </tr>
										        </thead>
										        <tbody>
										          <?php
										            $no = 1; 
										            foreach($data_weightvotinglimit as $hasil){ 
										          ?>
										            <tr>
										              <td><?php echo $no++ ?></td>
										              <td><?php echo $hasil->id_datalatih ?></td>
										              <td><?php echo $hasil->weightvoting ?></td>
										              <td><?php echo $hasil->id_penyakit ?></td>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div>
											<h5>Hasil Diagnosa</h5>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
										          <tr>
										            <th>No</th>
										            <th>Diagnosa</th>
										          </tr>
										        </thead>
										        <tbody>
										          <?php
										            $no = 1; 
										            foreach($data_diagnosa as $hasil){ 
										          ?>
										            <tr>
										              <td><?php echo $no++ ?></td>
										              <td><?php echo $hasil->id_penyakit ?></td>
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