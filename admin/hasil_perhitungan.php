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
        <?php 
            include "header.php"; 
            include "koneksi.php";
        ?>
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
                                    <h4 class="page-title">HASIL PERHITUNGAN</h4>
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
                                            <h5>Nilai Alternatif</h5>       
                                            <table id="datatables" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Biaya</th>
                                                    <th>Jarak</th>
                                                    <th>Jumlah Fasilitas</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $sql = mysqli_query($con, "SELECT * FROM alternatif");
                                                    while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $data['id_alternatif']; ?></td>
                                                    <td><?php echo $data['nama_wisata']; ?></td>
                                                    <td><?php echo $data['biaya']; ?></td>
                                                    <td><?php echo $data['jarak']; ?></td>
                                                    <td><?php echo $data['jumlah_fasilitas']; ?></td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table><br>

                                            <h5>Konversi</h5>       
                                            <table id="datatablez" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>K01</th>
                                                    <th>K02</th>
                                                    <th>K03</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        $min_biaya="2";
                                                        $min_jarak="2";
                                                        $min_fasilitas="2";
                                                        $max_biaya="0";
                                                        $max_jarak="0";
                                                        $max_fasilitas="0";
                                                        $sql = mysqli_query($con, "SELECT * FROM alternatif");
                                                        while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td width="10px"><?php echo $data['id_alternatif']; ?></td>
                                                    <td><?php echo $data['nama_wisata']; ?></td>
                                                    <?php
                                                        
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai WHERE id_kriteria = '1' AND keterangan = '$data[biaya]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                    ?>
                                                    <td width="200px"><?php 
                                                    echo $datad['nilai']; 
                                                    if($datad['nilai']>=$min_biaya){
                                                        $min_biaya=$min_biaya;
                                                    }elseif($datad['nilai']<=$min_biaya){
                                                        $min_biaya=$datad['nilai'];
                                                    }
                                                    if($datad['nilai']<=$max_biaya){
                                                        $max_biaya=$max_biaya;
                                                    }elseif($datad['nilai']>=$max_biaya){
                                                        $max_biaya=$datad['nilai'];
                                                    }
                                                    
                                                    ?></td>
                                                    <?php } ?>
                                                    <?php
                                                        
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai WHERE id_kriteria = '2' AND keterangan = '$data[jarak]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                    ?>
                                                    <td width="200px"><?php 
                                                    echo $datad['nilai']; 
                                                    if($datad['nilai']>=$min_jarak){
                                                        $min_jarak=$min_jarak;
                                                    }elseif($datad['nilai']<=$min_jarak){
                                                        $min_jarak=$datad['nilai'];
                                                    }
                                                    if($datad['nilai']<=$max_jarak){
                                                        $max_jarak=$max_jarak;
                                                    }elseif($datad['nilai']>=$max_jarak){
                                                        $max_jarak=$datad['nilai'];
                                                    }
                                                    
                                                    ?></td>
                                                    <?php } ?>
                                                    <?php
                                                        
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai WHERE id_kriteria = '3' AND keterangan = '$data[jumlah_fasilitas]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                    ?>
                                                    <td width="200px"><?php 
                                                    echo $datad['nilai']; 
                                                    if($datad['nilai']>=$min_fasilitas){
                                                        $min_fasilitas=$min_fasilitas;
                                                    }elseif($datad['nilai']<=$min_fasilitas){
                                                        $min_fasilitas=$datad['nilai'];
                                                    }
                                                    if($datad['nilai']<=$max_fasilitas){
                                                        $max_fasilitas=$max_fasilitas;
                                                    }elseif($datad['nilai']>=$max_fasilitas){
                                                        $max_fasilitas=$datad['nilai'];
                                                    }
                                                   
                                                    ?></td>
                                                    <?php } ?>
                                                    
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                                <thead>
                                                <tr>
                                                    <th colspan="2">MIN</th>
                                                    <th><?php echo $min_biaya; ?></th>
                                                    <th><?php echo $min_jarak; ?></th>
                                                    <th><?php echo $min_fasilitas; ?></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">MAX</th>
                                                    <th><?php echo $max_biaya; ?></th>
                                                    <th><?php echo $max_jarak; ?></th>
                                                    <th><?php echo $max_fasilitas; ?></th>
                                                </tr>
                                                </thead>
                                            </table><br>

                                            <h5>Normalisasi</h5>       
                                            <table id="datatablex" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>K01</th>
                                                    <th>K02</th>
                                                    <th>K03</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        $sqlgsf = "DELETE FROM hasil";
                                                        mysqli_query($con, $sqlgsf);

                                                        $mbiaya="";
                                                        $mjarak="";
                                                        $mfasilitas="";
                                                        $sql = mysqli_query($con, "SELECT * FROM alternatif");
                                                        while($data = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                    <td width="10px"><?php echo $data['id_alternatif']; ?></td>
                                                    <td><?php echo $data['nama_wisata']; ?></td>
                                                    <?php
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai, kriteria WHERE nilai.id_kriteria = kriteria.id_kriteria AND nilai.id_kriteria = '1' AND keterangan = '$data[biaya]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                            
                                                    ?>
                                                    <td width="200px"><?php if($datad['nilai']!=0){ $nbiaya=$min_biaya/$datad['nilai']; echo $nbiaya; }else{ $nbiaya=0; echo "0"; } $mbiaya=$nbiaya*$datad['bobot']; ?></td>
                                                    <?php } ?>
                                                    <?php
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai, kriteria WHERE nilai.id_kriteria = kriteria.id_kriteria AND nilai.id_kriteria = '2' AND keterangan = '$data[jarak]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                    ?>
                                                    <td width="200px"><?php if($datad['nilai']!=0){ $njarak=$datad['nilai']/$max_jarak; echo $njarak; }else{ $njarak=0; echo "0"; }  $mjarak=$njarak*$datad['bobot']; ?></td>
                                                    <?php } ?>
                                                    <?php
                                                        $sqld = mysqli_query($con, "SELECT * FROM nilai, kriteria WHERE nilai.id_kriteria = kriteria.id_kriteria AND nilai.id_kriteria = '3' AND keterangan = '$data[jumlah_fasilitas]'");
                                                        while($datad = mysqli_fetch_array($sqld)){
                                                    ?>
                                                    <td width="200px"><?php if($datad['nilai']!=0){ $nfasilitas=$datad['nilai']/$max_fasilitas; echo $nfasilitas; }else{ $nfasilitas=0; echo "0"; } $mfasilitas=$nfasilitas*$datad['bobot']; ?></td>
                                                    <?php } ?>
                                                    
                                                </tr>
                                                <?php 
                                                    $hasil=$mbiaya+$mjarak+$mfasilitas;
                                                    $sqlj = "INSERT INTO hasil VALUES(null, '$data[id_alternatif]', '$mbiaya', '$mjarak', '$mfasilitas', '$hasil')";
                                                    mysqli_query($con, $sqlj);
                                                ?>
                                                <?php } ?>
                                                </tbody>
                                            </table><br>

                                            <h5>Hasil Akhir</h5>       
                                            <table id="datatablec" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>K01</th>
                                                    <th>K02</th>
                                                    <th>K03</th>
                                                    <th>NILAI</th>
                                                    <th>RANK</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        $no=0;
                                                        $sql = mysqli_query($con, "SELECT * FROM alternatif, hasil WHERE alternatif.id_alternatif = hasil.id_alternatif ORDER BY nilai DESC");
                                                        while($data = mysqli_fetch_array($sql)){
                                                            $no++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $data['nama_wisata']; ?></td>
                                                    <td><?php echo $data['biaya']; ?></td>
                                                    <td><?php echo $data['jarak']; ?></td>
                                                    <td><?php echo $data['fasilitas']; ?></td>
                                                    <td><?php echo $data['nilai']; ?></td>
                                                    <td><b><?php echo $no; ?></b></td>
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