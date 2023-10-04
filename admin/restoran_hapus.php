<?php
	include "koneksi.php";
	$sql = "DELETE FROM restoran WHERE id = '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javasript">
	  alert("Berhasil dihapus!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "restoran.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
	  alert("Gagal dihapus!");
	</script>
	<script type="text/javascript">
 	  window.location.href = "restoran.php";
	</script>
	
<?php } ?>