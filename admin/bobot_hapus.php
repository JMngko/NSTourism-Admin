<?php
	include "koneksi.php";
	$sql = "DELETE FROM bobot WHERE id_bobot= '$_GET[id]'";
	$cek = mysqli_query($con, $sql);
	
	if($cek){
?>
	<script type="text/javascript">
 	  window.location.href = "bobot.php";
	</script>
	
<?php }else{ ?>

	<script type="text/javascript">
 	  window.location.href = "bobot.php";
	</script>
	
<?php } ?>