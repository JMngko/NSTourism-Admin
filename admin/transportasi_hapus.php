<?php
	include "koneksi.php";
	$sql = "DELETE FROM transportasi WHERE id = '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
		alert("Berhasil dihapus!");
	</script>
	<script type="text/javascript">
		window.location.href = "transportasi.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
		alert("Gagal dihapus!");
	</script>
	<script type="text/javascript">
		window.location.href = "transportasi.php";
	</script>
<?php } ?>