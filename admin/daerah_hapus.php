<?php
	include "koneksi.php";
	$sql = "DELETE FROM daerah WHERE id_daerah= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "daerah.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "daerah.php";
	</script>
	
<?php } ?>