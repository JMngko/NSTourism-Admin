<?php
	include "koneksi.php";
	$sql = "DELETE FROM fasilitas WHERE id_fasilitas= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "fasilitas.php";
	</script>
	
<?php } ?>