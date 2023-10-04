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
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo.png" alt="" height="24">
                        </span>
                        <i>
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0"> 
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> 
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                <span class="badge badge-pill badge-info noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications (37)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>        
                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-header waves-effect waves-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create New
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-black-mesa"></i> <span> Components <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="components-lightbox.html">Lightbox</a></li>
                                    <li><a href="components-rangeslider.html">Range Slider</a></li>
                                    <li><a href="components-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard"></i><span> Forms <span class="badge badge-success float-right">6</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-finance"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Chart</a></li>
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table-settings"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-album"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps  <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                                <ul class="submenu">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-page-layout-sidebar-left"></i><span> Layouts <span class="badge badge-warning float-right">NEW</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                    <li><a href="layouts-sidebar-user.html">Sidebar with User</a></li>
                                    <li><a href="layouts-collapsed.html">Collpased Sidenav</a></li>
                                    <li><a href="layouts-small.html">Small Sidebar</a></li>
                                    <li><a href="layouts-title2.html">Page Title 2</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
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
									<h4 class="page-title">RESTORAN</h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">XploreSulut</a></li>
											<li class="breadcrumb-item"><a href="javascript:void(0);">Restoran</a></li>
											<li class="breadcrumb-item active">Restoran</li>
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
						
						<div class="page-content-wrapper">
                          
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
    
                                             <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-toggle="modal" data-target="#tambah"><i class="mdi mdi-plus"></i>Tambah</button><br><br> 
                                           
										     <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Tambah Restoran</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="" action="restoran_save.php" enctype="multipart/form-data" role="form" id="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>Nama Tempat</label>
																			<input type="text" name="nama" class="form-control" required placeholder="Ketik Nama Tempat"/>
																		</div>
														
																		<div class="form-group">
																			<label>Alamat</label>
																			<div>
																				<input type="text" name="alamat" class="form-control" required
																						parsley-type="alamat" placeholder="Masukkan Alamat"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Daerah</label>
																			<div>
																			 <select class="form-control" name="daerah" required>
																					<option disabled selected value>- Pilih -</option>
																					<option value="Kabupaten Bolaang Mongondow">Kabupaten Bolaang Mongondow</option>
																					<option value="Kabupaten Bolaang Mongondow Selatan">Kabupaten Bolaang Mongondow Selatan</option>
																					<option value="Kabupaten Bolaang Mongondow Timur">Kabupaten Bolaang Mongondow Timur</option>
																					<option value="Kabupaten Bolaang Mongondow Utara">Kabupaten Bolaang Mongondow Utara</option>
																					<option value="Kabupaten Kepulauan Sangihe">Kabupaten Kepulauan Sangihe</option>
																					<option value="Kabupaten Kepulauan Siau Tagulandang Biaro">Kabupaten Kepulauan Siau Tagulandang Biaro</option>
																					<option value="Kabupaten Kepulauan Talaud">Kabupaten Kepulauan Talaud</option>
																					<option value="Kabupaten Minahasa">Kabupaten Minahasa</option>
																					<option value="Kabupaten Minahasa Selatan">Kabupaten Minahasa Selatan</option>
																					<option value="Kabupaten Minahasa Tenggara">Kabupaten Minahasa Tenggara</option>
																					<option value="Kabupaten Minahasa Utara">Kabupaten Minahasa Utara</option>
																					<option value="Kota Bitung">Kota Bitung</option>
																					<option value="Kota Kotamobagu">Kota Kotamobagu</option>
																					<option value="Kota Manado">Kota Manado</option>
																					<option value="Kota Tomohon">Kota Tomohon</option>
																				</select>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Koordinat</label>
																			<div>
																				<input type="text" name="koordinat" class="form-control" required
																						parsley-type="koordinat" placeholder="Masukkan Koordinat Tempat"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Nomor Telepon</label>
																			<div>
																				<input type="text" name="no_tlp" class="form-control"
																						parsley-type="no_tlp" placeholder="Masukkan Nomor Telepon"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																				<select class="form-control" name="kategori" required>
																					<option disabled selected value>- Pilih -</option>
																					<option value="Kaki Lima">Kaki Lima</option>
																					<option value="Makanan Tradisional">Makanan Tradisional</option>
																					<option value="Resto dan Cafe">Resto dan Cafe</option>
																					<option value="Bar and Lounge">Bar and Lounge</option>
																				</select>
																			</div>
																		</div>
																	
																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" name="nama_file" class="form-control" required
																				 accept =".jpg,.jpeg" id="nama_file"/>
																			</div>
																		</div>
																	<div class="form-group">
																		<label>Deskripsi Tempat</label>
																			<div>
																			<textarea required name = "deskripsi" class="form-control" rows="5"></textarea>
																			</div>
																		</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Tutup</button>
                                                                    <button type="Submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                                </div>
															</div>
															</form>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
													
											<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Tempat</th>
                                                    <th>Alamat</th>
                                                    <th>Daerah</th>
                                                    <th>Koordinat</th>
													<th>Nomor Telepon</th>
													<th>Kategori</th>
													<th>Gambar</th>
													<th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
														include "koneksi.php";
														$sql = mysqli_query($con, "SELECT * FROM restoran");
														while($data = mysqli_fetch_array($sql)){
													?>
												<tr>
													<td><?php echo $data['id']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td><?php echo $data['daerah']; ?></td>
													<td><?php echo $data['koordinat']; ?></td>
													<td><?php echo $data['no_tlp']; ?></td>
													<td><?php echo $data['kategori']; ?></td>
													<td><img src="<?php echo $data['gambar']; ?>" width="120px"></td>
                                                    <td width="100px">
														<button type="button" class="btn btn-secondary btn-sm waves-effect" data-toggle="modal" data-target="#ubah<?php echo $data['id']; ?>">Edit</button>
														<a href="restoran_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm waves-effect waves-light">Hapus</a>
													
													
													<div id="ubah<?php echo $data['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Ubah Detail</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
																<?php
																	$sql2 = mysqli_query($con, "SELECT * FROM restoran WHERE id = '$data[id]'");
																	$data2 = mysqli_fetch_array($sql2);
																?>
                                                                    <form class="" action="restoran_update.php" enctype="multipart/form-data" role="form" id="form1" onsubmit="return validateForm()" method="POST">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="hidden" name="id" class="form-control" value="<?php echo $data2['id']; ?>"/>
																			<input type="text" class="form-control" value="<?php echo $data2['id']; ?>" disabled/>
																		</div>
																		
																		<div class="form-group">
																			<label>Nama Tempat</label>
																			<input type="text" name="nama" class="form-control" value="<?php echo $data2['nama']; ?>" required 
																			placeholder="Ketik Nama Tempat Restoran"/>
																		</div>
														
																		<div class="form-group">
																			<label>Alamat</label>
																			<div>
																				<input type="text" name="alamat" class="form-control" value="<?php echo $data2['alamat']; ?>" required
																				placeholder="Masukkan Alamat"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Daerah</label>
																			<div>
																				<select class="form-control" name="daerah" required>
																				<?php echo "<option value='".$data2['daerah']."'>".$data2['daerah']."</option>"; ?>
																					<option value="Kabupaten Bolaang Mongondow">Kabupaten Bolaang Mongondow</option>
																					<option value="Kabupaten Bolaang Mongondow Selatan">Kabupaten Bolaang Mongondow Selatan</option>
																					<option value="Kabupaten Bolaang Mongondow Timur">Kabupaten Bolaang Mongondow Timur</option>
																					<option value="Kabupaten Bolaang Mongondow Utara">Kabupaten Bolaang Mongondow Utara</option>
																					<option value="Kabupaten Kepulauan Sangihe">Kabupaten Kepulauan Sangihe</option>
																					<option value="Kabupaten Kepulauan Siau Tagulandang Biaro">Kabupaten Kepulauan Siau Tagulandang Biaro</option>
																					<option value="Kabupaten Kepulauan Talaud">Kabupaten Kepulauan Talaud</option>
																					<option value="Kabupaten Minahasa">Kabupaten Minahasa</option>
																					<option value="Kabupaten Minahasa Selatan">Kabupaten Minahasa Selatan</option>
																					<option value="Kabupaten Minahasa Tenggara">Kabupaten Minahasa Tenggara</option>
																					<option value="Kabupaten Minahasa Utara">Kabupaten Minahasa Utara</option>
																					<option value="Kota Bitung">Kota Bitung</option>
																					<option value="Kota Kotamobagu">Kota Kotamobagu</option>
																					<option value="Kota Manado">Kota Manado</option>
																					<option value="Kota Tomohon">Kota Tomohon</option>	
																				</select>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Koordinat</label>
																			<div>
																				<input type="text" name="koordinat" class="form-control" value="<?php echo $data2['koordinat']; ?>" required
																				placeholder="Masukkan Koordinat"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Nomor Telepon</label>
																			<div>
																				<input type="text" name="no_tlp" class="form-control" value="<?php echo $data2['no_tlp']; ?>" required
																				placeholder="Masukkan Nomor Telepon"/>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Kategori</label>
																			<div>
																			<select class="form-control" name="kategori" required>
																			<?php echo "<option value='".$data2['kategori']."'>".$data2['kategori']."</option>"; ?>
																					<option value="Kaki Lima">Kaki Lima</option>
																					<option value="Makanan Tradisional">Makanan Tradisional</option>
																					<option value="Resto dan Cafe">Resto dan Cafe</option>
																					<option value="Bar and Lounge">Bar and Lounge</option>	
																				</select>
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label>Gambar</label>
																			<div>
																				<input type="file" name="nama_file" class="form-control" value="<?php echo $data2['gambar']; ?>"
																					accept =".jpg,.jpeg" id="nama_file" />
																			</div>
																		</div>
																		
																		<div class="form-group">
																		<label>Deskripsi Tempat</label>
																			<div>
																				
																				<textarea required name = "deskripsi" class="form-control" rows="5"><?php echo $data2['deskripsi']; ?></textarea>
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