<?php
	include "koneksi.php";
	
		$sql="UPDATE alternatif SET nama_wisata = '$_POST[nama_wisata]', biaya ='$_POST[biaya]', jarak ='$_POST[jarak]', jumlah_fasilitas ='$_POST[fasilitas]', alamat ='$_POST[alamat]', latitude ='$_POST[latitude]', longitude ='$_POST[longitude]' WHERE id_alternatif = '$_POST[id_alternatif]'";
		$cek=mysqli_query($con, $sql);
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