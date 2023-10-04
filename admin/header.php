<?php 

        include "koneksi.php"; 

        if($_SESSION['loginadm'] == false)
        { 
        ?>
        <script type="text/javascript">
            window.location.href = "loginform.php";
        </script>
        
<?php } ?>
<?php

    $id_operator=$_SESSION['idadm'];
    $password=$_SESSION['passadm'];
    $hashpass = hash("sha256",$password);
    $username=$_SESSION['useradm'];
    $sql = mysqli_query($con, "SELECT * FROM admin WHERE password = '$password' AND username = '$username'");
    $data = mysqli_fetch_array($sql);
    $nama=$data['nama'];
    $username=$data['username'];
    $password=$data['password'];

?>
<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
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

                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item text-danger" href="logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
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
                                <a href="index.php" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span> Dashboard </span>
                                </a>
                            </li>
							
                            <li>
                                <a href="wisata.php" class="waves-effect">
                                    <i class="mdi mdi-camera"></i><span> Wisata</span>
                                </a>
                            </li>

							<li>
                                <a href="daerah.php" class="waves-effect">
                                    <i class="mdi mdi-city"></i><span> Kab/Kota Sulut</span>
                                </a>
                            </li>

                            <li>
                                <a href="kuliner.php" class="waves-effect">
                                    <i class="mdi mdi-food"></i><span> Kuliner</span>
                                </a>
                            </li>
                          
							<li>
                                <a href="biaya.php" class="waves-effect">
                                    <i class="mdi mdi-cash-multiple"></i><span> Biaya</span>
                                </a>
                            </li>
							
                            <li>
                                <a href="kategori.php" class="waves-effect">
                                    <i class="mdi mdi-apps"></i><span> Kategori</span>
                                </a>
                            </li>

                            <li>
                                <a href="fasilitas.php" class="waves-effect">
                                    <i class="mdi mdi-floor-plan"></i><span> Fasilitas</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-information-outline"></i><span> SPK <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="nilai.php">Data Nilai</a></li>
                                    <li><a href="kriteria.php">Data Kriteria</a></li>
                                    <li><a href="bobot.php">Data Bobot</a></li>
                                    <li><a href="alternatif.php">Data Alternatif</a></li>
                                    <li><a href="hasil_perhitungan.php">Hasil Perhitungan</a></li>
                                </ul>
                            </li>
							<!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-information-outline"></i><span> Informasi Umum <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
									<li><a href="bandara.php">Bandara</a></li>
									<li><a href="pelabuhan.php">Pelabuhan</a></li>
                                    <li><a href="transportasi.php">Transportasi</a></li>
									<li><a href="moneychanger.php">Money Changer</a></li>
									<li><a href="traveltour.php">Travel Tour</a></li>
									<li><a href="akomodasi.php">Akomodasi</a></li>
									<li><a href="restoran.php">Restoran</a></li>
                                </ul>
                            </li>
							
							<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i><span> Pusat Perbelanjaan <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
									<li><a href="pusat_perbelanjaan.php">Pusat Perbelanjaan</a></li>
                                </ul>
                            </li>
							
							<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-newspaper"></i><span> Berita Sulut <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
									<li><a href="informasi.php">Informasi</a></li>
                                    <li><a href="wisata.php">Berita</a></li>
									<li><a href="event.php">Event</a></li>
									<li><a href="artikel.php">Artikel</a></li>
                                </ul>
                            </li>
							
							<li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-contacts"></i><span> Contact Center <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="contact_center.php">Contact</a></li>
                                </ul>
                            </li> -->
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>