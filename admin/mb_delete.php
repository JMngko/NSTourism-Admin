<?php
	include "koneksi.php";
	$sql = "DELETE FROM wisata WHERE id_barang= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javasript">
	  alert("Berhasil dihapus!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "master_barang.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal dihapus!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "master_barang.php";
	</script>
	
<?php } ?>