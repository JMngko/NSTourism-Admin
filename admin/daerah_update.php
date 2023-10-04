<?php
	include "koneksi.php";
	
	$namafolder = "images/daerah/"; //tempat menyimpan file
	
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
	
		$sql="UPDATE daerah SET nama_daerah = '$_POST[nama_daerah]', kode_traveloka ='$_POST[kode_traveloka]',  gambar = '$gambar' WHERE id_daerah = '$_POST[id_daerah]'";
		$cek=mysqli_query($con, $sql);
		}else{
		$sql="UPDATE daerah SET nama_daerah = '$_POST[nama_daerah]', kode_traveloka = '$_POST[kode_traveloka]' WHERE id_daerah = '$_POST[id_daerah]'";
		$cek=mysqli_query($con, $sql);
		}
		if($cek)
		{
?>
	<script type="text/javascript">
 	  window.location.href = "daerah.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "daerah.php";
	</script>
	
<?php } ?>