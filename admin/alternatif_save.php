<?php
	include "koneksi.php";
	
		$sql = "INSERT INTO alternatif VALUES(null, '$_POST[nama_wisata]', '$_POST[biaya]', '$_POST[jarak]', '$_POST[fasilitas]', '$_POST[alamat]', '$_POST[latitude]', '$_POST[longitude]')";
		$cek = mysqli_query($con, $sql);
	
	if($cek)
	{
?>
	<script type="text/javascript">
 	  window.location.href = "alternatif.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "alternatif.php";
	</script>
	
<?php } ?>