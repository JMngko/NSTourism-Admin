<?php
	include "koneksi.php";
	$sql = "DELETE FROM biaya WHERE id_biaya= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "biaya.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "biaya.php";
	</script>
	
<?php } ?>