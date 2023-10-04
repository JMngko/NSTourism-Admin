<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

		<link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        <link href="../plugins/bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
		<link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <?php include "header.php"?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
		    <div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container-fluid">

						<div class="row">
							<div class="col-sm-12">
								<div class="page-title-box">
									<h4 class="page-title">WISATA</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">NSTourism</a></li>
											<li class="breadcrumb-item"><a href="javascript:void(0);">Wisata</a></li>
									</ol>
								</div>
							</div>
						</div>
						<!-- end row -->
						
						<div class="page-content-wrapper">
                          
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
    
                                             <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target="#tambah"><i class="mdi mdi-plus"></i>Tambah</button>
                                           
										     <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Tambah Tempat Wisata</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="" action="wisata_save.php" enctype="multipart/form-data" role="form" id="form1" name="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>Nama Tempat Wisata</label>
																			<input type="text" name="nama_wisata" id="nama_wisata" class="form-control" required placeholder="Ketik Nama Tempat"/>
																		</div>
														
																		<div class="form-group">
																			<label>Alamat</label>
																			<div>
																				<input type="text" name="alamat" id="alamat" class="form-control" required
																					parsley-type="alamat" placeholder="Masukkan Alamat"/>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Kecamatan</label>
																			<div>
																				<input type="text" name="kecamatan" id="kecamatan" class="form-control" required
																					parsley-type="kecamatan" placeholder="Masukkan Kecamatan"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Daerah Wisata</label>
																			<div>
																				<select class="form-control" name="daerah" id="daerah" required>
																					<option form disabled selected value>- Pilih -</option>
																						<?php
																							$sqlg = mysqli_query($con, "SELECT * FROM daerah");
																							while($datag = mysqli_fetch_array($sqlg)){
																						?>
																						<option value ="<?php echo $datag['id_daerah']; ?>"><?php echo $datag['nama_daerah']; ?></option>
																						<?php
																						} ?>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																				<select class="form-control" name = "kategori" id="kategori" required>
																					<option form disabled selected value>- Pilih -</option>
																					<option value = "Gunung dan Bukit">Gunung dan Bukit</option>
																					<option value = "Pantai dan Laut">Pantai dan Laut</option>
																					<option value = "Danau">Danau</option>
																					<option value = "Tempat Bersejarah">Tempat Bersejarah</option>
																					<option value = "Atraksi">Atraksi</option>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
						                                                    <label class="control-label">Fasilitas</label>
						                                                    <div>
							                                                    <select class="select2 form-control select2-multiple" name="fasilitas[]" id="fasilitas" multiple="multiple" data-placeholder="- Pilih -">
							                                                        <optgroup value="- Pilih -">
								                                                        <option value="Toilet">Toilet</option>
																						<option value="Tempat Makan">Tempat Makan</option>
																						<option value="Tempat Parkir">Tempat Parkir</option>
																						<option value="Resepsionis">Resepsionis</option>
																						<option value="Entertaiment">Entertaiment</option>
																					</optgroup>
							                                                    </select>
							                                                </div>
						                                                </div>

																		<div class="form-group">
																			<label>Longitude</label>
																			<div>
																				<input type="text" name="lng" id="lng" class="form-control"
																				 placeholder="Masukkan Longitude"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Latitude</label>
																			<div>
																				<input type="text" name="lat" id="lat" class="form-control"
																					 placeholder="Masukkan Latitude"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Biaya</label>
																			<div>
																				<select class="form-control" name ="biaya" id="biaya" required>
																					<option form disabled selected value>- Pilih -</option>
																						<?php
																							$sql = mysqli_query($con, "SELECT * FROM biaya");
																							while($data = mysqli_fetch_array($sql)){
																						?>
																						<?php if($data['biaya_akhir']=='999999999'){ ?>
																							<option value ="<?php echo $data['id_biaya']; ?>">> Rp.<?php echo $data['biaya_awal']; ?></option>
																						<?php }else{ ?>
																							<option value ="<?php echo $data['id_biaya']; ?>">Rp.<?php echo $data['biaya_awal']; ?> - Rp.<?php echo $data['biaya_akhir']; ?></option>
																						<?php } ?>
																						<?php 
																						} ?>
																				</select>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Biaya 2</label>
																			<div>
																				<input type="text" name="biaya2" id="biaya2" class="form-control"
																					 placeholder="Masukkan Biaya"/>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Deskripsi Tempat</label>
																			<div>
																				<textarea required name ="deskripsi" id="deskripsi" class="form-control" rows="5" 
																					placeholder="Masukkan Deskripsi"></textarea>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" name="nama_file" id="nama_file" class="form-control" required
																					accept=".jpg,.jpeg" id="nama_file"/>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Video</label>
																			<div>
																				<input type="text" name="video" id="video" class="form-control"
																					parsley-type="video" placeholder="Masukkan Link Video"/>
																			</div>
																		</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                                                                    <button type="Submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                                </div>
															</form>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
													
											<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Tempat Wisata</th>
													<th>Biaya</th>
													<th>Kategori</th>
													<th>Gambar</th>
													<th>Tambah Gambar</th>
													<th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
														include "koneksi.php";
														$sql = mysqli_query($con, "SELECT * FROM wisata");
														while($data = mysqli_fetch_array($sql)){
												?>
												<tr>
													<td><?php echo $data['id_wisata']; ?></td>
                                                    <td><?php echo $data['nama_wisata']; ?></td>
													<td><?php echo $data['biaya2']; ?></td>
													<td><?php echo $data['kategori']; ?></td>
													<td><img src="<?php echo $data['gambar']; ?>" width="120px"></td>
													<td width="20px"><a href="wisata_gambar.php?id=<?php echo $data['id_wisata']; ?>" class="btn btn-primary btn-sm waves-effect waves-light">Tambah</a></td>
                                                    <td width="100px">
														<button type="button" class="btn btn-secondary btn-sm waves-effect" data-toggle="modal" data-target="#ubah<?php echo $data['id_wisata']; ?>">Edit</button>
														<a href="wisata_hapus.php?id=<?php echo $data['id_wisata']; ?>" class="btn btn-primary btn-sm waves-effect waves-light">Hapus</a>
													
													
													<div id="ubah<?php echo $data['id_wisata']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Ubah Detail</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
																<?php
																	$sql2 = mysqli_query($con, "SELECT * FROM wisata, daerah WHERE wisata.id_daerah = daerah.id_daerah AND id_wisata = '$data[id_wisata]'");
																	$data2 = mysqli_fetch_array($sql2);
																?>
                                                                    <form class="" action="wisata_update.php" enctype="multipart/form-data" role="form" id="form1" name="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="hidden" name="id_wisata" class="form-control" value="<?php echo $data2['id_wisata']; ?>"/>
																			<input type="text" class="form-control" value="<?php echo $data2['id_wisata']; ?>" disabled/>
																		</div>
																		
																		<div class="form-group">
																			<label>Nama Tempat Wisata</label>
																			<input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="<?php echo $data2['nama_wisata']; ?>" required/>
																		</div>
														
																		<div class="form-group">
																			<label>Alamat</label>
																			<div>
																				<input type="text" name="alamat" class="form-control" value="<?php echo $data2['alamat']; ?>" required/>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Kecamatan</label>
																			<div>
																				<input type="text" name="kecamatan" class="form-control" value="<?php echo $data2['kecamatan']; ?>" required/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Daerah Wisata</label>
																			<div>
																				<select class="form-control" id="daerah" name = "daerah" required>
																					<option value ="<?php echo $data2['id_daerah']; ?>"><?php echo $data2['nama_daerah']; ?></option>
																						<?php
																							$sql3 = mysqli_query($con, "SELECT * FROM daerah");
																							while($data3 = mysqli_fetch_array($sql3)){
																						?>
																							<option value ="<?php echo $data3['id_daerah']; ?>"><?php echo $data3['nama_daerah']; ?></option>
																						<?php 
																						} ?>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																				<select class="form-control" id="kategori" name = "kategori" required>
																					<?php echo "<option value ='".$data2['kategori']."'>".$data2['kategori']."</option>"; ?>
																					<option value = "Gunung dan Bukit">Gunung dan Bukit</option>
																					<option value = "Pantai dan Laut">Pantai dan Laut</option>
																					<option value = "Danau">Danau</option>
																					<option value = "Tempat Bersejarah">Tempat Bersejarah</option>
																					<option value = "Atraksi">Atraksi</option>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
						                                                    <label class="control-label">Fasilitas</label>
						                                                    <div>
							                                                    <select class="select2 form-control select2-multiple" name="fasilitas[]" id="fasilitas" multiple="multiple" data-placeholder="Choose ...">
							                                                    	<?php echo "<option value ='".$data2['fasilitas']."'>".$data2['fasilitas']."</option>"; ?>
							                                                    	<option value="Toilet" <?php if(preg_match('/\bToilet\b/i', $data2['fasilitas'])){ echo "selected"; } ?>>Toilet</option>
																					<option value="Tempat Makan" <?php if(preg_match('/\bTempat Makan\b/i', $data2['fasilitas'])){ echo "selected"; } ?>>Tempat Makan</option>
																					<option value="Tempat Parkir" <?php if(preg_match('/\bTempat Parkir\b/i', $data2['fasilitas'])){ echo "selected"; } ?>>Tempat Parkir</option>
							                                                    	<option value="Resepsionis" <?php if(preg_match('/\bResepsionis\b/i', $data2['fasilitas'])){ echo "selected"; } ?>>Resepsionis</option>
							                                                    	<option value="Entertaiment" <?php if(preg_match('/\bEntertaiment\b/i', $data2['fasilitas'])){ echo "selected"; } ?>>Entertaiment</option>
							                                                    </select>
							                                                </div>
						                                                </div>

																		<div class="form-group">
																			<label>Longitude</label>
																			<div>
																				<input type="text" name="lng" id="lng" class="form-control" value="<?php echo $data2['lng']; ?>"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Latitude</label>
																			<div>
																				<input type="text" name="lat" id="lat" class="form-control" value="<?php echo $data2['lat']; ?>"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Biaya</label>
																			<div>
																				<select class="form-control" name ="biaya" id="biaya" required>
																						<?php
																							$sql4 = mysqli_query($con, "SELECT * FROM biaya");
																							while($data4 = mysqli_fetch_array($sql4)){
																						?>
																							<?php if($data4['biaya_akhir']=='999999999'){ ?>
																								<option value ="<?php echo $data4['id_biaya']; ?>">> Rp.<?php echo $data4['biaya_awal']; ?></option>
																							<?php }else{ ?>
																								<option value ="<?php echo $data4['id_biaya']; ?>">Rp. <?php echo $data4['biaya_awal']; ?> - Rp. <?php echo $data4['biaya_akhir']; ?></option>
																							<?php 
																							} ?>
																						<?php
																						}
																						?>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Biaya 2</label>
																			<div>
																				<input type="text" name="biaya2" id="biaya2" class="form-control" value="<?php echo $data2['biaya2']; ?>"/>
																			</div>
																		</div>

																		<div class="form-group">
																			<label>Deskripsi Tempat</label>
																			<div>
																				<textarea type="text" name ="deskripsi" id="deskripsi" class="form-control" rows="5"><?php echo $data2['deskripsi']; ?></textarea>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" name="nama_file" id="nama_file" class="form-control" value="<?php echo "$gambar"; ?>"
																					accept=".jpg,.jpeg" id="nama_file"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Video</label>
																			<div>
																				<input type="text" name="video" id="video" class="form-control" value="<?php echo $data2['video']; ?>"/>
																			</div>
																		</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                                                                    <button type="Submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                                </div>
															</form>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </td>
                                                </tr>
												<?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Agroxa <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            

		<!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
		<script src="../plugins/bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
        <script src="../plugins/bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- Required datatable js -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <script src="../plugins/select2/js/select2.min.js"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <!-- Buttons examples -->
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>
		<script src="assets/pages/form-advanced.js"></script>


        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>