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
									<h4 class="page-title">KRITERIA</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">NSTourism</a></li>
											<li class="breadcrumb-item"><a href="javascript:void(0);">Kriteria</a></li>
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
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Tambah Kriteria</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="" action="kriteria_save.php" enctype="multipart/form-data" role="form" id="form1" name="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>Nama Kriteria</label>
																			    <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" required placeholder="Masukkan Nama Kriteria"/>
																		</div>

                                                                        <div class="form-group">
                                                                            <label>Atribut</label>
                                                                            <div>
                                                                                <select class="form-control" name = "atribut" id="atribut" required>
                                                                                    <option form disabled selected value>- Pilih -</option>
                                                                                    <option value = "Cost">Cost</option>
                                                                                    <option value = "Benefit">Benefit</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Bobot Kriteria</label>
                                                                            <div>
                                                                                <select class="form-control" name = "bobot_k" id="bobot_k" required>
                                                                                    <option form disabled selected value>- Pilih -</option>\
                                                                                        <?php
                                                                                            $sqlg = mysqli_query($con, "SELECT * FROM bobot");
                                                                                            while($datag = mysqli_fetch_array($sqlg)){
                                                                                        ?>
                                                                                        <option value ="<?php echo $datag['id_bobot']; ?>"><?php echo $datag['keterangan']; ?></option>
                                                                                        <?php
                                                                                        } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Bobot</label>
                                                                            <div>
                                                                                <select class="form-control" name="bobot" id="bobot" required>
                                                                                    <option form disabled selected value>- Pilih -</option>
                                                                                        <?php
                                                                                            $sqlg = mysqli_query($con, "SELECT * FROM bobot");
                                                                                            while($datag = mysqli_fetch_array($sqlg)){
                                                                                        ?>
                                                                                        <option value ="<?php echo $datag['nilai']; ?>"><?php echo $datag['nilai']; ?></option>
                                                                                        <?php
                                                                                        } ?>
                                                                                </select>
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
                                                    <th>Nama Kriteria</th>
													<th>Atribut</th>
                                                    <th>Bobot Kriteria</th>
                                                    <th>Bobot</th>
													<th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
														include "koneksi.php";
														$sql = mysqli_query($con, "SELECT * FROM kriteria");
														while($data = mysqli_fetch_array($sql)){
												?>
												<tr>
													<td><?php echo $data['id_kriteria']; ?></td>
                                                    <td><?php echo $data['nama_kriteria']; ?></td>
                                                    <td><?php echo $data['atribut']; ?></td>
                                                    <td><?php echo $data['id_bobot']; ?></td>
                                                    <td><?php echo $data['bobot']; ?></td>
                                                    <td width="100px">
														<button type="button" class="btn btn-secondary btn-sm waves-effect" data-toggle="modal" data-target="#ubah<?php echo $data['id_kriteria']; ?>">Edit</button>
														<a href="kriteria_hapus.php?id=<?php echo $data['id_kriteria']; ?>" class="btn btn-primary btn-sm waves-effect waves-light">Hapus</a>
													
													<div id="ubah<?php echo $data['id_kriteria']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Ubah Detail</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
																<?php
																	$sql2 = mysqli_query($con, "SELECT * FROM kriteria  WHERE id_kriteria = '$data[id_kriteria]'");
																	$data2 = mysqli_fetch_array($sql2);
																?>
                                                                    <form class="" action="kriteria_update.php" enctype="multipart/form-data" role="form" id="form1" name="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="hidden" name="id_kriteria" class="form-control" value="<?php echo $data2['id_kriteria']; ?>"/>
																			<input type="text" class="form-control" value="<?php echo $data2['id_kriteria']; ?>" disabled/>
																		</div>
																		
                                                                        <div class="form-group">
                                                                            <label>Nama Kriteria</label>
                                                                            <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" value="<?php echo $data2['nama_kriteria']; ?>" required/>
                                                                        </div>

																		<div class="form-group">
																			<label>Atribut</label>
																			<div>
                                                                                <select class="form-control" name = "atribut" id="atribut" required>
                                                                                    <?php echo "<option value ='".$data2['atribut']."'>".$data2['atribut']."</option>"; ?>
                                                                                    <option value = "Cost">Cost</option>
                                                                                    <option value = "Benefit">Benefit</option>
                                                                                </select>
                                                                            </div>
																		</div>
																		
                                                                        <div class="form-group">
                                                                            <label>Bobot Kriteria</label>
                                                                            <div>
                                                                                <select class="form-control" name="bobot_k" id="bobot_k" required>
                                                                                     <option value ="<?php echo $data2['id_bobot']; ?>"><?php echo $data2['id_bobot']; ?></option>
                                                                                        <?php
                                                                                            $sqlg = mysqli_query($con, "SELECT * FROM bobot");
                                                                                            while($datag = mysqli_fetch_array($sqlg)){
                                                                                        ?>
                                                                                        <option value ="<?php echo $datag['id_bobot']; ?>"><?php echo $datag['keterangan']; ?></option>
                                                                                        <?php
                                                                                        } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Bobot</label>
                                                                            <div>
                                                                                <select class="form-control" name="bobot" id="bobot" required>
                                                                                     <option value ="<?php echo $data2['bobot']; ?>"><?php echo $data2['bobot']; ?></option>
                                                                                        <?php
                                                                                            $sqlg = mysqli_query($con, "SELECT * FROM bobot");
                                                                                            while($datag = mysqli_fetch_array($sqlg)){
                                                                                        ?>
                                                                                        <option value ="<?php echo $datag['nilai']; ?>"><?php echo $datag['nilai']; ?></option>
                                                                                        <?php
                                                                                        } ?>
                                                                                </select>
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