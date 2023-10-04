<?php
	include "koneksi.php";
	$sql = "DELETE FROM kuliner WHERE id_kuliner= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "kuliner.php";
	</script>
	
<?php } ?>