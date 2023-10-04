<?php
	include "koneksi.php";
	
		$sql="UPDATE kuliner SET id_daerah = '$_POST[daerah]', nama_kuliner = '$_POST[nama_kuliner]', alamat_kuliner = '$_POST[alamat_kuliner]', kecamatan_kuliner = '$_POST[kecamatan_kuliner]', lat = '$_POST[lat]', lng = '$_POST[lng]' WHERE id_kuliner = '$_POST[id_kuliner]'";
		$cek=mysqli_query($con, $sql);
		if($cek)
		{
?>
	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php } ?>