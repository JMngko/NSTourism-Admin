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
                                    <h4 class="page-title">TRANSPORTASI</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">XploreSulut</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Transportasi</a></li>
                                        <li class="breadcrumb-item active">Transportasi</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        
    
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
    
                                            <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target="#tambah"><i class="mdi mdi-plus"></i><span>Tambah</button><br><br> 
											  <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Tambah Transportasi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                     <form class="" action="transportasi_save.php" enctype="multipart/form-data" role="form" id="form1" name="form1" onsubmit="return validateform" method="POST">
																		<div class="form-group">
																			<label>Nama Tempat</label>
																			<input type="text" name="nama" class="form-control" required placeholder="Ketik nama Transportasi"/>
																		</div>
																		
																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																				<input type="text" class="form-control" required name="kategori"
																						parsley-type="kategori" placeholder="Masukan kategori"/>
																			</div>
																		</div>
									
																		<div class="form-group">
																			<label>Deskripsi</label>
																			<div>
																				<textarea required name ="deskripsi" class="form-control" rows="5" required 
																					placeholder="Masukkan Deskripsi"></textarea>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" class="form-control" required name="nama_file"
																				 accept =".jpg,.jpeg"/>
																			</div>
																		</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                                </div>
															</form>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Kategori</th>
                                                    <th>Deskripsi</th>
													<th>Gambar</th>
													<th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
												<?php
														include "koneksi.php";
														$sql = mysqli_query($con, "SELECT * FROM transportasi");
														while($data = mysqli_fetch_array($sql)){
													?>
                                                <tr>
													
													<td><?php echo $data['id']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['kategori']; ?></td>
                                                    <td><?php echo $data['deskripsi']; ?></td>
													<td><img src="<?php echo $data['gambar']; ?>" width="150px"></td>
                                                    <td width="100px">
														<button type="button" class="btn btn-secondary btn-sm waves-effect" data-toggle="modal" data-target="#ubah<?php echo $data['id']; ?>">Edit</button>
														<a href="transportasi_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm waves-effect waves-light">Hapus</a>
														
														<div id="ubah<?php echo $data['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Ubah Detail</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
																<?php
																	$sql2 = mysqli_query($con, "SELECT * FROM transportasi WHERE id = '$data[id]'");
																	$data2 = mysqli_fetch_array($sql2);
																?>
                                                                     <form class="" action="transportasi_update.php" role="form" id="form1" name="form1" enctype="multipart/form-data" onsubmit="return validateform" method="POST">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $data2['id']; ?>">
																		<div class="form-group">
																			<label>Nama Tempat</label>
																			<input type="text" name="nama" class="form-control" value="<?php echo $data2['nama']; ?>" required placeholder="Ketik "/>
																		</div>
                                                                        
																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																				<input type="text" class="form-control"  value="<?php echo $data2['kategori']; ?>" required name="kategori"
																				placeholder="Masukan kategori"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Deskripsi</label>
																			<div>
																				<textarea type="text" name ="deskripsi" class="form-control" rows="5"><?php echo $data2['deskripsi']; ?></textarea>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" class="form-control" name="nama_file" value="<?php echo "$gambar"; ?>"
																				 accept =".jpg,.jpeg"/>
																			</div>
																		</div>
																		
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
																	</form>
                                                                </div>
															
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
													
													</td>
													<?php } ?>
											   </tr>
                                                
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

        <!-- Required datatable js -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
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


        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>