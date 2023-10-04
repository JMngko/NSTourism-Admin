<?php
	include "koneksi.php";
	$sql = "DELETE FROM alternatif WHERE id_alternatif= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "alternatif.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "alternatif.php";
	</script>
	
<?php } ?>