
<?php
	include "koneksi.php";

		$sql = "INSERT INTO kuliner VALUES(null, '$_POST[daerah]', '$_POST[nama_kuliner]', '$_POST[alamat_kuliner]', '$_POST[kecamatan_kuliner]', '$_POST[lat]', '$_POST[lng]', '$_POST[deskripsi]')";
		$cek = mysqli_query($con, $sql);

		if($cek)
		{
?>

	<script type="text/javasript">
	  alert("Berhasil ditambah!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal ditambah!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php } ?>
	
	